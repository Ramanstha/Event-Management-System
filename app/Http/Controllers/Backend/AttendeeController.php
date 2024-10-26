<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AttendeeRequest;
use App\Models\Event;
use App\Models\Attendee;

class AttendeeController extends Controller
{
    public function Attendee(){
        $file=Attendee::orderby('id','desc')->get();
        return view('backend.attendee.view',['file'=>$file]);
    }

    public function Create(){
        $getevent=Event::orderBy('id','desc')->get();
        return view('backend.attendee.create',compact('getevent'));
    }

    public function Store(attendeeRequest $request){
        $attendee=$request->except('_token');
        Attendee::create($attendee);
        return redirect()->route('view.attendee')->with('message','Attendee Add Successfully');
    }

    public function Edit($id){
        $data=Attendee::find($id);
        $getevent=Event::orderBy('id','desc')->get();
        return view('backend.attendee.edit',['data'=>$data,'getevent'=>$getevent]);
    }

    public function Update(Request $request,$id){
        $data=Attendee::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.attendee')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Attendee::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    } 
}
