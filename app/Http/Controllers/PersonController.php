<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $page = 1;
        if ($request->page) {
            $page = $request->page;
        }

        return view('listview.person', ['persons' => $this->persons($page), 'page_heading' => 'Popular People']);
    }

    public function pagination(Request $request)
    {
        // return view('listview.person', ['persons' => $this->persons($page)]);
        return dd($request);
    }

    public function persons($page = 1)
    {
        // return Cache::remember('popular-persons_' . $page, now()->addSeconds(3600), function () use ($page) {
        return Http::get('https://api.themoviedb.org/3/person/popular?api_key=' . env('TMDB_API_KEY') . '&language=en-US' . ($page > 1 ? '&page=' . $page : ''));
        // });
    }
}
