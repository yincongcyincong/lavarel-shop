<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ShoptypeController extends Controller
{
    //显示 shoptype 页面;
	public function index(Request $request)
	{
		// $list = DB::table('shoptype')->get();
		// //转到商品类型页面
		// return view('admin.shoptype',['list'=>$list]);

		//保存搜索分页
		$where = [];
    	$db = DB::table('shoptype');
    	if($request->has('Stype')){
    		$db->where('Stype','like',"%{$request->input('Stype')}%");
    		$where['Stype'] = $request->input('Stype');
    	}
    	$list = $db->paginate(1);
    	
    	return view('admin.shoptype',['list'=>$list,'where'=>$where]);
    }

    //显示添加页面
    public function create()
    {
    	return view('admin.addType');
    	// return 111;
    }

    //执行添加 
    public function store(Request $request)
    {
    	$data = $request->except('_token');
    	$row = DB::table('shoptype')->insert($data);
    	if($row>0){
    		return redirect('/admin/shoptype')->with('msg','添加成功');
    	}
    }

    //显示修改页面
    public function edit($Stid)
    {
    	$ty = DB::table('shoptype')->where('Stid',$Stid)->first();
    	return view('admin.editType',['ty'=>$ty]);
    }

    //执行修改
    public function update($Stid,Request $request)
    {
    	//获取指定字段
    	// $data = $request->only('name','sex','age');
    	// 获取除了指定字段，剩下的字段
    	$data = $request->except('_token','_method');
    	// dd($data);
    	$row = DB::table('shoptype')->where('Stid',$Stid)->update($data);
    	if($row>0){
    		return redirect('/admin/shoptype')->with('msg','修改成功');
    	}
    }

    //执行删除
    public function destroy($Stid)
    {
    	$row = DB::table('shoptype')->where('Stid',$Stid)->delete();
    	if($row>0){
    		return redirect('/admin/shoptype');
    	}
    }
}
