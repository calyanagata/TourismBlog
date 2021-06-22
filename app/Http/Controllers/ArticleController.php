<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
class ArticleController extends Controller
{
    public function index($id){
        $article = Article::where('id', $id)->firstOrFail();
        if(Auth::check() && Auth::user()->role == 'admin') return view('admin/detail',['article' => $article]);
        else if(Auth::check() && Auth::user()->role == 'member') return view('member/detail',['article' => $article]);
        return view('detail',['article' => $article]);
    }

    public function show_all(){
        $article = Article::all()->sortBy('title');
        return view('admin/article',['article' => $article]);
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        Alert::success('Success','Article Deleted');
        return back();
    }

    public function blog(){
        $user_id = Auth::user()->id;
        $article = Article::where('user_id', $user_id)->get()->sortBy('title');
        return view('member/blog',['article' => $article]);
    }

    public function create(){
        $category = Category::all()->sortBy('name');
        return view('member/create',['category' => $category]);
    }

    public function save(Request $request){
        $this->validate($request,[
    		'title' => 'required',
    		'category' => 'required',
            'image' => 'required',
            'description' => 'required'
    	]);

        $timestamp = now();
        $image = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/assets';
        $request->file('image')->move($destination, $image);
            
        Article::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
    		'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'created_at' => $timestamp,
            'updated_at' => $timestamp
    	]);
        Alert::success('Success','Article Created');
    	return back();
    }
}
