<?php

namespace App\Http\Controllers;

use App\Work;

class WorkController extends Controller
{
    public function getAll(){
		$arr=Work::all();
		return view('works',compact('arr'));
	}
}
