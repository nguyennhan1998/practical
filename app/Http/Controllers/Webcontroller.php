<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
   public function demoRouting(){
       return view("demo");
   }
   public function  login(){
       return view("login");
   }
   public function index(){
       return view("home");
   }
   public function listCategory(){
     $categories=Category::all();
     return view("category.list",[
         "categories"=>$categories
     ]);
   }
   public function newCategory(){
       return view("category.new");
   }
   public function saveCategory(Request $request){
       $request->validate([
           "category_name"=>"required|string|min:6|unique:categories"
       ]);
       try{
           Category::create([
               "category_name"=>$request->get("category_name")
           ]);

       }catch (\Exception $exception){
          return redirect()->back();
       }
       return redirect()->to("/list-category");
   }

}
