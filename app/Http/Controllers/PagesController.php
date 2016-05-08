<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){

        $people =['sajib','hasan','mamun','touhid']; 
    	
    	return view('Pages.about', compact('people'));
    }

    public function contact(){
    	return view('Pages.contact');
    }
    
}
