<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $tab = Post::all(); 
        return view ('home', compact('tab'));
    }

    public function show($id){
        $tab = Post::findOrFail($id);
        return view ('show' , compact('tab'));
    }
}