<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class AdminController extends Controller
{
    protected $user_gestion;

    public function __construct(UserRepository $user_gestion)
    {
        $this->user_gestion = $user_gestion;
    }

    public function admin()
    {
        $nbrUsers = $this->user_gestion->getNumber();
        return view('back.index',compact('nbrUsers'));
    }
}
