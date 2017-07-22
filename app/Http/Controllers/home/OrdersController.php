<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrdersController extends Controller
{
    //显示 购物车 页面;
	public function index()
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

    	

		$car = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
		
		$oo = [];
		$ll = [];
		foreach ($car as $v) {
			
			$oo[] = DB::table('orders')->where('Osid',$v->Fid)->first();
			$ll[] = DB::table('shopinfo')->where('Sid',$v->Fid)->first();
		}
		$ss = count($oo);
		return view('home.order',['link'=>$link,'shoptype'=>$shoptype,'n'=>$n,'car'=>$car,'ss'=>$ss,'oo'=>$oo,'ll'=>$ll]);
	}


    //执行删除
    public function destroy($id)
    {
    	$row = DB::table('orders')->where('Oid',$id)->delete();
    	if($row>0){
    		return redirect('/home/order');
    	}
    }
}
