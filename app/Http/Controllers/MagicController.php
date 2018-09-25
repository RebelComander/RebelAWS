<?php

namespace App\Http\Controllers;

class MagicController extends Controller
{
    public function show()
    {
    	$all = request()->all();

    	if($all['is'] == 'good')
    		return view('magic-good');
    	else
    		return view('magic-bad');	
    }
}
