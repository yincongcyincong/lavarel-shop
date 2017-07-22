<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndentsController extends Controller
{
      //显示 购物车 页面;
	public function index()
	{
		$aa = DB::table('users')->first();
		$uid = $aa->Uid;
		// echo $uid;
		// die();
		$ll = DB::table('indent')->where('Uid',session('homeindex')->Uid)->get();

		 //获取友情链接信息
        $link = DB::table('links')->get();
		
        //获取分类
    	$shoptype = DB::table('shoptype')->select('Stype','Stid')->get();

    	

    	

    	//获取用户购物车信息
        if (session('homeindex')) {
            $data = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
        }else{
            $data = [];
        }
    	

    	//获取数量
    	$n = count($data);

		return view('home.indents',['ll'=>$ll,'shoptype'=>$shoptype,'n'=>$n,'link'=>$link]);
	}

	//执行删除
    public function destroy($id)
    {
    	$row = DB::table('indent')->where('Bid',$id)->delete();
    	$row = DB::table('orders')->where('Bid',$id)->delete();
    	if($row>0){
    		return redirect('/home/indents');
    	}
    }
}
