<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



/*主界面*/
Route::any('index','MessageController@index');

/*搜索界面*/
Route::any('sreach','MainController@index');

/*主题->情侣*/
Route::any('index/love','ThemeController@love');

/*主题->北京美景*/
Route::any('index/scenery','ThemeController@scenery');

/*主题->北京欢乐谷*/
Route::any('index/kursaal','ThemeController@kursaal');

/*主题->北京房车*/
Route::any('index/carhome','ThemeController@carhome');

/*主题->北京精品*/
Route::any('index/boutique','ThemeController@Boutique');


Route::any('demo','RegisterController@demo');
Route::any('demo1','RegisterController@demo1');


/*登录*/
//Route::get('login','LoginController@index');

//普通登陆
//Route::any('login/register','LoginController@register');
//手机登陆发送短信
//Route::any('login/phone','LoginController@phone');
//手机登陆接收表单
//Route::any('login/cellphone','LoginController@cellphone');
//退出登录
//Route::any('login/del','LoginController@del');


/*列表*/
Route::get('main','MainController@index');
/*跳转至商品详情页*/
//Route::any('index','GoodController@index');
/*商品详情页*/
Route::any('good','GoodController@index');
Route::any('good/add','GoodController@add');


/*注册*/
Route::any('register','RegisterController@index');

//注册添加
Route::any('register/reg','RegisterController@register');
//邮件发送
Route::any('register/send','RegisterController@emailSend');
//邮件激活
Route::any('register/act','RegisterController@emailActivation');
//手机验证
Route::any('register/phone','RegisterController@phoneVerification');



/*房源*/
//Route::any('room','RoomController@index');

//房源信息接收表单
//Route::any('room/store','RoomController@Store');

//登陆展示页面
Route::get('login','LoginController@index');
//普通登陆
Route::any('login/register','LoginController@register');
//第三方登陆
Route::get('login/thirdparty','LoginController@thirdparty');
//手机登陆发送短信
Route::any('login/phone','LoginController@phone');
//手机登陆接收表单
Route::any('login/cellphone','LoginController@cellphone');
//推出登陆
Route::any('login/del','LoginController@del');

//房源展示页面
Route::any('room','RoomController@index');
//房源信息接收表单
Route::post('room/message','RoomController@room_message');
//房源照片
Route::any('room/photo','RoomController@room_photo');
//房源照片接收
Route::any('room/photos','RoomController@room_photos');
//房源价格页面
Route::any('room/price','RoomController@room_price');
//房源价格接收
Route::any('room/prices','RoomController@room_prices');
//房源个人信息页面
Route::any('room/personage','RoomController@room_personage');
//房源个人信息接收
Route::any('room/personages','RoomController@room_personages');
//房源发布成功页面
Route::any('room/success','RoomController@room_success');
//支付页面
Route::any('payment','PaymentController@index');


//用户个人中心

//用户中心
Route::any('center','CenterController@index');

//订单删除
Route::any('deleteorder','CenterController@deleteorder');

//删除成功
Route::any('delorder','CenterController@delorder');

//个人资料
Route::get('person','CenterController@person');

//添加个人资料
Route::post('updateperson','CenterController@updateperson');

//添加个人资料成功
Route::any('personal','CenterController@personal');

//订单管理
Route::any('order','CenterController@order');

//订单添加页面
Route::any('orderadd','CenterController@orderadd');

//提交订单
Route::any('orderad','CenterController@orderad');

//删除订单
Route::any('orderdelete','CenterController@orderdelete');

//删除
Route::any('orderdel','CenterController@orderdel');

//支付
Route::any('payment','CenterController@payment');

//修改密码页面
Route::any('updpwd','CenterController@updpwd');

//修改密码成功
Route::any('updatepwd','CenterController@updatepwd');

Route::any('pwdupdate','CenterController@pwdupdate');

//上传头像
Route::any('headp','CenterController@headp');

//上传头像成功
Route::any('headsuccess','CenterController@headsuccess');


/*关于网站底部的处理*/

//关于我们
Route::any('bottom/about','MessageController@about');
//我是房客
Route::any('bottom/customer','MessageController@customer');
//加入蜗牛
Route::any('bottom/join','MessageController@joins');