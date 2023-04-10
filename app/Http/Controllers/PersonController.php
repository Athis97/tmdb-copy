<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PersonController extends Controller
{
    public function index()
    {
        return view('listview.person', ['persons' => $this->persons(), 'page_heading' => 'Popular People']);
    }

    public function pagination(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies($page)]);
        }
    }

    public function persons($page = 1)
    {
        return Cache::remember('popular-persons_' . $page, now()->addSeconds(2), function () use ($page) {
            return Http::get('https://api.themoviedb.org/3/person/popular?api_key=' . env('TMDB_API_KEY') . '&language=en-US' . ($page > 1 ? '&page=' . $page : ''));
        });
    }
}
