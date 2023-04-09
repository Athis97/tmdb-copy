{{-- @props(['movies']) --}}

<div id="page_{{ $movies['page'] }}" class="page_wrapper flex justify-between flex-wrap">
    @foreach ($movies['results'] as $movie)
        <x-movie-card :movie="$movie"></x-movie-card>
    @endforeach

    @if ($movies['total_pages'] > $movies['page'])
        <div id="pagination_page_{{ $movies['page'] }}" data-next-page="{{ $movies['page'] + 1 }}"
            data-current-page="{{ $movies['page'] }}"
            class="background_color bg-[#01b4e4] content-center flex h-[50px] infinite items-center justify-center light_blue mt-[30px] p-0 pagination rounded-[8px] w-full">
            <p class="load_more">
                <a class="no_click load_more text-[1.5em] font-bold text-white" data-next-page="{{ $movies['page'] + 1 }}"
                    data-current-page="{{ $movies['page'] }}" href="/movie?page={{ $movies['page'] + 1 }}">Load More</a>
            </p>
        </div>
    @endif
</div>
