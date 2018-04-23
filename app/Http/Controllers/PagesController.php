<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;

class PagesController extends Controller
{
  public function index(){
  	
  
  	return view('default.pages.trangchu');

  }
   public function category(){
  	$bookNew= Book::take(8)->orderBy('id','desc')->get()->toArray();

  
  	return view('default.pages.category',['bookNew'=>$bookNew]);

  }
 public function timkiem(){
 	$bookNew= Book::take(8)->orderBy('id','desc')->get()->toArray();
 	return view('default.pages.timkiem',compact('bookNew'));
 }

}
