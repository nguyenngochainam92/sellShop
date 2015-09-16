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
		dd(session('statut'));
		return view('front.index');
	}

}
