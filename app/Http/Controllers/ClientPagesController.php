<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Review;
use App\Models\Speaker;
use App\Models\Article;
use App\Models\Message;
use App\Models\Registration;

class ClientPagesController extends Controller
{
    public function home() {

        $event = Event::join('event_galleries', 'events.id', '=', 'event_galleries.event_id')
                ->whereNull('event_galleries.deleted_at')
                ->orderBy('events.id', 'DESC')
                ->limit(2)
                ->get(['events.*', 'event_galleries.*']);
        $review = Review::join('review_galleries', 'reviews.id', '=', 'review_galleries.review_id')
                ->orderBy('reviews.id', 'DESC')
                ->limit(3)
                ->get(['reviews.*', 'review_galleries.*']);

        $articles = Article::join('article_galleries', 'articles.id', '=', 'article_galleries.articles_id')
                ->orderBy('articles.id', 'DESC')
                ->limit(3)
                ->get(['articles.*', 'article_galleries.*']);
        return view('client.home',compact("event","review","articles"));
    }

    public function detail($slug) {
        $review = Review::join('review_galleries', 'reviews.id', '=', 'review_galleries.review_id')
                ->orderBy('reviews.id', 'DESC')
                ->limit(3)
                ->get(['reviews.*', 'review_galleries.*']);

        $event = Event::join('event_galleries', 'events.id', '=', 'event_galleries.event_id')
                ->where('events.slug', '=', $slug)
                ->whereNull('event_galleries.deleted_at')
                ->get(['events.*', 'event_galleries.*']);

        foreach ($event as $get) {
            $Speaker = Speaker::where('event_id','=',$get->event_id)->get();
            $SpeakerCheck = Speaker::where('event_id','=',$get->event_id)->first();
        }
        return view('client.eventDetail',compact("event","review","Speaker","SpeakerCheck"));
    }

    public function eventGalleri() {
        $event = Event::join('event_galleries', 'events.id', '=', 'event_galleries.event_id')
                ->orderBy('events.id', 'DESC')
                ->whereNull('event_galleries.deleted_at')
                ->get(['events.*', 'event_galleries.*']);
        return view('client.eventGalleri',compact("event"));
    }

    public function artikel($id) {
        $articles = Article::join('article_galleries', 'articles.id', '=', 'article_galleries.articles_id')
                    ->orderBy('articles.id', 'DESC')
                    ->where('articles.id','=',$id)
                    ->get(['articles.*', 'article_galleries.*']);
        $rekomendasi = Article::inRandomOrder()
                        ->join('article_galleries', 'articles.id', '=', 'article_galleries.articles_id')
                        ->limit(3)
                        ->get(['articles.*', 'article_galleries.*']);
        $review = Review::join('review_galleries', 'reviews.id', '=', 'review_galleries.review_id')
                ->orderBy('reviews.id', 'DESC')
                ->limit(3)
                ->get(['reviews.*', 'review_galleries.*']);

        return view('client.artikel',compact("articles","review","rekomendasi"));
    }

    public function artikelGalleri() {

        $artikel = Article::join('article_galleries', 'articles.id', '=', 'article_galleries.articles_id')
                    ->orderBy('articles.id', 'DESC')
                    ->get(['articles.*', 'article_galleries.*']);
        // dd($artikel);
        return view('client.artikelGalleri',compact("artikel"));
    }

    public function pesan(Request $request)
    {
        Message::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);

        return back();
    }

    public function Registration()
    {
        $form = Registration::where('event_id','=',4)->get();
        
        return view('client.form',compact("form"));
        
    }
}
