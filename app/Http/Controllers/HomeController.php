<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('front.home');
	}

}
