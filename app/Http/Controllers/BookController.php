<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books=book::all();
        return view('booksIndex',compact('books'));
    }

    public function show($id){
        $book=book::where('id',$id)->firstOrfail();
        return view('bookShow',compact('book'));
    }

    public function form(){
        $varib=12;
        return view("makeBook",compact("varib"));
    }
    public function make(Request $req){
        //dd($req ->except('_token'));
        $req = $req->validate([
            "name" => "required|max:20" ,
            "price" => "numeric|nullable" ,
            "pages" => "numeric|nullable" ,
            "ISBN" => "numeric|nullable" ,
            "published_at" => "date|nullable" ]);

        $book = book::create($req->except('_token'));
        return view('createdBook',compact('book'));
    }
}
