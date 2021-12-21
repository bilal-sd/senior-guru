<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Countries;
use App\States;
use App\Cities;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function view()
    {
        return view('admin.listing');
    }
    public function index()
    {
        $listing = Listing::get();
        return response()->json($listing);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   
        if ($request->step == '1') {
            $country = Countries::find($request->country);
            $state = States::find($request->state);
            $city = Cities::find($request->city);
            $country = $country->sortname;
            $state = $state->name;
            $city = $city->name;
            if (!isset($request->id)) {
                $listing = new Listing();
                $listing->title = $request->business;
                $listing->slug = $request->slug;
                $listing->type = $request->type;
                $listing->category = $request->category;
                $listing->email = $request->email;
                $listing->phone = $request->phone;
                $listing->website = $request->website;
                $listing->address = str_replace(",","",$request->address1) . ', ' . str_replace(",","",$request->address2);
                $listing->state = $state;
                $listing->city = $city;
                $listing->country = $country;
                $listing->zip = $request->zip;
                $listing->lati = $request->lati;
                $listing->longi = $request->longi;
                $listing->save();
                $id = $listing->id;
                return response()->json(['last_id' => $id, 'status' => 'success']);
            } else {
                $listing = Listing::find($request->id);
                $listing->title = $request->business;
                $listing->slug = $request->slug;
                $listing->type = $request->type;
                $listing->category = $request->category;
                $listing->email = $request->email;
                $listing->phone = $request->phone;
                $listing->website = $request->website;
                $listing->address = $request->address1 . ' ' . $request->address2;
                $listing->state = $state;
                $listing->city = $city;
                $listing->country = $country;
                $listing->zip = $request->zip;
                $listing->lati = $request->lati;
                $listing->longi = $request->longi;
                $listing->save();
                return response()->json(['last_id' => $request->id, 'status' => 'success']);
            }
        }
        if ($request->step == '2') {
            if (!isset($request->id)) {
                $listing = new Listing();
                $listing->status = $request->status;
                $listing->keywords = $request->keywords;
                $listing->package = $request->package;
                $listing->description = $request->description;
                $listing->save();
                $id = $listing->id;
                return response()->json(['last_id' => $id, 'status' => 'success']);
            }else{
                $listing = Listing::find($request->id);
                $listing->status = $request->status;
                $listing->keywords = $request->keywords;
                $listing->package = $request->package;
                $listing->description = $request->description;
                $listing->save();
                return response()->json(['last_id' => $request->id, 'status' => 'success']);
            }
        }
    }

    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('admin.listing-form',['catSlug'=>$listing->type,'listing'=>$listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        
    }

    public function destroy($id)
    {
        try {
            $category = Listing::find($id);
            $category->delete();
            return response()->json("['status' => 'success']");
        } catch (\Throwable $th) {
            return response()->json("['status' => 'error']");
        }
    }

    public function getcountry(){
        $data = Countries::all();
        return response()->json($data);
    }

    public function getstates($c_id){
        $data = States::where('country_id',$c_id)->get();
        return response()->json($data);
    }
    public function getcities($s_id){
        $data = Cities::where('state_id',$s_id)->get();
        return response()->json($data);
    }
}
