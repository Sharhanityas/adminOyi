<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpeakerRequest;
use App\Models\Speaker;
use App\Models\SpeakerGallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Speaker as IlluminateEvent;
use Symfony\Component\EventDispatcher\Speaker as SymfonyEvent;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
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
        $items = Speaker::all();

        return view('pages.Speakers.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();

        return view('pages.Speakers.create')->with([
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
        $nama           = $request->nama;
        $email          = $request->email;
        $telepon        = $request->telepon;
        $deskripsi      = $request->deskripsi;
        $foto           = $request->file('foto');
        
        for($i=0; $i<count($nama); $i++){
            
            Speaker::create([
                'event_id'      => $request->event_id,
                'nama'          => $nama[$i],
                'email'         => $email[$i],
                'telepon'       => $telepon[$i],
                'foto'          => $foto[$i]->store('assets/speaker', 'public'),
                'deskripsi'     => $deskripsi[$i],
            ]);
        }
        
        return redirect()->route('speaker.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Speaker::findOrFail($id);

        return view('pages.Speakers.editor')->with([

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
        $item = Speaker::findOrFail($id);
        $item->update($data);

        return redirect()->route('speaker.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Speaker::findOrFail($id);
        $item->delete();

        Speaker::where('event_id', $id)->delete();

        return redirect()->route('speaker.index');
    }
}
