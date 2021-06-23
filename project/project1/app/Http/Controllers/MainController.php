<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function rewiew(){
        $rewiews= new ContactModel();
        return view('rewiew', ['rewiews' => $rewiews->all()]);
    }
    public function rewiew_check(Request $request){
        $valid=$request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);
        $rewiew = new ContactModel();
        $rewiew->email=$request->input('email');
        $rewiew->subject=$request->input('subject');
        $rewiew->message=$request->input('message');
        $rewiew->save();
        return redirect()->route('rewiew');
    }
    
}
