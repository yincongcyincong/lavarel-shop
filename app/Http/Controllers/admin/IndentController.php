<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndentController extends Controller
{
    //获取订单数据并传输到视图中
    public function Index(Request $request)
    {
        //把库对象赋给一个变量
        $db = DB::table('indent');
    	//获取数据库中的数据

        $Uname = $request->input('Uname');
        $deliver = $request->input('deliver');

        //设置一个变量储存搜索条件
        $where = [];

        //判断是否有条件Uname
        if ($Uname) {
            $Uid = DB::table('users')->where('Uname','like','%'.$Uname.'%')->select('Uid')->first();
            if (empty($Uid)) {
                $db->where('Uid','');
            }else{
                $db->where('Uid',$Uid->Uid);
            }
            
            $where['Uname'] = $Uname;
        }

        //判断deliver条件
        if (is_numeric($deliver)) {
            $db->where('Bdelivered',$deliver);
            $where['deliver'] = $request->input('deliver');
        }

        $data = $db->paginate(2);
        //设置一个空数组装用户名
        $Uname = [];

    	//把用户名放入数组
        foreach ($data as $v) {
        	$Uname[] = DB::table('users')->where('Uid',$v->Uid)->first();
        }



        //获取信息数量
        $num = count($Uname);
        
    	return view('admin.indent',['data'=>$data,'Uname'=>$Uname,'num'=>$num,'where'=>$where]);
    }

    public function edit($id)
    {

    	//获取数据库中的数据
        $data = DB::table('indent')->where('Bid',$id)->first();
        // dd($data);
        //转到修改页面
    	return view('admin.edit_indent',['data'=>$data]);
    }

    public function update($id,Request $request)
    {
    	//获取数据
    	$data = $request->only('Bconsignee','Baddress','Bphone');

    	$row = DB::table('indent')->where('Bid',$id)->update($data);
    	if ($row > 0) {
    		return redirect('/admin/indent')->with('msg','修改成功');
    	}
    }

    public function show($id)
    {
    	//获取详细数据
        $data = DB::table('indent')->where('Bid',$id)->select('Bconsignee','Baddress','Bphone','Bpostalcode','Bid')->first();

        //获取订单详情表的数据
        $Odata = DB::table('orders')->where('Bid',$id)->select('Osid','Onum','Dname','Dmoney')->first();
        
        //获取商品信息
        $Sdata = DB::table('shopinfo')->where('Sid',$Odata->Osid)->select('Sname')->first();

        return view('admin.indent_info',['data'=>$data,'Odata'=>$Odata,'Sdata'=>$Sdata]);
    }

    public function destroy($id)
    {
        //删除indent表中的信息
        DB::table('indent')->where('Bid',$id)->delete();

        //删除orders表中的信息
        $row = DB::table('orders')->where('Bid',$id)->delete();

        //判断是否删除成功
        if ($row > 0) {
            return redirect('admin/indent')->with('msg','删除成功');
        }
    }
}
