<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class DashboardController extends Controller
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

    public function index()
    {
        $items = Message::all();
        return view('pages.dashboard')->with([
            'items' => $items
        ]);
    }
}
