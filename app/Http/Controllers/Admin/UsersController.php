<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {

        $genusers = User::where('role', 0)->get();
        return view('admin.users.index',compact('genusers'));
    }




}
