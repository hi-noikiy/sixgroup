<?php

namespace backend\controllers;
use Yii;
use backend\models\Users;
use yii\web\Session;
class LoginController extends \yii\web\Controller{
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    /**
     * 用户登录
     */
    public function actionInsert(){
        $u_name=$_POST['u_name'];
        $u_pwd=$_POST['u_pwd'];
        $connection = \Yii::$app->db;
        $sql= $connection->createCommand("SELECT state,time FROM users WHERE u_name='$u_name'");
        $rem = $sql->queryOne();
        $time=date('Y-m-d',time());
        //判断日期
        if(!empty($rem['time'])&&$rem['time']!==$time){
            $command = $connection->createCommand("UPDATE users SET time='',state=0 WHERE u_name='$u_name'");
            $command->execute();
        }
        $sql= $connection->createCommand("SELECT * FROM users WHERE u_name='$u_name'");
        $remem = $sql->queryOne();
        //var_dump($remem);exit;
        if($remem['time']==''&&$remem['state']<3){
            if($remem){
                $remember=isset($_POST['remember'])?$_POST['remember']:'';
                //echo $remember;die;
                //记住密码
                if($remember==1){
                    $arr=array('u_name'=>$u_name,'u_pwd'=>$u_pwd);
                    $session = \Yii::$app->session;
                    $session->open();
                    $session->set('u_name',$arr);
                    //var_dump($_SESSION['u_name']);exit;
                }
                //修改数据库密码错误次数
                $command = $connection->createCommand("UPDATE users SET state=0 WHERE u_name='$u_name'");
                $command->execute();
                $session = \Yii::$app->session;
                $session->open();
                $session->set('u_name',$u_name);
                echo "<script>alert('成功！！');location.href='index.php?r=main/index'</script>";
            }else{
                //数据库修改密码错误次数
                $command = $connection->createCommand("UPDATE users SET state=state+1 WHERE u_name='$u_name'");
                $command->execute();
                echo "<script>alert('用户名或密码错误');location.href='index.php?r=login/index'</script>";
            }
        }elseif($remem['time']==''&& $remem['state']==3 ){
            //对数据库密码输错次数进行改变
            $time=date('Y-m-d',time());
            $command = $connection->createCommand("UPDATE users SET state=3,time='$time' WHERE u_name='$u_name'");
            $command->execute();
            echo "<script>alert('密码已错3次,请改日再登');location.href='index.php?r=login/index'</script>";
        }else{
            $session = \Yii::$app->session;
            $session->open();
            $session->set('u_name',$u_name);
            echo "<script>location.href='index.php?r=main/index'</script>";
        }
    }
}