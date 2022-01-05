<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function redirects()
    {
        $data=user::all();
        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('home',compact("data"));
        }
    }
    public function bookcar()
    {
    if (Auth::user())
    {
        return View('reservation');
    } 
    else
    {
        return view("home");
    }
    }
    public function usert()
    {
    if (Auth::user())
    {
        return View('user.userhome');
    } 
    else
    {
        return view("home");
    }
    }   
}
