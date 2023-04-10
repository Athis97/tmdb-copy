<header class="bg-[#032541] text-white">
    <div class="content flex justify-center">
        <div class="flex font-semibold justify-between px-[40px] py-[20px] sub_media w-full">
            <div class="flex nav_wrapper">
                <a class="logo mr-5" href="/">
                    <img src="{{ asset('/images/logo.svg') }}" alt="The Movie Database (TMDB)" width="154"
                        height="20">
                </a>

                <ul class="flex" data-role="menu" tabindex="0" role="menubar">
                    <x-menu-item :menu="[
                        'link' => '/movie',
                        'name' => 'Movies',
                    ]" :submenu="[
                        [
                            'link' => '/movie',
                            'name' => 'Popular',
                        ],
                        [
                            'link' => '/movie/now-playing',
                            'name' => 'Now Playing',
                        ],
                        [
                            'link' => '/movie/upcoming',
                            'name' => 'Upcoming',
                        ],
                        [
                            'link' => '/movie/top-rated',
                            'name' => 'Top Rated',
                        ],
                    ]" />
                    <x-menu-item :menu="[
                        'link' => '/tv',
                        'name' => 'TV Shows',
                    ]" :submenu="[
                        [
                            'link' => '/tv',
                            'name' => 'Popular',
                        ],
                        [
                            'link' => '/tv/airing-today',
                            'name' => 'Airing Today',
                        ],
                        [
                            'link' => '/tv/on-the-air',
                            'name' => 'On TV',
                        ],
                        [
                            'link' => '/tv/top-rated',
                            'name' => 'Top Rated',
                        ],
                    ]" />
                    <x-menu-item :menu="[
                        'link' => '/person',
                        'name' => 'People',
                    ]" :submenu="[
                        [
                            'link' => '/person',
                            'name' => 'Popular People',
                        ],
                    ]" />
                    <x-menu-item :menu="[
                        'link' => '#',
                        'name' => 'More',
                    ]" :submenu="[
                        [
                            'link' => '/discuss',
                            'name' => 'Discussions',
                        ],
                        [
                            'link' => '/leaderboard',
                            'name' => 'Leaderboard',
                        ],
                        [
                            'link' => '/talk',
                            'name' => 'Support',
                        ],
                        [
                            'link' => '/documentation/api',
                            'name' => 'API',
                        ],
                    ]" />
                </ul>
            </div>

            <div class="flex">
                <ul class="flex primary">
                    <li class="glyph ml-3 new_buttons" data-role="tooltip">
                        <a class="new_icon no_click" href="#">
                            <span class="glyphicons_v2 plus white"></span>
                        </a>
                    </li>
                    <li class="ml-3 translate" data-role="tooltip">
                        <div>en</div>
                    </li>
                    <li class="ml-3"><a href="/login">Login</a></li>
                    <li class="ml-3"><a href="/signup">Join TMDB</a></li>

                    <li class="glyph ml-3 search_buttons">
                        <a class="search" href="/search"><span class="glyphicons_v2 search blue"></span></a>
                        <a class="close hide" href="/search"><span
                                class="glyphicons_v2 menu-close invert svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hidden search_bar">
        <section class="search show_search_false">
            <div class="sub_media">
                <form id="search_form" action="/search" method="get" accept-charset="utf-8">
                    <label>
                        <span tabindex="-1" role="presentation"
                            class="k-widget k-autocomplete k-autocomplete-clearable k-state-default"
                            style=""><input dir="auto" id="search_v4" name="query" type="text"
                                tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false"
                                placeholder="Search for a movie, tv show, person..." value=""
                                data-role="autocomplete" class="k-input" role="textbox" aria-haspopup="true"
                                aria-disabled="false" aria-readonly="false" aria-owns="search_v4_listbox"
                                aria-autocomplete="list"><span unselectable="on" class="k-clear-value k-hidden"
                                title="clear" role="button" tabindex="-1"><span
                                    class="k-icon k-i-x"></span></span><span
                                class="k-icon k-i-loading k-hidden"></span></span>
                    </label>
                    <input type="submit" disabled="">
                </form>
            </div>
        </section>
    </div>
    <div class="k-list-container k-popup k-group k-reset" id="search_v4-list" data-role="popup" aria-hidden="true"
        style="display: none; position: absolute;">
        <div class="k-group-header" style="display:none"></div>
        <div class="k-list-scroller" unselectable="on">
            <ul unselectable="on" class="k-list k-reset" tabindex="-1" aria-hidden="true" id="search_v4_listbox"
                aria-live="polite" data-role="staticlist" role="listbox"></ul>
        </div>
        <div class="k-nodata" style="display:none">
            <div></div>
        </div>
    </div>
</header>
