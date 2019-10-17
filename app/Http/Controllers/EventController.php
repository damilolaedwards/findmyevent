<?php

namespace App\Http\Controllers;
use App\User;
use App\Event;
use Auth;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(){
    	return view('event');
    }

    public function create(Request $request){
    $valid = $request->validate([
    	'title' => 'required|min:3',
    	'description' => 'required',
    	'date' => 'required',
    	'venue' => 'required',
    	'time' => 'required',
    	'type' => 'required'
    ]);

    $imageName = time().'.'.$request->image->getClientOriginalExtension();

	$request->image->move(public_path('images/events'), $imageName);

     $event = new Event();
     $event->title = $request->title;
     $event->description = $request->description;
     $event->user_id = Auth::id();
     $event->image = $imageName;
     $event->date = $request->date;
     $event->price = $request->price;
     $event->time = $request->time;
     $event->venue = $request->venue;
     $event->type = $request->type;
     $event->save();

     return redirect()->route('dashboard')->with('message', 'Event successfully created!');


    }

    public function allevents(){
    	$events = Event::all();
    	return view('all_events')->with('events', $events);
    }
    
    public function oneevent($id){
    	$event = Event::where('id', $id)->first();
    	return view('events-page')->with('event', $event);

    } 

    public function edit($id){
    $event = Event::where('id', $id)->first();
    if($event->user_id == Auth::id()){
    return view('edit-event')->with('event', $event);	
		}else{
			return redirect()->back();
		}
    


    }

    public function update(Request $request){

    	$valid = $request->validate([
    	'title' => 'required|min:3',
    	'description' => 'required',
    	'date' => 'required',
    	'venue' => 'required',
    	'time' => 'required',
    	'type' => 'required'
    ]);
    if($request->image){
	$imageName = time().'.'.$request->image->getClientOriginalExtension();

	$request->image->move(public_path('images/events'), $imageName);	
    }

   
     $event = Event::find($request->id);
     $event->title = $request->title;
     $event->description = $request->description;
     $event->user_id = Auth::id();
     if($request->image){
     $event->image = $imageName;
 	}
     $event->date = $request->date;
     $event->price = $request->price;
     $event->time = $request->time;
     $event->venue = $request->venue;
     $event->type = $request->type;
     $event->save();

     return redirect()->route('dashboard')->with('message', 'Event successfully updated!');




    	
    }

    public function delete($id){
    	$event = Event::find($id);
    	if($event->user_id == Auth::id()){
    	$event->delete();
    	return redirect()->route('dashboard')->with('message', 'Event successfully deleted!');
    }else{
    	return redirect()->back();
    }

    }



}
