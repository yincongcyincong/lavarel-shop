<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndentAddController extends Controller
{
    //
    public function add(Request $request)
    {
        
    	$data = $request->only('Bconsignee','Baddress','Bphone','Bpostalcode');
    	for ($i=0; $i < $request->input('num'); $i++) {
    		 
    		$data['Bid'] = $request->input('Bid'.$i);
    		$data['Uid'] = session('homeindex')->Uid;
    		$data['Bdelivered'] = 0;
    		$data['Bdate'] = date('Y-m-d H:i:s',time());
    		$row = DB::table('indent')->insert($data);
    		DB::table('favorites')->where('Uid',session('homeindex')->Uid)->where('Fid',$request->input('Osid'.$i))->delete();
    	}	
    	return redirect('home/indents');
    }
}
