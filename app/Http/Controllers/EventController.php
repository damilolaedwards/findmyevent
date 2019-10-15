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
    	//'image' => 'image|mime:jpg, jpeg, png|max:2048'
    ]);

    $imageName = time().'.'.$request->image->getClientOriginalExtension();

	$request->image->move(public_path('images/events'), $imageName);

     $event = new Event();
     $event->title = $request->title;
     $event->description = $request->description;
     $event->user_id = Auth::id();
     $event->image = $imageName;

     $event->save();

     return redirect()->route('dashboard')->with('message', 'Event successfully created!');


    }

    public function allevents(){
    	$events = Event::all();
    	return view('all_events')->with('events', $events);
    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){
    	
    }
}
