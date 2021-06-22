<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::all()->sortBy('title'); 
        if(Auth::check() && Auth::user()->role == 'admin') return view('admin/home',['article' => $articles]);
        else if(Auth::check() && Auth::user()->role == 'member') return view('member/home',['article' => $articles]);
        return view('home',['article' => $articles]);
    }

    public function about_us(){
        return view('about_us');
    }

    public function admin_home(){
        $articles = Article::all()->sortBy('title');
        return view('admin.home',['article' => $articles]);
    }

    public function member_home(){
        $articles = Article::all()->sortBy('title');
        return view('member.home',['article' => $articles]);
    }
}
