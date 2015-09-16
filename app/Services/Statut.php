<?php namespace App\Services

class Status {
	public function setLoginStatut($user)
	{
		session()->put('statut',$user->role->slug);
	}
	public function setVisitorStatut()
	{
		session()->put('statut','visitor');
	}
	public function setStatut()
	{
		if(!session()->has('statut'))
		{
			session()->put('status',auth()->check() ? auth()->user()->role->slug : 'visitor');
		}
	}
}