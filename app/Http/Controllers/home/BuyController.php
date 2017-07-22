<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BuyController extends Controller
{
    //添加购买信息
    public function index(Request $request,$id)
    {
    	//获取数据
    	$data['Bid'] = time();
    	$data['Osid'] = $id;
    	$data['Onum'] = $request->input('Onum');
    	$data['Scolor'] = $request->input('Scolor');
    	$data['Ssize'] = $request->input('Ssize');
    	$data['Dname'] = '快递';
    	$data['Dmoney'] = $request->input('Omoney');
        $data['Uid'] = session('homeindex')->Uid;
        $data['Sname'] = $request->input('Sname');
    	//添加
    	$row = DB::table('orders')->insert($data);
    	if ($row > 0) {
    		return redirect('indent');
    	}
    }
}
