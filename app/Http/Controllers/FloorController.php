<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->has('id')) {
            $floor = new Floor();
            $floor->listing_id = $request->id;
            $floor->bed_room = $request->bedroom;
            $floor->bath_room = $request->bathroom;
            $floor->floor_area = str_replace(" ", ",", $request->length) . ' ' . "X" . ' ' . str_replace(" ", ",", $request->width);
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $fname = str_replace('-', ' ', $file->getClientOriginalName());
                $newfilename = pathinfo($fname, PATHINFO_FILENAME) . '_' . time() . '.' . $file->getClientoriginalExtension();
                $file->storeAs('public/files', $newfilename);
                $floor->img = $newfilename;
            }
            $floor->save();
            return redirect()->route('admin.listing.edit', [$request->id, "#step-3"])->with('message', 'State saved correctly!!!');
        }
    }
     public function destroy($id, $list_id)
    {
        $floor = Floor::find($id);
        Storage::delete('public/files/'.$floor->img);
                $floor->delete();
        return redirect()->route('admin.listing.edit', [$list_id, "#step-3"])->with('message', 'State saved correctly!!!');
      }
}

// public function destroy($id)
// {
//     // $data = Multi::all()->where('id', $id);
//     $data1 = Image::all()->where('id', $id);
//     foreach ($data1 as $datar) {

//         storage::delete('public/multi/' . $datar['img']);
//     }
//     Image::find($id)->delete($id);
//     Multi::find($id)->delete($id);
//     return redirect()->back()->with('success', 'Data Delete', 'Successfully');
// }