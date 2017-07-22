<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CarController extends Controller
{
    //查看购物车信息
    public function Index(Request $request)
    {
        //获取资源
        $db = DB::table('favorites');

        //获取传过来的限制数据
        $Uname = $request->input('Uname');
        $Pname = $request->input('Pname');
       
        //用一个数组储存数据
        $where = [];

        

        if ($Pname) {
             $Sid = DB::table('shopinfo')->where('Sname','like','%'.$Pname.'%')->select('Sid')->get(); 
             $n = count($Sid);
             
             for ($i=0; $i < $n; $i++) { 
                 if ($i == 0) {
                     $db->where('Fid',$Sid[$i]->Sid);
                 }else{
                    $db->orwhere('Fid',$Sid[$i]->Sid);
                 }
             }
             
             $where['Pname'] = $Pname;
        }

        if ($Uname) {
            $Uid = DB::table('users')->where('Uname',$Uname)->select('Uid')->first();
             if (!empty($Uid)) {
                 $db->where('Uid',$Uid->Uid);
                
             }else{
                $db->where('Uid','');
             }
             $where['Uname'] = $Uname;
        }

    	//获取favorite表中的信息
    	$id = $db->paginate(1);

    	//根据用户ID和商品ID进行查找信息;
    	
    	//建立一个数组储存商品信息
    	$Sdata = [];

    	//建立一个数组储存用户信息
    	$Udata = [];
    	
    	foreach ($id as $v) {
    		//根据商品id获取商品信息
    		$Sdata[] = DB::table('shopinfo')->where('Sid',$v->Fid)->first();

    		//根据用户ID获取用户信息
    		$Udata[] = DB::table('users')->where('Uid',$v->Uid)->first();
    	}

    	$num = count($Udata);

        //设置变量编号
        $Cid = 1;
        
        // dd($Sdata[0]);
    	return view('admin.car',['id'=>$id,'Sdata'=>$Sdata,'Udata'=>$Udata,'num'=>$num,'where'=>$where,'Cid'=>$Cid]);
    }
}
