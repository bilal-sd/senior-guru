<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Listing;

class CategoryController extends Controller
{
    //
    // public function listing(){
    //     $listing =Category::where('parent_id','=',0)->get();
    //     return view('listing',compact('listing'));
    // }
    public function listingajax(){
        $listing = Category::where('parent_id','=',0)->get();
        return response()->json($listing);
    }
    public function Listincategory($cat_slug){
        $findcat = Category::where('slug',$cat_slug)->get();
        $categories = Category::where('parent_id',$findcat[0]['id'])->get();

        $listingshow = Listing::where("type",$findcat[0]['id'])->get();
        return view('listing',compact('categories','listingshow'));
    }
    public function home(){
        $home = Category::where('parent_id','=',0)->get(); 
        return view('home',compact('home'));
    }
}
