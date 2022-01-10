<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

class CategoryController extends Controller
{
    public function index($id=0)
    {   
        $categories = $this->catChildAll($id);
        $bread = $this->reverse($id);
        return view('admin.category.categories',compact('categories','bread'));
    }

    public function store(Request $request)
    {   
        $slug = Category::where("slug",$request->slug)->count();
        if($slug > 0){
            $request->slug = $request->slug."-".rand(1,100);
        }
        if ($request->has('id')) {
            $category = Category::find($request->id);
        } else {
            $category = new Category();
            $category->status = 1;
        }

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = $request->parent_id;
        $category->save();
        return response()->json("['status' => 'success']");
    }
   
    public function show($level = 0, $parent_id = 0, $arr = [])
    {
        if (gettype(json_decode($parent_id)) != "integer") {
            $parent_id = Category::where('slug', $parent_id)->get()[0]->id;
        }
        $categories = Category::where('parent_id', $parent_id)->get();
        foreach ($categories as $category) {
            $arr[] = [
                'id' => $category->id,
                'name' => $category->name,
                'slug' => $category->slug,
                'parent_id' => $category->parent_id,
                'status' => $category->status,
                'level' => $level,
                'children' => $this->show($level + 1, $category->id)
            ];
        }
        return response()->json($arr);
    }
    public function reverse($id)
    {   
        $send = [];
        while($id != 0) {
            $category = Category::find($id);
            array_push($send, $category);
            $id = $category->parent_id;
        }
        return $send;
    }

    public function catChildAll($parent_id = 0, $check = false)
    {
        if ($check == true) {
            $count = Category::where('parent_id', $parent_id)->count();
            return $count;
        } else {
            $route = Route::current();
            $name = $route->getName();
            $categories = Category::where('parent_id', $parent_id);
            if($name!="admin.categories"){
                $categories->where('status',1);
            }
            $categories = $categories->get();
            foreach ($categories as $category) {
                $category->listcount = Listing::where("type",$category->id)->count();
                $category->subcount = Category::where('parent_id', $category->id)->count();
            }
            if($name=="listing-create"){
                return view('admin.listing.listing-create',['childCat'=>$categories]);
            }else{
                return $categories;
            }
        }
    }

    public function destroy($id)
    {
        $check = $this->catChildAll($id, true);
        $list = Listing::where('type', $id)->orwhere("category", $id)->count();
        if ($check > 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'This category has child category, please delete child category first'
            ]);
        } else if($list > 0){
            return response()->json([
                'status' => 'error',
                'message' => 'This category has '.$list.' Listings, please delete Listings first'
            ]);
        }else {
            try {
                $category = Category::find($id);
                $category->delete();
                return response()->json([
                    'status' => 'success',
                    'id' => $id
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'error',
                    'message' => $th->getMessage()
                ]);
            }
        }
    }

    public function status($id)
    {
        $category = Category::find($id);
        if ($category->status == 1) {
            $category->status = 0;
        } else {
            $category->status = 1;
        }
        $category->save();
        return response()->json(['status' => '1']);
    }
}
