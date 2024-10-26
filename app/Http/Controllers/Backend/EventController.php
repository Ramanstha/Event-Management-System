<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;

class EventController extends Controller
{
    public function Event(){
        $file=Event::orderby('id','desc')->get();
        return view('backend.event.view',['file'=>$file]);
    }

    public function Create(){
        $getCategory=Category::orderBy('id','desc')->get();
        return view('backend.event.create',compact('getCategory'));
    }

    public function Store(EventRequest $request){
        $event=$request->except('_token');
        Event::create($event);
        return redirect()->route('view.event')->with('message','Event Add Successfully');
    }

    public function Edit($id){
        $data=Event::find($id);
        $getCategory=Category::orderBy('id','desc')->get();
        return view('backend.event.edit',['data'=>$data,'getCategory'=>$getCategory]);
    }

    public function Update(Request $request,$id){
        $data=Event::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.event')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Event::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }    
}
