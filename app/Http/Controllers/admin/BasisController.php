<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;
class BasisController extends Controller
{
    //查询数据库方法
    public function index(Request $request)
    {
    	// 保存搜索的条件
    	$where = [];
    	$db = DB::table('userinfo');
    	if($request->has('Ufname')){
    		$db->where('Ufname','like',"%{$request->input('Ufname')}%");
    		$where['Ufname'] = $request->input('Ufname');
    	}
    	$list = $db->paginate(3);
    	
    	return view('admin.basis',['list'=>$list,'where'=>$where,'Uid'=>$request]);
    }
}

