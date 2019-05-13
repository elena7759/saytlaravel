<?php

namespace App\Http\Controllers;

use App\Work;

class WorkController extends Controller
{
    public function getAll(){
		$arr=Work::all();
		return view('works',compact('arr'));
	}
    public function getOne($id=null){
        $obj=Work::find($id);
        return view('work',compact('obj'));
    }
}
