<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    //
    public function listing(){
        $listing =Category::where('parent_id','=',0)->get();
        return view('listing',compact('listing'));
    }
    public function home(){
        $home = Category::where('parent_id','=',0)->get(); 
        return view('home',compact('home'));
    }
}
