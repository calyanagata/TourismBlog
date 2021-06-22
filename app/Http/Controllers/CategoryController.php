<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    public function index($id){
        $category = Category::where('id', $id)->firstOrFail();
        if(Auth::check() && Auth::user()->role == 'admin') return view('admin/category',['category' => $category]);
        else if(Auth::check() && Auth::user()->role == 'member') return view('member/category',['category' => $category]);
        return view('category',['category' => $category]);
    }
}
