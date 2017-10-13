<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoorController extends Controller
{
    public function getHome()
    {
        $name = 'hamdon';
        return View('welcome',compact('name'));
    }
}
