<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function minor(){
        return view('home/minor');
    }

    public function login(){
    	return view('home/login');
    }
    
    public function cinema(){
        return view('home/cinema');
    }

    public function cinemahall(){
        return view('home/cinemahall');
    }

    public function schedule(){
        return view('home/schedule');
    }

    public function cinemaAdd(){
        return view('home/cinema-add');
    }
}
