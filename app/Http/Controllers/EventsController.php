<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Models\Event;
class EventsController extends Controller{
    public function getIndex(){
      $AllEvents = Event::latest()->get();
      return view('admin.events.index' , compact('AllEvents'));
    }
    public function getNew(){
      return view('admin.events.new');
    }
    public function postNew(Request $r){
      //Validate the request
      $Rules = [
        'title' => 'required',
        'slug' => 'required',
        'type' => 'required',
        'description' => 'required',
        'content'=> 'required|min:8',
        'image' => 'required|image'
      ];
      $Validator = Validator::make($r->all() , $Rules);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all())->withInput();
      }else{
        $EventData = $r->all();
        //Upload the image
        if($r->has('image')){
            $EventData['image'] = $r->slug.'.'.$r->image->getClientOriginalExtension();
            $r->image->storeAs('images/events' , $EventData['image']);
        }else{
            $EventData['image'] = 'event.png';
        }
        //Upload the data
        $EventData['slug'] = strtolower(str_replace(' ' , '-' , $r->slug));
        $EventData['user_id'] = 1;
        Event::create($EventData);
        //Return Success Message
        return redirect()->route('admin.allEvents');
      }
    }
    public function getEdit($id){
      $Event = Event::findOrFail($id);
      if(!$Event){abort('404');}
      return view('admin.events.edit' , compact('Event'));
    }
    public function postEdit(Request $r , $id){
      //Current Event Data
      $TheEvent = Event::find($id);
      if(!$TheEvent){abort('404');}
      //Validate the request
      $Rules = [
        'title' => 'required',
        'description' => 'required',
        'content'=> 'required|min:8',
        'image' => 'image'
      ];
      $Validator = Validator::make($r->all() , $Rules);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all())->withInput();
      }else{
        $EventData = $r->all();
        //Upload the image
        if($r->has('image')){
            $EventData['image'] = $TheEvent->slug.'.'.$r->image->getClientOriginalExtension();
            $r->image->storeAs('images/events' , $EventData['image']);
        }
        //Upload the data
        $EventData['user_id'] = 1;
        $TheEvent->update($EventData);
        //Return Success Message
        return redirect()->route('admin.allEvents')->withSuccess('Event Updated');
      }
    }
    public function delete($id){
      Event::findOrFail($id)->delete();
      return back()->withSuccess('Event Deleted');
    }
    public function uploadImage(Request $r){
       $imgpath = request()->file('file')->store('uploads', 'public');
       $FinalPath  = url("storage/app/public/")."/".$imgpath;
       return json_encode(['location' => $FinalPath]);
    }

    //Non-Admin Stuff
    public function getUserHome(){
        $AllEvents = Event::where('type' , 'event')->latest()->paginate(10);
        return view('events' , compact('AllEvents'));
    }
    public function getSingle($slug){
      $TheEvent = Event::where('slug' ,$slug)->first();
      $LatestEvents = Event::latest()->where('slug' , '!=' , $slug)->limit(6)->get();
      if(!$TheEvent){abort(404);}
      views($TheEvent)->record();
      return view('single-event' , compact('TheEvent' , 'LatestEvents'));
    }
}
