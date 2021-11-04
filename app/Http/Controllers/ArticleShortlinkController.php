<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ArticleShortlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('pages.Articles.shorten', compact('item'));
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
        $body = [
            "custom_bitlink" => $request->shorten_custom,
            "bitlink_id" => $item->shorten_id,
        ];
        $result = $this->rest('POST', 'custom_bitlinks', $body);
        if ($result == '400') {
            return redirect()->route('article_shorten.edit', $id)->with('danger', 'Shortlink gagal dibuat');
        }
        $data['shorten_custom'] = $result['custom_bitlink'];
        $item->update($data);
        return redirect()->route('article_shorten.edit', $id)->with('message', 'Short link berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
        try {
            $client = new Client(['base_uri' => 'https://api-ssl.bitly.com/v4/']);
            $result = $client->request($method, $url, $params);
            return json_decode($result->getBody()->getContents(), true);
        } catch (Exception $e) {
            return '400';
        }
    }
}