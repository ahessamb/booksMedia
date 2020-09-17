<?php

namespace App\Http\Controllers;

use App\book;
use App\Http\Requests\MakeBookFormVal;
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
        return view("makeBook");
    }
    public function make(
        Request  $req){
        //dd($req ->except('_token'));
        //$req->validate(["name" => "required|max:20" , "price" => "numeric|nullable" , "pages" => "numeric|required" , "ISBN" => "numeric|nullable" , "published_at" => "date|nullable" ]);


        $req =$req->validated();
        $book = book::create($req->except('_token'));
        return view('createdBook',compact('book'));
    }
}
