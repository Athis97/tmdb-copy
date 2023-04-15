<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPopular()
    {
        return view('listview.index', ['movies' => $this->movies('popular'), 'page_heading' => 'Popular Movies', 'type' => 'movie']);
    }

    public function paginationPopular(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('popular', $page), 'type' => 'movie']);
        }
    }

    public function indexNowPlaying()
    {
        return view('listview.index', ['movies' => $this->movies('now_playing'), 'page_heading' => 'Now Playing Movies', 'type' => 'movie']);
    }

    public function paginationNowPlaying(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('now_playing', $page), 'type' => 'movie']);
        }
    }

    public function indexUpcoming()
    {
        return view('listview.index', ['movies' => $this->movies('upcoming'), 'page_heading' => 'Upcoming Movies', 'type' => 'movie']);
    }

    public function paginationUpcoming(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('upcoming', $page), 'type' => 'movie']);
        }
    }

    public function indexTopRated()
    {
        return view('listview.index', ['movies' => $this->movies('top_rated'), 'page_heading' => 'Top Rated Movies', 'type' => 'movie']);
    }

    public function paginationTopRated(Request $request)
    {
        if ($page = $request->data_next_page) {
            return view('components.list-page-wrapper', ['movies' => $this->movies('top_rated', $page), 'type' => 'movie']);
        }
    }

    public function movies($list_type, $page = 1)
    {
        // return Cache::remember($list_type . '-movies_' . $page, now()->addSeconds(60), function () use ($list_type, $page) {
        return Http::get('https://api.themoviedb.org/3/movie/' . $list_type . '?api_key=' . env('TMDB_API_KEY') . '&language=en-US' . ($page > 1 ? '&page=' . $page : ''));
        // });
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
    public function show($slug)
    {
        $movie_id = explode('-', $slug)[0];
        $movie =  Http::get('https://api.themoviedb.org/3/movie/' . $movie_id . '?api_key=' . env('TMDB_API_KEY') . '&language=en-US');

        if (is_numeric($slug)) {
            return redirect('/movie/' . $slug . '-' . Str::slug($movie['original_title']));
        }

        // return $movie;
        return view('show.show', ['details' => $movie, 'page_heading' => $movie['original_title'] . ' (' . explode('-', $movie['release_date'])[0] . ')']);
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
