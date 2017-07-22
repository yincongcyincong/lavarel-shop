<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductlistController extends Controller
{
    //显示主页
    public function index(Request $request)
    {
        //获取友情链接信息
        $link = DB::table('links')->get();

    	//获取数据库资源
    	$db = DB::table('shopinfo');

        //设置空数组储存where信息
        $where = [];

    	if ($request->has('search')) {
    		$db->where('Sname','like','%'.$request->input('search').'%');
            $where['search'] = $request->input('search');
    	}

    	//获取分类
    	$shoptype = DB::table('shoptype')->select('Stype','Stid')->get();

    	//获取全部商品信息
    	$shopinfo = $db->paginate(5);

    	//获取信息数量
    	$shopinfo1 = DB::table('shopinfo')->get();
    	$num = count($shopinfo1);

    	//获取用户购物车信息
        if (session('homeindex')) {
            $data = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
        }else{
            $data = [];
        }
    	

    	//获取数量
    	$n = count($data);

    	return view('home.product_list',['shoptype'=>$shoptype,'shopinfo'=>$shopinfo,'num'=>$num,'n'=>$n,'where'=>$where,'link'=>$link]);
    }

    //显示分支的
    public function show($Stid)
    {
        //获取友情链接信息
        $link = DB::table('links')->get();

    	//获取用户购物车信息
        if (session('homeindex')) {
            $data = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
        }else{
            $data = [];
        }

        //设置空数组
        $where = [];

    	//获取数量
    	$n = count($data);

    	//获取信息数量
    	$shopinfo1 = DB::table('shopinfo')->where('Stid',$Stid)->get();
    	$num = count($shopinfo1);

    	//获取分类
    	$shoptype = DB::table('shoptype')->select('Stype','Stid')->get();
    	
    	//获取本类商品信息
    	$shopinfo = DB::table('shopinfo')->where('Stid',$Stid)->paginate(2);

    	return view('home.product_list',['shoptype'=>$shoptype,'shopinfo'=>$shopinfo,'n'=>$n,'num'=>$num,'where'=>$where,'link'=>$link]);
    }



}
