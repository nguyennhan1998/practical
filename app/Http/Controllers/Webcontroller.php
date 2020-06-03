<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Author;
use App\User;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function listBook()
    {
        $books = Book::all();
        $authors = Author::all();
        return view("book.list", [
            "books" => $books,
            "authors" => $authors
        ]);
    }

    public function findBook(Request $request)
    {
        $book = Book::where("title", $request->bookname)->get();
        return view("book.find", [
            "book"=>$book,
        ]);
    }

}
