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
  

  
  	return view('default.pages.category');

  }
 public function timkiem(){
 
 	return view('default.pages.timkiem');
 }

}
