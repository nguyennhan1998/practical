<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Author;
use App\Feedback;
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
    public function surveyForm(){
        return view("survey");
    }
    public function saveFeedback(Request $request){
        $request->validate([
            "name"=> "required|string|min:3",
            "email"=>"required|string",
            "phone"=>"required",
            "feedback"=>"required|min:4"
        ]);
        try{
            Feedback::create([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "phone"=>$request->get("phone"),
                "feedback"=>$request->get("feedback"),
            ]);

//            $data["message"] = "thank for your feedback";
//            notify("global","new_category",$data);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/");
    }

}
