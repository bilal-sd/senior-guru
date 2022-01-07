<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Ameniti;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Listing;
use App\Models\File;
class FrontController extends Controller
{   
    public function index($cat){
        return view('listing',["cat"=>$cat]);
    }
    public function home(){
        return view('home');
    }
    public function ParentNav(){
        $listing = Category::where('parent_id','=',0)->where("status",1)->get();
        return response()->json($listing);
    }
    public function subcategory($id,$check = false){
        $findcat = Category::where('slug',$id)->where("status",1)->get();
        if($check == false){
            $categories = Category::where("parent_id",$findcat[0]['id'])->where("status",1)->get();
            return response()->json(['cats'=>$categories]);
        }else{
            return $findcat;
        }
    }
    public function imgcreate($listingshow){
        foreach ($listingshow as $key => $value) {
            $img = File::select("filename")->where("list_id",$value->id)->get();
            if(count($img)>0){
                $listingshow[$key]->imgs = $img;
            }
        }
        // return $listingshow;
    }
    // ========== Filtering Listings ==============
    public function Listings(Request $req){
        $id = $this->subcategory($req->cat,true)[0];
        $listingshow = Listing::where("type",$id->id)->where("status",1);
        if($req->loc != null){
            $loc = strtolower($req->loc);
            $listingshow->where(function($query ) use ($loc){
                $query->where("city","LIKE","%$loc%")->orwhere("state","LIKE","%$loc%")->orwhere("country","LIKE","%$loc%");
            });
        }
        if($req->subcat != null){
            $subid = $this->subcategory($req->subcat,true)[0];
            $listingshow->where("category",$subid->id);
        }
        if($req->keyword != null){
            $listingshow->where(function($query ) use ($req){
                $query->where("title","LIKE","%$req->keyword%")->orwhere("description","LIKE","%$req->keyword%")->orwhere("address","LIKE","%$req->keyword%");
            });
        }
        $listingshow = $listingshow->get();
        $this->imgcreate($listingshow);
        return response()->json(['listing'=>$listingshow]);
    }
    // ======== Listing Detail Page ========
    public function listingdetails($slug){
        $listingdetails = Listing::where("slug",$slug)->get()[0];
        $listingdetails->type = Category::find($listingdetails->type)->slug;
        // $listingdetails->category = Category::find($listingdetails->category)->slug;
        $amikeys = explode(",",$listingdetails->aminities);
        $img = File::select("filename")->where("list_id",$listingdetails->id)->get();
        if(count($img)>0){
            $listingdetails->imgs = $img;
        }
        $arr = Ameniti::all();
        foreach ($arr as $key => $val) {
            if($val['type']=="pf" && in_array($val->id, $amikeys)){
                $listingdetails->pf .= $val['aminities'].",";
            }
            if($val['type']=="ps" && in_array($val->id, $amikeys)){
                $listingdetails->ps .= $val['aminities'].",";
            }
            if($val['type']=="lhc" && in_array($val->id, $amikeys)){
                $listingdetails->lhc .= $val['aminities'].",";
            }
        }
        $catdetails =Listing::where("category",$listingdetails->category)->where("slug","!=",$slug)->get();
        $this->imgcreate($catdetails);
        return view('listing-detail',['detail'=>$listingdetails,'catdetails'=>$catdetails]);
    }

}
