<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventGallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event as IlluminateEvent;
use Symfony\Component\EventDispatcher\Event as SymfonyEvent;

class EventController extends Controller
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
        $items = Event::all();

        return view('pages.Events.index')->with([
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
        return view('pages.Events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_event);
        // dd($data);
        Event::create($data);
        return redirect()->route('event.index');
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
        $item = Event::findOrFail($id);

        return view('pages.Events.editor')->with([

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
    public function update(EventRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_event);
        // dd($data);
        $item = Event::findOrFail($id);
        $item->update($data);


        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Event::findOrFail($id);
        $item->delete();

        EventGallery::where('event_id', $id)->delete();

        return redirect()->route('event.index');
    }

    public function gallery(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $items = EventGallery::with('event')
            ->where('event_id', $id)
            ->get();

        return view('pages.Events.gallery')->with([
            'event' => $event,
            'items' => $items
        ]);
    }
}
