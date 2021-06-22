<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function show_all(){
        $user = User::where('role','member')->get()->sortBy('name');
        return view('admin/user',['user' => $user]);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        Alert::success('Success','User Deleted');
        return back();
    }

    public function profile(){
        $user = Auth::user();
        return view('member.profile', compact("user"));
    }

    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required'
        ]);

        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $timestamp = now();
        $user->updated_at = $timestamp;
        $user->save();

        Alert::success('Success','Profile Updated');
        return back();
    }
}
