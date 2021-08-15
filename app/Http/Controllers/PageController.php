<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
	
	public function terms(Request $request)
  	{
       return view('page.terms');
	}

	public function privacy(Request $request)
  	{
       return view('page.privacy');
	}

}

?>