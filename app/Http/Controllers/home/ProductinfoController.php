<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductinfoController extends Controller
{
    //
    public function show($id)
    {
        //获取友情链接信息
        $link = DB::table('links')->get();

    	//获取用户购物车信息
        if (session('homeindex')) {
            $data = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
        }else{
            $data = [];
        }

    	//获取数量
    	$n = count($data);

    	//获取类型信息
    	$shoptype = DB::table('shoptype')->get();

    	//获取商品详细信息
    	$shopinfo = DB::table('shopinfo')->where('Sid',$id)->first();

    	//获取商品类型
    	$ptype = DB::table('shoptype')->where('Stid',$shopinfo->Stid)->select('Stype')->first();

    	//获取商品详细信息
    	$show = DB::table('show')->where('Sid',$id)->get();

    	//获取评论信息
    	$list = DB::table('comment')->where('goodsId',$id)->paginate(4);

    	$num = count($show);

    	return view('home.productinfo',['shoptype'=>$shoptype,'shopinfo'=>$shopinfo,'show'=>$show,'num'=>$num,'ptype'=>$ptype,'list'=>$list,'n'=>$n,'link'=>$link]);
    }

    public function edit(Request $request,$id)
    {
    	$Scolor = $request->input('Scolor');
    	//获取数据库数据
    	$Simgpath = DB::table('show')->where('Sid',$id)->where('Scolor',$Scolor)->select('Simgpath')->first();

    	echo $Simgpath->Simgpath;

    }

    //显示评论
    public function comment(Request $request,$id)
    {
    	//获取数据
    	$data = $request->only('details','Ugrade');

    	$data['goodsId'] = $id;

    	$data['Uid'] = session('homeindex')->Uid;
    	$data['Uname'] = session('homeindex')->Uname;
        $list = DB::table('orders')->where('Uid',session('homeindex')->Uid)->where('Osid',$id)->get();
        if (count($list) > 0) {
            $row = DB::table('comment')->insert($data);
             echo $row;
        }else{
            echo 0;
        }
    	
    }
}
