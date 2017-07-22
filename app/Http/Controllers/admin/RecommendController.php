<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RecommendController extends Controller
{
    //设置Index方法显示
    public function index(Request $request)
    {
        //把DB资源
        $db = DB::table('recommend');

        //用一个数字储存搜索条件
        $where = [];

        if ($request->input('Sid')) {
            $db->where('Sid',$request->input('Sid'));
            $where['Sid'] = $request->input('Sid');
        }

    	//获取商品ID
    	$Sid = $db->paginate(1);
    	
    	//给一个空数组储存信息
        $data = [];
        
        //获取商品信息
    	foreach ($Sid as $v) {
    		$data[] = DB::table('shopinfo')->where('Sid',$v->Sid)->first();
    	}

        //返回视图
    	return view('admin.recommend',['data'=>$data,'Sid'=>$Sid,'where'=>$where]);
    }
    
    //获取添加方法
    public function create()
    {
    	//到添加视图
    	return view('admin.recommend_add');
    }

    //添加
    public function store(Request $request)
    {
    	//自定义错误信息
        $message = [
            'required' => ':attribute 的字段是必须的',
            'unique' => '不能重复添加同一商品',
        ];

        //设定验证规则
        $this->validate($request, [
            'Sid' => 'required|unique:recommend',
        ],$message);

    	//获取数据
    	$data['Sid'] = $request->input('Sid');

    	//数据库添加数据
    	$row = DB::table('recommend')->insert($data);

    	//判断是否添加成功
    	if ($row > 0) {
    		return redirect('admin/recommend')->with('msg','添加成功');
    	}
    }

    //删除
    public function destroy($id)
    {
         //用id删除数据
    	$row = DB::table('recommend')->where('Sid',$id)->delete();

    	if ($row > 0) {
    		return redirect('admin/recommend')->with('msg','删除成功');
    	}
    }
}
