<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Mail\OrderEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {

    // $userEmail = 'supunnikz@gmail.com';
    // Mail::to($userEmail)->send(new OrderEmail("fddf","dsd"));

    // return "Email sent successfully!";


        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function services()
    {
        return view('user.services');
    }
    public function contact()
    {
        return view('user.contact');
    }

}
