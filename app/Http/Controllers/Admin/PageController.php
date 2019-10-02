<?php

namespace App\Http\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getLogin(){
        return view('page.login');

    }

}
