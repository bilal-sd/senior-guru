<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Listing;

class CategoryController extends Controller
{
    
    public function index($cat){
        return view('listing',["cat"=>$cat]);
    }    
    public function listingajax(){
        $listing = Category::where('parent_id','=',0)->get();
        return response()->json($listing);
    }
    public function Listincategory($cat_slug){
        $findcat = Category::where('slug',$cat_slug)->get();
        $categories = Category::where('parent_id',$findcat[0]['id'])->get();
        $listingshow = Listing::where("type",$findcat[0]['id'])->get();
        return response()->json(['cats'=>$categories,'listing'=>$listingshow]);
    }
    public function home(){
        $home = Category::where('parent_id','=',0)->get(); 
        return view('home',compact('home'));
    }
    public function subcategory($id){
        $listing = Category::where("parent_id",$id)->get();
        return response()->json($listing);
    }
}
