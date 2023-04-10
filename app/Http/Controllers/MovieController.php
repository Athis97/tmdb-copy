<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPopular()
    {
        return view('movie.index', ['movies' => $this->movies('popular'), 'page_heading' => 'Popular Movies']);
    }

    public function paginationPopular(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('popular', $page)]);
        }
    }

    public function indexNowPlaying()
    {
        return view('movie.index', ['movies' => $this->movies('now_playing'), 'page_heading' => 'Now Playing Movies']);
    }

    public function paginationNowPlaying(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('now_playing', $page)]);
        }
    }

    public function indexUpcoming()
    {
        return view('movie.index', ['movies' => $this->movies('upcoming'), 'page_heading' => 'Upcoming Movies']);
    }

    public function paginationUpcoming(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('upcoming', $page)]);
        }
    }

    public function indexTopRated()
    {
        return view('movie.index', ['movies' => $this->movies('top_rated'), 'page_heading' => 'Top Rated Movies']);
    }

    public function paginationTopRated(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('top_rated', $page)]);
        }
    }

    public function movies($list_type, $page = 1)
    {
        return Cache::remember($list_type . '-movies_' . $page, now()->addSeconds(2), function () use ($list_type, $page) {
            return Http::get('https://api.themoviedb.org/3/movie/' . $list_type . '?api_key=' . env('TMDB_API_KEY') . '&language=en-US' . ($page > 1 ? '&page=' . $page : ''));
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
