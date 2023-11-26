<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home(){
        $title='Home';
        return view('Home',compact('title')) ;
    }
    public function About()
    {
        $title='About';
        return view('About',compact('title')) ;
    }

    public function Project()
    {
        $title='Project';
        return view('Project',compact('title')) ;
    }
    public function Contact()
    {    $title='Contact';
        return view('Contact',compact('title')) ;
    }
}