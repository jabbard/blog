<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    protected $data=[];

    public function __construct()
    {
        $this->data['title'] = "Blog";
    }

    public function index(){
        $this->data['title']="Home";
        return view('home',$this->data);
    }

    public function about(){
        $this->data['title']="About";
        return view('about',$this->data);
    }

    public function contact(){
        return view('contact',$this->data);
    }
}
