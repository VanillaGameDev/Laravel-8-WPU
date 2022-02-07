<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about',[
            'title' => 'About',
            'active' => 'about',
            'name' => 'windah',
            'email' => 'windahgeming@gmail.co.id.com.yahoo',
            'image' => 'download.jpg',
        ]);
    }
}
