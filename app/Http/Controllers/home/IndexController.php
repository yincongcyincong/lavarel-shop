<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class IndexController extends Controller
{
    //显示 前台 页面;
	public function index(Request $request)
	{
		//获取友情链接信息
		$link = DB::table('links')->get();

		//获取首页推荐商品信息
		$list = DB::table('recommend')->get();
		
		$aa = [];
		

		foreach ($list as $v) {

				$aa[] = DB::table('shopinfo')->where('Sid',$v->Sid)->first();
		}
		
    	//获取用户购物车信息
        if (session('homeindex')) {
            $data = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
        }else{
            $data = [];
        }

    	//获取数量
    	$n = count($data);

    	//获取分类
    	$shoptype = DB::table('shoptype')->select('Stype','Stid')->get();

		// return view('home.zhuye',['aa'=>$aa,'where'=>$where]);
		return view('home.zhuye',['aa'=>$aa,'n'=>$n,'shoptype'=>$shoptype,'link'=>$link]);

	}
}
