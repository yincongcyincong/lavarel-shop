<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class JiesuanController extends Controller
{
    public function index(Request $request)
    {
    	//设置一个空数组取出空
    	$str = $request->input('arr');
    	$arr1 = explode(',',$str);
    	
    	$arr = [];
    	foreach ($arr1 as $v) {
    		if ($v != '') {
    			$arr[] = $v;
    		}
    	}

    	$n = $request->input('n');
    	for ($i=0;$i < $n;$i++) {
    		if (in_array($i, $arr)) {
    			
    		
		    	$data['Bid'] = rand(1,10000000);
		    	$data['Osid'] = $request->input('Osid'.$i);
		    	$data['Onum'] = $request->input('Onum'.$i);
		    	$data['Scolor'] = $request->input('Scolor'.$i);
		    	$data['Ssize'] = $request->input('Ssize'.$i);
		    	$data['Dname'] = '韵达快递';
		    	$data['Dmoney'] = $request->input('Dmoney'.$i);
                $data['Uid'] = session('homeindex')->Uid;
                $data['Sname'] = $request->input('Sname'.$i);


		    	$row = DB::table('orders')->insert($data);
	   		}
	    }
    	if ($row > 0) {
    		return redirect('indent');
    	}
    }

    
}
