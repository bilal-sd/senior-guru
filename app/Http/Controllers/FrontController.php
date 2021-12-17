<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Listing;

class FrontController extends Controller
{   
    public function index($cat){
        return view('listing',["cat"=>$cat]);
    }
    public function home(){
        return view('home');
    }
    public function ParentNav(){
        $listing = Category::where('parent_id','=',0)->get();
        return response()->json($listing);
    }
    public function subcategory($id){
        $findcat = Category::where('slug',$id)->get();
        $categories = Category::where("parent_id",$findcat[0]['id'])->get();
        return response()->json(['cats'=>$categories]);
    }
    // ========== Filtering Listings ==============
    public function Listings(Request $req){
        $findcat = Category::where('slug',$req->cat)->get();
        $catType = $findcat[0]['id'];
        $listingshow = Listing::where("type",$catType);
        
        if($req->loc != null){
            $loc = strtolower($req->loc);
            // $listingshow->where("city","LIKE","%$loc%")->orwhere("state","LIKE","%$loc%")->orwhere("country","LIKE","%$loc%");
            $listingshow->where(function($query ) use ($loc){
                $query->where("city","LIKE","%$loc%")->orwhere("state","LIKE","%$loc%")->orwhere("country","LIKE","%$loc%");
            });
        }
        if($req->subcat != null){
            $listingshow->where("category","LIKE","%$req->subcat%");
        }
        if($req->keyword != null){
            // $listingshow->where("title","LIKE","%$req->keyword%")->orwhere("description","LIKE","%$req->keyword%")->orwhere("address","LIKE","%$req->keyword%");
            $listingshow->where(function($query ) use ($req){
                $query->where("title","LIKE","%$req->keyword%")->orwhere("description","LIKE","%$req->keyword%")->orwhere("address","LIKE","%$req->keyword%");
            });
        }
        $listingshow = $listingshow->get();
        return response()->json(['listing'=>$listingshow]);
    }
    // ======== Listing Detail Page ========
    public function listingdetails($slug){
        $listingdetails =Listing::where("slug",$slug)->get();
        $catdetails =Listing::all();
        return view('listing-detail',['detail'=>$listingdetails],['catdetails'=>$catdetails]);

    }



}





?>