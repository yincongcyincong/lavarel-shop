<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class FavoritesController extends Controller
{
    //显示 购物车 页面;
	public function index()
	{
		$car = DB::table('favorites')->where('Uid',session('homeindex')->Uid)->get();
		
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

		$ll = [];
		foreach ($car as $v) {
			$ll[] = DB::table('shopinfo')->where('Sid',$v->Fid)->first();
		}
		$ss = count($ll);
		
		
		return view('home.car',['shoptype'=>$shoptype,'car'=>$car,'ll'=>$ll,'ss'=>$ss,'link'=>$link,'n'=>$n]);
	}


    //执行删除
    public function destroy($id)
    {
    	$row = DB::table('favorites')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('/home/car');
    	}
    }

   	
}
