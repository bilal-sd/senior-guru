<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;

class listingController extends Controller
{
    public function listingindex(){
        $listingshow = Listing::all();
        return view('listing',['listingshow'=>$listingshow]);
    }
    public function listingdetails($slug){
        $listingdetails =Listing::where("slug",$slug)->get();
        $catdetails =Listing::all();
        return view('listing-detail',['detail'=>$listingdetails],['catdetails'=>$catdetails]);

    }


}
