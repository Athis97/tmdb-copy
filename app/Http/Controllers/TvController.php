<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPopular()
    {
        return view('listview.index', ['movies' => $this->tv('popular'), 'page_heading' => 'Popular TV Shows', 'type' => 'tv']);
    }

    public function paginationPopular(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->tv('popular', $page), 'type' => 'tv']);
        }
    }

    public function indexAiringToday()
    {
        return view('listview.index', ['movies' => $this->tv('airing_today'), 'page_heading' => 'TV Shows Airing Today', 'type' => 'tv']);
    }

    public function paginationAiringToday(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->tv('airing_today', $page), 'type' => 'tv']);
        }
    }

    public function indexOnTheAir()
    {
        return view('listview.index', ['movies' => $this->tv('on_the_air'), 'page_heading' => 'Currently Airing TV Shows', 'type' => 'tv']);
    }

    public function paginationOnTheAir(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->tv('on_the_air', $page), 'type' => 'tv']);
        }
    }

    public function indexTopRated()
    {
        return view('listview.index', ['movies' => $this->tv('top_rated'), 'page_heading' => 'Top Rated TV Shows', 'type' => 'tv']);
    }

    public function paginationTopRated(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->tv('top_rated', $page), 'type' => 'tv']);
        }
    }

    public function tv($list_type, $page = 1)
    {
        return Cache::remember($list_type . '-tv_' . $page, now()->addSeconds(2), function () use ($list_type, $page) {
            return Http::get('https://api.themoviedb.org/3/tv/' . $list_type . '?api_key=' . env('TMDB_API_KEY') . '&language=en-US' . ($page > 1 ? '&page=' . $page : ''));
        });
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
