<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Category(){
        $file=Category::orderby('id','desc')->get();
        return view('backend.category.view',['file'=>$file]);
    }

    public function Create(){
        return view('backend.category.create');
    }

    public function Store(CategoryRequest $request){
        $category=$request->except('_token');
        Category::create($category);
        return redirect()->route('view.category')->with('message','Category Add Successfully');
    }

    public function Edit($id){
        $data=Category::find($id);
        return view('backend.category.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Category::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.category')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }    
}
