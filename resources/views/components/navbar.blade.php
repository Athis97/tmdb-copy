<header class="bg-[#032541] text-white">
    <div class="content">
        <div class="flex font-semibold justify-between px-[40px] py-[20px] sub_media">
            <div class="flex nav_wrapper">
                <a class="logo mr-5" href="/">
                    <img src="{{ asset('/images/logo.svg') }}" alt="The Movie Database (TMDB)" width="154"
                        height="20">
                </a>

                <ul class="flex" data-role="menu" tabindex="0" role="menubar">
                    <li aria-haspopup="true" class="mr-5" role="menuitem">
                        <a class="no_click k-link k-menu-link" href="/movie">Movies<span
                                class="k-menu-expand-arrow k-icon k-i-arrow-60-down"></span></a>

                        <ul class="hidden" role="menu" aria-hidden="true">
                            <li class="k-item k-menu-item k-state-default k-first" role="menuitem"><a href="/movie"
                                    class="k-link k-menu-link">Popular</a></li>
                            <li class="k-item k-menu-item k-state-default" role="menuitem"><a href="/movie/now-playing"
                                    class="k-link k-menu-link">Now Playing</a>
                            </li>
                            <li class="k-item k-menu-item k-state-default" role="menuitem"><a href="/movie/upcoming"
                                    class="k-link k-menu-link">Upcoming</a></li>
                            <li class="k-item k-menu-item k-state-default k-last" role="menuitem"><a
                                    href="/movie/top-rated" class="k-link k-menu-link">Top Rated</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true" class="mr-5" role="menuitem">
                        <a class="no_click k-link k-menu-link" href="/tv">TV Shows<span
                                class="k-menu-expand-arrow k-icon k-i-arrow-60-down"></span></a>

                        <ul class="hidden" role="menu" aria-hidden="true">
                            <li class="k-item k-menu-item k-state-default k-first" role="menuitem"><a href="/tv"
                                    class="k-link k-menu-link">Popular</a></li>
                            <li class="k-item k-menu-item k-state-default" role="menuitem"><a href="/tv/airing-today"
                                    class="k-link k-menu-link">Airing Today</a></li>
                            <li class="k-item k-menu-item k-state-default" role="menuitem"><a href="/tv/on-the-air"
                                    class="k-link k-menu-link">On TV</a></li>
                            <li class="k-item k-menu-item k-state-default k-last" role="menuitem"><a
                                    href="/tv/top-rated" class="k-link k-menu-link">Top Rated</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true" class="mr-5" role="menuitem">
                        <a class="no_click k-link k-menu-link" href="/person">People<span
                                class="k-menu-expand-arrow k-icon k-i-arrow-60-down"></span></a>

                        <ul class="hidden" role="menu" aria-hidden="true">
                            <li class="k-item k-menu-item k-state-default k-first k-last" role="menuitem"><a
                                    href="/person" class="k-link k-menu-link">Popular People</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true" class="mr-5" role="menuitem" style="z-index: auto;">
                        <a class="no_click k-link k-menu-link" href="#">More<span
                                class="k-menu-expand-arrow k-icon k-i-arrow-60-down"></span></a>


                        <div class="hidden"
                            style="width: 175.375px; height: 138px; overflow: hidden; display: none; position: absolute; z-index: 10002; top: 40px; left: 0px;"
                            aria-hidden="true">
                            <ul class="k-group k-menu-group k-popup k-reset" role="menu"
                                style="max-height: 741px; overflow: auto; position: absolute; font-size: 16px; font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-stretch: 100%; font-style: normal; font-weight: 400; line-height: 24px; display: none; transform: translateY(-138px);"
                                data-role="popup" aria-hidden="true">
                                <li class="k-item k-menu-item k-state-default k-first" role="menuitem"><a
                                        href="/discuss" class="k-link k-menu-link">Discussions</a></li>
                                <li class="k-item k-menu-item k-state-default" role="menuitem"><a href="/leaderboard"
                                        class="k-link k-menu-link">Leaderboard</a>
                                </li>
                                <li class="k-item k-menu-item k-state-default" role="menuitem"><a href="/talk"
                                        class="k-link k-menu-link">Support</a></li>
                                <li class="k-item k-menu-item k-state-default k-last" role="menuitem"><a
                                        href="/documentation/api" class="k-link k-menu-link">API</a></li>
                            </ul>
                        </div>
                    </li>
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
                                tabindex="1" autocorrect="off" autofill="off" autocomplete="off"
                                spellcheck="false" placeholder="Search for a movie, tv show, person..."
                                value="" data-role="autocomplete" class="k-input" role="textbox"
                                aria-haspopup="true" aria-disabled="false" aria-readonly="false"
                                aria-owns="search_v4_listbox" aria-autocomplete="list"><span unselectable="on"
                                class="k-clear-value k-hidden" title="clear" role="button" tabindex="-1"><span
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
