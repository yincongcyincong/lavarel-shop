<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class CommentController extends Controller
{
    //显示comment 页面;
	public function index(Request $request)
	{
		// $list = DB::table('comment')->get();
		// //转到用户评论页面
		// return view('admin.comment',['list'=>$list]);

		//保存搜索分页
		$where = [];
    	$db = DB::table('comment');
    	if($request->has('goodsId')){
    		$db->where('goodsId','like',"%{$request->input('goodsId')}%");
    		$where['goodsId'] = $request->input('goodsId');
    	}
    	$list = $db->paginate(1);
    	
    	return view('admin.comment',['list'=>$list,'where'=>$where]);
    }
}
