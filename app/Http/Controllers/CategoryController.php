<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories');
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        if($request->has('id')){
            $category = Category::find($request->id);
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->save();
        }else{
            $contact = new Category();
            $contact->name = $request->name;
            $contact->slug = $request->slug;       
            $contact->status = 1;       
            $contact->parent_id = $request->parent_id;
            $contact->save();
        }
        return response()->json("['status' => 'success']");
    }

    public function show($level=0,$parent_id=0,$arr = [])
    {
        $categories = Category::where('parent_id',$parent_id)->get();
        foreach ($categories as $category) {
            $arr[] = [
                'id' => $category->id,
                'name' => $category->name,
                'slug' => $category->slug,
                'parent_id' => $category->parent_id,
                'status' => $category->status,
                'level' => $level,
                'children' => $this->show($level+1,$category->id)
            ];
        }
        return response()->json($arr);  
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy($id)
    {
        try {
            $category = Category::find($id);
            $category->delete();
            return response()->json("['status' => 'success']");
        } catch (\Throwable $th) {
            return response()->json("['status' => 'error']");
        }
    }

    public function status($id)
    {
        $category = Category::find($id);
        if ($category->status == 1) {
            $category->status = 0;
        }else{
            $category->status = 1;
        }
        $category->save();
        return response()->json("['status' => 'success']");
    }
}
