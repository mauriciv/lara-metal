<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;
use App\Song;
use App\Album;

class SearchController extends Controller
{
    public function show()
    {
        return [
            'bands' => Band::search(request('q'))->take(20)->get(),
            'albums' => Album::search(request('q'))->take(9)->get(),
            'songs' => Song::search(request('q'))->take(9)->with('album.band')->get(),
        ];
        // return Band::search(request('q'))->take(9)->get();
    }
}
