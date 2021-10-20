<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventGallery;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event as IlluminateEvent;
use Illuminate\Support\Str;
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
        $items = DB::table('events')->paginate(5);

        return view('pages.Events.index')->with([
            'items' => $items,
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
        $body = [
            "long_url" => url('detail/' . $data['slug']),
            "domain" => "bit.ly",
            "group_guid" => "",
        ];
        $shorten = $this->rest('POST', 'shorten', $body);
        $data['shorten_id'] = $shorten['id'];
        $data['shorten_custom'] = 'bit.ly/';
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

            'item' => $item,
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
        $item = Event::findOrFail($id);
        $data = $request->all();
        if (!empty($item->shorten_id)) {
            $data['slug'] = Str::slug($request->judul_event);
            $body = [
                "id" => $item->shorten_id,
                "long_url" => url('detail/' . Str::slug($request->judul_artikel)),
            ];
            $url = 'bitlinks/' . $item->shorten_id;
            $this->rest('PATCH', $url, $body);
        }
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
            'items' => $items,
        ]);
    }

    public function rest($method, $url, $body)
    {
        $headers = [
            'Authorization' => 'Bearer ' . getenv('BITLY_API'),
            'Accept' => 'application/json',
        ];
        $params = [
            'headers' => $headers,
            'body' => json_encode($body),
        ];
        $client = new Client(['base_uri' => 'https://api-ssl.bitly.com/v4/']);
        $result = $client->request($method, $url, $params);
        return json_decode($result->getBody()->getContents(), true);
    }
}