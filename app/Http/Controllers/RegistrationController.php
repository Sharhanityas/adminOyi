<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Registration as IlluminateEvent;
use Symfony\Component\EventDispatcher\Registration as SymfonyEvent;
use App\Models\Event;
use App\Models\Response;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $items = Registration::join('events','registrations.event_id','=','events.id')->groupBy('registrations.event_id')->get(['registrations.*','events.judul_event']);
        return view('pages.Registrations.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *->groupBy('event_id')
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();

        return view('pages.Registrations.create')->with([
            'events' => $events
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atribut    = $request->atribut;
        $type       = $request->type;
        $total      = count($atribut);
        // var_dump($atribut);
        for($i=0; $i<$total; $i++){
            
            Registration::create([
                'event_id'   => $request->event_id,
                'atribut'    => $atribut[$i],
                'slug'       => $slug = Str::slug($atribut[$i], '_'),
                'type'       => $type[$i]
            ]);
        }

        return redirect()->route('registration.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $item = Registration::findOrFail($id);
        $item = Registration::where('event_id',$id)->get();
        // dd($item);
        return view('pages.Registrations.editor')->with([

            'item'  => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Registration::find($id);
        $item->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Registration::findOrFail($id);
        $item->delete();

        return back();
    }

    public function responses()
    {
        $items = Response::with('event')->where('event_id','=',4)->get();
        // dd($items);

        return view('pages.Registrations.response',compact('items'));
    }
}
