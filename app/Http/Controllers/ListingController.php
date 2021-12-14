<?php

namespace App\Http\Controllers;

use App\Listing;
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
                $listing->state = $request->state;
                $listing->city = $request->city;
                $listing->country = $request->country;
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
                $listing->state = $request->state;
                $listing->city = $request->city;
                $listing->country = $request->country;
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
        return view('admin.listing-form',['catId'=>$listing->type,'listing'=>$listing]);
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
}
