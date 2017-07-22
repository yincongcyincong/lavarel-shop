<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class IndentController extends Controller
{
	//查询数据库方法
    public function index(Request $request)
    {
        
       $list = DB::table('userinfo')->where('Uid',session('homeindex')->Uid)->get();

       $num = DB::table('indent')->where('Uid',session('homeindex')->Uid)->select('Bid')->get();

       $data1 = DB::table('orders')->where('Uid',session('homeindex')->Uid)->get();

       //设置空数组存储没有支付的商品
       $data = [];

       $arr = [];
       foreach ($num as $value) {
          $arr[] = $value->Bid;
       }

       foreach ($data1 as $value) {
           if (!in_array($value->Bid,$arr)) {
               $data[] = $value;
           }
       }

       $num = count($data);
    	return view('home/indent',['list'=>$list,'data'=>$data,'num'=>$num]);

    }

    public function show(Request $request,$Uid)
     {
      
        $list = DB::table('district')->where('Upid',$Uid)->get();
        echo json_encode($list);
     }

    //
    public function create()
    {
    	return view('home.indentadd');
    }

    public function store(Request $request)
    {
       $list = DB::table('district')->where('Upid',$request->input('upid'))->get();
        echo json_encode($list);
    }

    public function edit($id)
    {
    	$data = DB::table('userinfo')->where('id',$id)->first();
    	return view('home.indentedit',['data'=>$data]);
    }

    public function update($Uid,Request $request)
    {
    	//获取省市区信息
    	$Ufsheng = DB::table('district')->where('id',$request->input('Ufsheng'))->select('name')->first();

        $Ufshi = DB::table('district')->where('id',$request->input('Ufshi'))->select('name')->first();

        $Uzone = DB::table('district')->where('id',$request->input('Uzone'))->select('name')->first();

        $data = $request->only('Ufphone','Ufname','Ufpostalcode','Ufaddress');

        $data['Ufsheng'] = $Ufsheng->name;

        $data['Ufshi'] = $Ufshi->name;

        $data['Uzone'] = $Uzone->name;
        $data['Uid'] = session('homeindex')->Uid;

    	$row = DB::table('userinfo')->insert($data);
    	if($row>0){
    		return redirect('indent');
    	}

    }

    public function destroy($id)
    {
    	$row = DB::table('userinfo')->where('id',$id)->delete();
        if ($row > 0) {
            return redirect('indent');
        }
    }
}
