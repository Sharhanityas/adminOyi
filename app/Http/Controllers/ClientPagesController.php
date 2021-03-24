<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function home() {
        return view('client.home');
    }
}
