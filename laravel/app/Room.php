<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,Input,Redirect,url,Validator,Request;


/**
 *	@Modular 	房源处理Model
 *	@Class 		Room
 *	@Author 	宁铭杰
 *	@Time 		2016/05/27
**/

class Room extends Model
{

	//搜索
    public function search($site,$r_price,$rom,$layout)
    {
    	if ($site) {	//区域
    		$where2['r_district']=$site;
    	}elseif($site=='no'){
    		unset($where2['r_district']);
    	}
    	if ($rom) {		//房型
    		$where2['r_type']=$rom;
    	}elseif($rom=='no'){
    		unset($where2['r_type']);
    	}
    	if ($layout) {	//格局
    		$where2['r_pattem']=$layout;
    	}elseif($layout=='no'){
    		unset($where2['r_pattem']);
    	}
    	if ($r_price & empty($site) || empty($rom) || empty($layout)) {	//价格存在
    		$price=explode('-',$r_price);
    		@$price1=$price[0];
    		@$price2=$price[1];
    		$row=DB::table('room')
				->whereBetween('r_price', [$price1,$price2])
				->paginate(5);
    	}elseif(empty($r_price)	& !empty($site) || !empty($rom) || !empty($layout)){	//价格空在其他值存在
    		$row=DB::table('room')
				->where($where2)
				->paginate(5);
    	}elseif(empty($r_price) & empty($site) & empty($rom) & empty($layout)){	//所有条件为空
    		$row=DB::table('room')
				->paginate(5);
    	}else{
    		$price=explode('-',$r_price);
    		$price1=$price[0];
    		$price2=$price[1];
    		$row=DB::table('room')
				->where($where2)
				->whereBetween('r_price', [$price1,$price2])
				->paginate(5);
    	}
        $row=DB::table('room')
                ->where($where2)
                ->paginate(5);
    	

		return $row;
    }
}
