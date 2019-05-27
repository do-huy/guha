<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function introduce()
    {
        return view('introduce.introduce');
    }
    public function contact()
    {
        return view('contact.contact');
    }
    public function price()
    {
        return view('price.price');
    }
     public function service()
    {
        return view('service.service');
    }
   
}
