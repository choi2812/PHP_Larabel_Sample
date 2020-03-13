<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $books=[
            'Abook',
            'Bbook'
        ];

        return view('welcome',['books'=>$books]);
    }
    public function  hello(){
        $books=[
            'Atestbook',
            'Ctestbook'
        ];
        return view('hello')->with(['books' => $books]);
    }
    public function contact(){
        $books=[
            'Atest1book',
            'Btest2book'
        ];
        return view('contact')->withBooks($books);
    }
}
