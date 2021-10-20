<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleGallery;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleController extends Controller
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
        $items = Article::all();
        $truncated = Str::limit($items, 20);
        $items = DB::table('articles')->paginate(5);
        return view('pages.Articles.index')->with([
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
        return view('pages.Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_artikel);
        $body = [
            "long_url" => url('artikel/' . $data['slug']),
            "domain" => "bit.ly",
            "group_guid" => "",
        ];
        $shorten = $this->rest('POST', 'shorten', $body);
        $data['shorten_id'] = $shorten['id'];
        $data['shorten_custom'] = 'bit.ly/';
        Article::create($data);
        return redirect()->route('article.index');
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
        $item = Article::findOrFail($id);

        return view('pages.Articles.editor')->with([

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
    public function update(Request $request, $id)
    {
        $item = Article::findOrFail($id);
        $data = $request->all();
        if (!empty($item->shorten_id)) {
            $data['slug'] = Str::slug($request->judul_artikel);
            $body = [
                "id" => $item->shorten_id,
                "long_url" => url('artikel/' . Str::slug($request->judul_artikel)),
            ];
            $url = 'bitlinks/' . $item->shorten_id;
            $this->rest('PATCH', $url, $body);
        }
        $item->update($data);

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Article::findOrFail($id);
        $item->delete();

        ArticleGallery::where('articles_id', $id)->delete();

        return redirect()->route('article.index');
    }
    public function gallery(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $items = ArticleGallery::with('article')
            ->where('articles_id', $id)
            ->get();

        return view('pages.Articles.gallery')->with([
            'article' => $article,
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