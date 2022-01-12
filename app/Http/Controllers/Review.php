<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review as Reviews;
class Review extends Controller
{
    public function store(Request $request)
    {   
        $review = new Reviews();
        $review->list_id = $request->list_id;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->phone = $request->phone;
        $review->rating = $request->rating3;
        $review->message = $request->message;
        $review->save();
        return redirect()->back();
    }
}
