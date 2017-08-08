<?php

namespace App\Http\Controllers;

class formviewController extends Controller
{
    public function viewwithaform()
    {
    	$data = [
    	 'num1' => 'Mish',
    	 'num2' => 'S' 
    	];

    	return view('viewwithaform',$data);
    }
}
