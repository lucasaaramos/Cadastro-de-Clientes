<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where([
                ['title', 'like', '%'.$search. '%']
            ])->get();


        }else {
            $events = Event::all();
        }
        
        
    
        return view('welcome',['events' => $events, 'search' => $search]);

    }

    public function create() {

        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->email = $request->email;
        $event->date = $request->date;
        $event->address = $request->address;
        $event->cep = $request->cep;
        $event->city = $request->city;
        $event->stade = $request->stade;

        

        //image upload request
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() .strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }

    public function dashboard(){

        $user = auth()->user();
        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }

    public function destroy($id) {

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Usuário excluído com sucesso!');
    }

    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request) {

        $data = $request->all();

        Event::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }
}


