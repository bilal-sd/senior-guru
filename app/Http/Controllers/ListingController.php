<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Countries;
use App\Models\States;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Models\Ameniti;
use App\Models\Category;
use App\Models\File;
use App\Models\Floor;
use Illuminate\Support\Facades\Storage;


class ListingController extends Controller
{

    public function view()
    {
        return view('admin.listing.listing');
    }
    public function index()
    {
        $listing = Listing::join('categories', 'listings.type', '=', 'categories.id')->select('listings.*', 'categories.name as cat_type')->orderBy('id', 'desc')->get();
        foreach($listing as $key=>$val){
            $listing[$key]->cat_sub = Category::find($val['category'])->name;
        }
        return response()->json($listing);
        // print_r($listing);
    }

    public function create($slug)
    {
        $ami = Ameniti::all();
        $id = Category::where("slug",$slug)->get()[0]->id;
        return view('admin.listing.listing-form', ['catSlug' => $id, "aminities" => $ami]);
    }

    public function store(Request $request)
    { 
          $request->validate([
              'business' => 'required',
              'slug' => 'required',
              'category' => 'required',
              'email' => 'required',
              'phone' => 'required',
              'address1' => 'required',
              'country' => 'required',
              'state' => 'required',
              'city' => 'required',
              'zip' => 'required',
          ]);   
          $ami = "";
        if(isset($request->pf)){
            $ami .= implode(",", $request->pf) . ",";
        } 
        if(isset($request->ps)){
            $ami .= implode(",", $request->ps) . ",";
        }
        if(isset($request->lhc)){
            $ami .= implode(",", $request->lhc). ",";
        }
        if (!isset($request->id)) {
            $listing = new Listing();
        } else {
            $listing = Listing::find($request->id);
            $id = $request->id;
        }
        if($request->form == "step1"){
            $slug = Listing::where("slug",$request->slug)->count();
            if($slug > 0){
                $request->slug = $request->slug."-".rand(1,100);
            }
            $listing->title = $request->business;
            $listing->slug = $request->slug;
            $listing->type = $request->type;
            $listing->category = $request->category;
            $listing->email = $request->email;
            $listing->phone = $request->phone;
            $listing->website = $request->web;
            $listing->address = str_replace(",", "", $request->address1) . ', ' . str_replace(",", "", $request->address2);
            $listing->state = $request->state;
            $listing->city = $request->city;
            $listing->country = $request->country;
            $listing->zip = $request->zip;
            $listing->lati = $request->latitude;
            $listing->longi = $request->longitude;
            $listing->save();
            $id = (!isset($request->id)) ? $listing->id : $request->id;
            return redirect()->route('admin.listing.edit', [$id,"#step-2"])->with('message', 'State saved correctly!!!');
        }
        if($request->form == "step2"){
            $listing->status = $request->status;
            $listing->keywords = $request->keywords;
            $listing->package = $request->package;
            $listing->description = $request->description;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $fname = str_replace('-', ' ', $file->getClientOriginalName());
                    $newfilename = pathinfo($fname, PATHINFO_FILENAME) . '_' . time() . '.' . $file->getClientoriginalExtension();
                    $file->storeAs('public/files', $newfilename);
                    $fileimg = new File;
                    $fileimg->list_id = $id;
                    $fileimg->filename = $newfilename;
                    $fileimg->save();
                }
            }
            $listing->save();
            return redirect()->route('admin.listing.edit', [$id,"#step-3"])->with('message', 'State saved correctly!!!');
        }
        if($request->form == "step3"){
            $listing->aminities = $ami;
            $listing->save();
            return redirect()->route('admin.listing.edit', [$id,"#step-3"])->with('message', 'State saved correctly!!!');
        }
    }
    
    public function edit($id)
    {
        $listing = Listing::find($id);
        $id = Category::find($listing->type)->id;
        $img = File::select("filename","id")->where("list_id",$listing->id)->get();
        if(count($img)>0){
            $listing->imgs = $img;
        }
        $ami = Ameniti::all();
        $floor = Floor::where("listing_id",$listing->id)->get();
        return view('admin.listing.listing-form', ['catSlug' =>$id, 'listing' => $listing, "aminities" => $ami,"floor" =>$floor]);
    }

    public function destroy($id)
    {
        try {
            $list = Listing::find($id);
            $files = File::where("list_id",$id)->get();
            if(count($files)>0){
                foreach ($files as $key => $value) {
                    Storage::delete('public/files/' . $value["filename"]);
                }
                $files->delete();
            }
            $list->delete();
            return response()->json("['status' => 'success']");
        } catch (\Throwable $th) {
            return response()->json("['status' => 'error']");
        }
    }
    public function filedelete($id){
        $list = File::find($id);
        Storage::delete('public/files/' . $list->filename);
        $list->delete();
        // return redirect()->back();
        return response()->json(['status' => '1']);
    }
    public function status($id)
    {
        $list = Listing::find($id);
        if ($list->status == 1) {
            $list->status = 0;
        } else {
            $list->status = 1;
        }
        $list->save();
        return response()->json(['status' => '1']);
    }

    public function getcountry()
    {
        $data = Countries::all();
        return response()->json($data);
    }

    public function getstates($c_id)
    {
        $new = Countries::where("sortname", $c_id)->get();
        $data = States::where('country_id', $new[0]["id"])->get();
        return response()->json($data);
    }
    public function getcities($s_id)
    {
        $data = States::where('name', $s_id)->get();
        $data = Cities::where('state_id', $data[0]["id"])->get();
        return response()->json($data);
    }
}
