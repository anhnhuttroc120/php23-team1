<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;

class PagesController extends Controller
{
  public function index(){
  	$bookNew= Book::take(8)->orderBy('id','desc')->get()->toArray();
  	$bookSale=Book::take(8)->where('sale_off','>','0')->get()->toArray();
  
  	return view('default.pages.trangchu',['bookNew'=>$bookNew,'bookSale'=>$bookSale]);

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
