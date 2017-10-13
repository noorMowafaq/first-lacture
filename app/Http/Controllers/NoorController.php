<?php

namespace App\Http\Controllers;

use App\Post; // استخدم الموديل الي اسمه بوست
use Illuminate\Http\Request;

class NoorController extends Controller
{
    public function getHome()
    {
        $posts = Post::first(); // دا اخلي كل البوستات بمتغير
        // return $posts;
        return View('welcome',compact('posts')); // ارسال المعلومات الى الفيو 
    }
}
