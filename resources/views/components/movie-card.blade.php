<div
    class="border-[#e3e3e3] border-[1px] card content-start flex flex-wrap relative rounded-[8px] shadow-[0_2px_8px_#0000001a] style_1 w-[180px] overflow-hidden mt-[30px]">
    <div class="image">
        <div class="wrapper">
            <a class="image" href="/movie/{{$movie['id']}}" title="Puss in Boots: The Last Wish">
                <img loading="lazy" class="poster"
                    src="https://image.tmdb.org/t/p/w220_and_h330_face{{$movie['poster_path']}}"
                    srcset="https://image.tmdb.org/t/p/w220_and_h330_face{{$movie['poster_path']}} 1x, https://image.tmdb.org/t/p/w440_and_h660_face{{$movie['poster_path']}} 2x"
                    alt="">

            </a>
        </div>
        <div class="absolute opacity-[0.6] options right-[8px] top-[8px] z-[4]" data-id="{{$movie['id']}}"
            data-object-id="54a5ba9fc3a368764f01212a" data-media-type="movie" data-role="tooltip">
            <a class="no_click" href="#">
                <div
                    class="bg-[url(http://127.0.0.1:8000/images/circle-more-white.svg)] bg-center bg-no-repeat circle-more glyphicons_v2 h-[1em] text-[1.6em] w-[1em] white">
                </div>
            </a>
        </div>
    </div>
    <div class="content content-start flex flex-wrap p-[26px_10px_12px_10px] relative">
        <div
            class="absolute consensus h-[38px] inline-block left-[10px] scale-100 tight top-[-19px] transition-transform w-[38px]">
            <div class="bg-[#081c22] inline-block outer_ring p-[2px] rounded-[50%] w-[38px] h-[38px]">
                <div class="54a5ba9fc3a368764f01212a inline-block relative text-center user_score_chart w-full h-full"
                    data-percent="84.0" data-track-color="#204529" data-bar-color="#21d07a">
                    <div class="flex item-center justify-center percent">
                        <span class="text-white text-[0.6em] icon icon-r{{$movie['vote_average']*10}}"></span>
                    </div>
                    <canvas class="absolute top-0 left-0 bg-transparent" height="34" width="34"></canvas>
                </div>
            </div>
        </div>

        <h2 class="font-semibold m-0 text-[1em] w-full"><a href="/movie/{{$movie['id']}}" title="Puss in Boots: The Last Wish"
                class="font-bold text-black">{{$movie['original_title']}}</a></h2>
        <p class="m-0 p-0 text-[#0009] text-[1em]">{{$movie['release_date']}}</p>
    </div>

    <div class="hover {{$movie['id']}}"></div>
</div>
