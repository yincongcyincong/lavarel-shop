<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CarinfoController extends Controller
{
    //加购物车信息
    public function index(Request $request,$id)
    {
    	$data['Fid'] = $id;
    	$data['Scolor'] = $request->input('Scolor');
    	$data['Ssize'] = $request->input('Ssize');
    	$data['Snum'] = $request->input('Snum');
    	$data['Uid'] = session('homeindex')->Uid;

    	//查数据库
    	$dbData = DB::table('favorites')->where('Fid',$id)->where('Uid',session('homeindex')->Uid)->get();

    	// 判断商品是否已经加入购物车
    	if (count($dbData) > 0) {
    		echo '已存在';
    		die();
    	}

    	$row = DB::table('favorites')->insert($data);
    	if ($row > 0) {
    		echo '添加成功';
    	}
    }
}
