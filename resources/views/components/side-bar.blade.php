<div class="w-1/5 mr-2">

    <x-filter-panel>
        <x-slot name="name">Sort</x-slot>
        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3 class="inline-flex items-center w-full text-[1em] font-[300] mb-[10px]">Sort Results By</h3>
            <span title="" class="    " unselectable="on" role="listbox" aria-haspopup="listbox" aria-expanded="false"
                tabindex="0" aria-owns="sort_by_listbox" aria-live="polite" aria-disabled="false"
                aria-readonly="false" aria-busy="false" style=""
                aria-activedescendant="o481c48d-7711-4fd4-987b-c69bdd314b0d"><span unselectable="on"
                    class="-wrap k-state-default"><span id="o481c48d-7711-4fd4-987b-c69bdd314b0d" unselectable="on"
                        role="option" aria-selected="true" class="k-input">Popularity
                        Descending</span><span unselectable="on" class="k-select" aria-label="select"><span
                            class="k-icon k-i-arrow-60-down"></span></span></span><select id="sort_by" name="sort_by"
                    class="  " data-role="dropdownlist" style="display: none;">
                    <option value="popularity.desc" selected="selected">Popularity
                        Descending</option>
                    <option value="popularity.asc">Popularity Ascending</option>
                    <option value="vote_average.desc">Rating Descending</option>
                    <option value="vote_average.asc">Rating Ascending</option>
                    <option value="primary_release_date.desc">Release Date
                        Descending</option>
                    <option value="primary_release_date.asc">Release Date Ascending
                    </option>
                    <option value="title.asc">Title (A-Z)</option>
                    <option value="title.desc">Title (Z-A)</option>
                </select></span>
        </div>
    </x-filter-panel>

    <x-filter-panel>
        <x-slot name="name">Filters</x-slot>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Show Me<span class="tooltip glyphicons_v2 circle-question" data-tooltip-id="#show_me_tooltip"
                    data-role="tooltip"></span>
            </h3>

            <label class="k-form-field">
                <input id="show_me_everything" class="k-radio" type="radio" name="show_me" value="0"
                    checked="checked">
                <label for="show_me_everything" class="k-radio-label">Everything</label>
            </label>

            <label class="k-form-field">
                <input id="show_me_not_seen" class="k-radio" type="radio" value="1" name="show_me"
                    disabled="">
                <label for="show_me_not_seen" class="k-radio-label">Movies I
                    Haven't Seen</label>
            </label>

            <label class="k-form-field">
                <input id="show_me_seen" class="k-radio" type="radio" value="2" name="show_me" disabled="">
                <label for="show_me_seen" class="k-radio-label">Movies I Have
                    Seen</label>
            </label>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Availabilities</h3>

            <label class="k-form-field">
                <input id="all_availabilities" class="k-checkbox" type="checkbox" name="all_availabilities"
                    value="true" checked="">
                <label for="all_availabilities" class="k-checkbox-label">Search
                    all availabilities?</label>
            </label>

            <div id="availabilities_wrapper" class="labels hide">
                <label class="k-form-field">
                    <input id="ott_monetization_type_flatrate" class="k-checkbox" type="checkbox"
                        name="ott_monetization_type" value="flatrate" checked="">
                    <label for="ott_monetization_type_flatrate" class="k-checkbox-label">Stream</label>
                </label>
                <label class="k-form-field">
                    <input id="ott_monetization_type_free" class="k-checkbox" type="checkbox"
                        name="ott_monetization_type" value="free" checked="">
                    <label for="ott_monetization_type_free" class="k-checkbox-label">Free</label>
                </label>
                <label class="k-form-field">
                    <input id="ott_monetization_type_ads" class="k-checkbox" type="checkbox"
                        name="ott_monetization_type" value="ads" checked="">
                    <label for="ott_monetization_type_ads" class="k-checkbox-label">Ads</label>
                </label>
                <label class="k-form-field">
                    <input id="ott_monetization_type_rent" class="k-checkbox" type="checkbox"
                        name="ott_monetization_type" value="rent" checked="">
                    <label for="ott_monetization_type_rent" class="k-checkbox-label">Rent</label>
                </label>
                <label class="k-form-field">
                    <input id="ott_monetization_type_buy" class="k-checkbox" type="checkbox"
                        name="ott_monetization_type" value="buy" checked="">
                    <label for="ott_monetization_type_buy" class="k-checkbox-label">Buy</label>
                </label>
            </div>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Release Dates</h3>

            <label class="k-form-field">
                <input id="all_releases" class="k-checkbox" type="checkbox" name="all_releases" value="true"
                    checked="">
                <label for="all_releases" class="k-checkbox-label">Search all
                    releases?</label>
            </label>

            <div id="release_type_wrapper" class="labels hide">
                <label class="k-form-field" style="padding-bottom: 20px;">
                    <input id="all_release_countries" class="k-checkbox" type="checkbox"
                        name="all_release_countries" value="true" checked="">
                    <label for="all_release_countries" class="k-checkbox-label">Search
                        all countries?</label>
                </label>
                <div id="search_all_countries" class="hide">
                    <span title="" class="   " unselectable="on" role="listbox" aria-haspopup="listbox"
                        aria-expanded="false" tabindex="0" aria-owns="release_region_listbox" aria-live="polite"
                        aria-disabled="false" aria-readonly="false" aria-busy="false"
                        aria-activedescendant="x3e0ed1e-9584-4385-a623-45b875adb738"
                        style="width: 100%; margin-bottom: 10px;"><span unselectable="on"
                            class="-wrap k-state-default"><span id="x3e0ed1e-9584-4385-a623-45b875adb738"
                                unselectable="on" role="option" aria-selected="true" class="k-input"><span
                                    class="dropdown_flag"
                                    style="background-image: url('/assets/2/flags_v2/48/IN-5b73f4605171eaa60539e5d69a85bebe7b800f5ee6f94f24dafecaa0d47209fd.png')"></span><span>India</span></span><span
                                unselectable="on" class="k-select" aria-label="select"><span
                                    class="k-icon k-i-arrow-60-down"></span></span></span><input name="release_region"
                            id="release_region" class=" "
                            style="width: 100%; margin-bottom: 10px; display: none;" value="IN"
                            data-role="dropdownlist"></span>
                </div>

                <label class="k-form-field">
                    <input id="release_type_1" class="k-checkbox" type="checkbox" name="release_type"
                        value="1" checked="">
                    <label for="release_type_1" class="k-checkbox-label">Premiere</label>
                </label>
                <label class="k-form-field">
                    <input id="release_type_2" class="k-checkbox" type="checkbox" name="release_type"
                        value="2" checked="">
                    <label for="release_type_2" class="k-checkbox-label">Theatrical
                        (limited)</label>
                </label>
                <label class="k-form-field">
                    <input id="release_type_3" class="k-checkbox" type="checkbox" name="release_type"
                        value="3" checked="">
                    <label for="release_type_3" class="k-checkbox-label">Theatrical</label>
                </label>
                <label class="k-form-field">
                    <input id="release_type_4" class="k-checkbox" type="checkbox" name="release_type"
                        value="4" checked="">
                    <label for="release_type_4" class="k-checkbox-label">Digital</label>
                </label>
                <label class="k-form-field">
                    <input id="release_type_5" class="k-checkbox" type="checkbox" name="release_type"
                        value="5" checked="">
                    <label for="release_type_5" class="k-checkbox-label">Physical</label>
                </label>
                <label class="k-form-field">
                    <input id="release_type_6" class="k-checkbox" type="checkbox" name="release_type"
                        value="6" checked="">
                    <label for="release_type_6" class="k-checkbox-label">TV</label>
                </label>
            </div>

            <div class="year_column">
                <span class="col_1 ">from</span>
                <span style="width: 100%;" class=" k-datepicker "><span class="k-picker-wrap k-state-default"><input
                            id="release_date_gte" class=" k-input" value="" style="width: 100%"
                            data-role="datepicker" type="text" role="combobox" aria-expanded="false"
                            aria-owns="release_date_gte_dateview" autocomplete="off" aria-disabled="false"><span
                            unselectable="on" class="k-select" aria-label="select" role="button"
                            aria-controls="release_date_gte_dateview"><span
                                class="k-icon k-i-calendar"></span></span></span></span>
            </div>

            <div class="year_column">
                <span class="col_1 ">to</span>
                <span class=" k-datepicker " style="width: 100%;"><span class="k-picker-wrap k-state-default"><input
                            id="release_date_lte" class=" k-input" value="2023-09-22" style="width: 100%"
                            data-role="datepicker" type="text" role="combobox" aria-expanded="false"
                            aria-owns="release_date_lte_dateview" autocomplete="off" aria-disabled="false"><span
                            unselectable="on" class="k-select" aria-label="select" role="button"
                            aria-controls="release_date_lte_dateview"><span
                                class="k-icon k-i-calendar"></span></span></span></span>
            </div>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Genres</h3>
            <ul id="with_genres" class="multi_select text" name="with_genres[]">
                <li data-value="28"><a class="no_click" href="/discover/movie?with_genres=28">Action</a></li>
                <li data-value="12"><a class="no_click" href="/discover/movie?with_genres=12">Adventure</a></li>
                <li data-value="16"><a class="no_click" href="/discover/movie?with_genres=16">Animation</a></li>
                <li data-value="35"><a class="no_click" href="/discover/movie?with_genres=35">Comedy</a></li>
                <li data-value="80"><a class="no_click" href="/discover/movie?with_genres=80">Crime</a></li>
                <li data-value="99"><a class="no_click" href="/discover/movie?with_genres=99">Documentary</a></li>
                <li data-value="18"><a class="no_click" href="/discover/movie?with_genres=18">Drama</a></li>
                <li data-value="10751"><a class="no_click" href="/discover/movie?with_genres=10751">Family</a></li>
                <li data-value="14"><a class="no_click" href="/discover/movie?with_genres=14">Fantasy</a></li>
                <li data-value="36"><a class="no_click" href="/discover/movie?with_genres=36">History</a></li>
                <li data-value="27"><a class="no_click" href="/discover/movie?with_genres=27">Horror</a></li>
                <li data-value="10402"><a class="no_click" href="/discover/movie?with_genres=10402">Music</a></li>
                <li data-value="9648"><a class="no_click" href="/discover/movie?with_genres=9648">Mystery</a></li>
                <li data-value="10749"><a class="no_click" href="/discover/movie?with_genres=10749">Romance</a></li>
                <li data-value="878"><a class="no_click" href="/discover/movie?with_genres=878">Science Fiction</a>
                </li>
                <li data-value="10770"><a class="no_click" href="/discover/movie?with_genres=10770">TV Movie</a></li>
                <li data-value="53"><a class="no_click" href="/discover/movie?with_genres=53">Thriller</a></li>
                <li data-value="10752"><a class="no_click" href="/discover/movie?with_genres=10752">War</a></li>
                <li data-value="37"><a class="no_click" href="/discover/movie?with_genres=37">Western</a></li>
            </ul>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Certification</h3>
            <ul id="certification" class="multi_select text" name="certification[]">
                <li data-value="U"><a class="no_click" href="/discover/movie?certification=U">U</a></li>
                <li data-value="UA"><a class="no_click" href="/discover/movie?certification=UA">UA</a></li>
                <li data-value="A"><a class="no_click" href="/discover/movie?certification=A">A</a></li>
            </ul>
        </div>


        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Language <span class="tooltip glyphicons_v2 circle-question" data-tooltip-id="#language_tooltip"
                    data-role="tooltip"></span>
            </h3>
            <span title="" class="   " unselectable="on" role="listbox" aria-haspopup="listbox"
                aria-expanded="false" tabindex="0" aria-owns="language_listbox" aria-live="polite"
                aria-disabled="false" aria-readonly="false" aria-busy="false" style=""
                aria-activedescendant="tecf4d13-c2d1-4973-82d0-fc25b8ebb9f2"><span unselectable="on"
                    class="-wrap k-state-default"><span id="tecf4d13-c2d1-4973-82d0-fc25b8ebb9f2" unselectable="on"
                        role="option" aria-selected="true" class="k-input">

                        None Selected

                    </span><span unselectable="on" class="k-select" aria-label="select"><span
                            class="k-icon k-i-arrow-60-down"></span></span></span><select id="language"
                    name="language" class=" " data-role="dropdownlist" style="display: none;">
                    <option value="" selected="selected">None Selected
                    </option>
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="es">Spanish; Castilian</option>
                    <option value="ja">Japanese</option>
                    <option value="pt">Portuguese</option>
                    <option value="zh">Chinese</option>
                    <option value="it">Italian</option>
                    <option value="ru">Russian</option>
                    <option value="ko">Korean</option>
                    <option value="cs">Czech</option>
                    <option value="nl">Dutch; Flemish</option>
                    <option value="sv">Swedish</option>
                    <option value="hi">Hindi</option>
                    <option value="ar">Arabic</option>
                    <option value="tr">Turkish</option>
                    <option value="tl">Tagalog</option>
                    <option value="pl">Polish</option>
                    <option value="cn">Cantonese</option>
                    <option value="da">Danish</option>
                    <option value="ta">Tamil</option>
                    <option value="el">Greek</option>
                    <option value="xx">No Language</option>
                    <option value="ml">Malayalam</option>
                    <option value="id">Indonesian</option>
                    <option value="fa">Persian</option>
                    <option value="hu">Hungarian</option>
                    <option value="fi">Finnish</option>
                    <option value="bn">Bengali</option>
                    <option value="no">Norwegian</option>
                    <option value="te">Telugu</option>
                    <option value="th">Thai</option>
                    <option value="he">Hebrew</option>
                    <option value="uk">Ukrainian</option>
                    <option value="sk">Slovak</option>
                    <option value="sh">Serbo-Croatian</option>
                    <option value="ro">Romanian</option>
                    <option value="is">Icelandic</option>
                    <option value="lv">Latvian</option>
                    <option value="ms">Malay</option>
                    <option value="sr">Serbian</option>
                    <option value="kn">Kannada</option>
                    <option value="or">Oriya</option>
                    <option value="vi">Vietnamese</option>
                    <option value="et">Estonian</option>
                    <option value="hr">Croatian</option>
                    <option value="sl">Slovenian</option>
                    <option value="bg">Bulgarian</option>
                    <option value="ca">Catalan; Valencian</option>
                    <option value="mr">Marathi</option>
                    <option value="pa">Panjabi; Punjabi</option>
                    <option value="lt">Lithuanian</option>
                    <option value="ka">Georgian</option>
                    <option value="mk">Macedonian</option>
                    <option value="ur">Urdu</option>
                    <option value="sq">Albanian</option>
                    <option value="az">Azerbaijani</option>
                    <option value="bs">Bosnian</option>
                    <option value="af">Afrikaans</option>
                    <option value="hy">Armenian</option>
                    <option value="eu">Basque</option>
                    <option value="ku">Kurdish</option>
                    <option value="ne">Nepali</option>
                    <option value="si">Sinhala; Sinhalese</option>
                    <option value="gl">Galician</option>
                    <option value="nb">Bokmål, Norwegian; Norwegian Bokmål
                    </option>
                    <option value="km">Central Khmer</option>
                    <option value="my">Burmese</option>
                    <option value="mn">Mongolian</option>
                    <option value="gu">Gujarati</option>
                    <option value="am">Amharic</option>
                    <option value="kk">Kazakh</option>
                    <option value="as">Assamese</option>
                    <option value="jv">Javanese</option>
                    <option value="uz">Uzbek</option>
                    <option value="be">Belarusian</option>
                    <option value="sw">Swahili</option>
                    <option value="bo">Tibetan</option>
                    <option value="yi">Yiddish</option>
                    <option value="zu">Zulu</option>
                    <option value="ky">Kirghiz; Kyrgyz</option>
                    <option value="ga">Irish</option>
                    <option value="cy">Welsh</option>
                    <option value="se">Northern Sami</option>
                    <option value="wo">Wolof</option>
                    <option value="ps">Pushto; Pashto</option>
                    <option value="lb">Luxembourgish; Letzeburgesch</option>
                    <option value="tk">Turkmen</option>
                    <option value="iu">Inuktitut</option>
                    <option value="ab">Abkhazian</option>
                    <option value="tg">Tajik</option>
                    <option value="la">Latin</option>
                    <option value="lo">Lao</option>
                    <option value="ht">Haitian; Haitian Creole</option>
                    <option value="qu">Quechua</option>
                    <option value="mg">Malagasy</option>
                    <option value="mt">Maltese</option>
                    <option value="gd">Gaelic; Scottish Gaelic</option>
                    <option value="fo">Faroese</option>
                    <option value="dz">Dzongkha</option>
                    <option value="bm">Bambara</option>
                    <option value="gn">Guarani</option>
                    <option value="mi">Maori</option>
                    <option value="eo">Esperanto</option>
                    <option value="dv">Divehi; Dhivehi; Maldivian</option>
                    <option value="so">Somali</option>
                    <option value="nn">Norwegian Nynorsk; Nynorsk, Norwegian
                    </option>
                    <option value="kl">Kalaallisut; Greenlandic</option>
                    <option value="yo">Yoruba</option>
                    <option value="rw">Kinyarwanda</option>
                    <option value="mo">Moldavian; Moldovan</option>
                    <option value="ha">Hausa</option>
                    <option value="ak">Akan</option>
                    <option value="sa">Sanskrit</option>
                    <option value="ks">Kashmiri</option>
                    <option value="cr">Cree</option>
                    <option value="xh">Xhosa</option>
                    <option value="ln">Lingala</option>
                    <option value="ug">Uighur; Uyghur</option>
                    <option value="st">Sotho, Southern</option>
                    <option value="tt">Tatar</option>
                    <option value="sm">Samoan</option>
                    <option value="ba">Bashkir</option>
                    <option value="ig">Igbo</option>
                    <option value="ce">Chechen</option>
                    <option value="ti">Tigrinya</option>
                    <option value="ff">Fulah</option>
                    <option value="mh">Marshallese</option>
                    <option value="ay">Aymara</option>
                    <option value="sn">Shona</option>
                    <option value="lg">Ganda</option>
                    <option value="ty">Tahitian</option>
                    <option value="fy">Western Frisian</option>
                    <option value="ny">Chichewa; Chewa; Nyanja</option>
                    <option value="bi">Bislama</option>
                    <option value="rm">Romansh</option>
                    <option value="sg">Sango</option>
                    <option value="kw">Cornish</option>
                    <option value="su">Sundanese</option>
                    <option value="oc">Occitan (post 1500)</option>
                    <option value="to">Tonga (Tonga Islands)</option>
                    <option value="ie">Interlingue; Occidental</option>
                    <option value="tw">Twi</option>
                    <option value="sd">Sindhi</option>
                    <option value="co">Corsican</option>
                    <option value="nv">Navajo; Navaho</option>
                    <option value="sc">Sardinian</option>
                    <option value="oj">Ojibwa</option>
                    <option value="ss">Swati</option>
                    <option value="kg">Kongo</option>
                    <option value="li">Limburgan; Limburger; Limburgish
                    </option>
                    <option value="tn">Tswana</option>
                    <option value="ia">Interlingua (International Auxiliary
                        Language Association)</option>
                    <option value="om">Oromo</option>
                    <option value="fj">Fijian</option>
                    <option value="ts">Tsonga</option>
                    <option value="av">Avaric</option>
                    <option value="pi">Pali</option>
                    <option value="ik">Inupiaq</option>
                    <option value="gv">Manx</option>
                    <option value="ki">Kikuyu; Gikuyu</option>
                    <option value="nd">Ndebele, North; North Ndebele</option>
                    <option value="za">Zhuang; Chuang</option>
                    <option value="an">Aragonese</option>
                    <option value="ch">Chamorro</option>
                    <option value="rn">Rundi</option>
                    <option value="os">Ossetian; Ossetic</option>
                    <option value="aa">Afar</option>
                    <option value="cv">Chuvash</option>
                    <option value="ii">Sichuan Yi; Nuosu</option>
                </select></span>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>User Score</h3>
            <div id="user_score_range" class=" range">
                <input id="vote_average_gte" name="vote_average.gte" value="0">
                <input id="vote_average_lte" name="vote_average.lte" value="10">
            </div>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Minimum User Votes</h3>
            <div id="user_vote_range" class=" range">
                <input value="0">
                <input value="250">
            </div>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Runtime</h3>
            <div id="runtime_range" class=" range">
                <input id="with_runtime_gte" name="with_runtime.gte" value="0">
                <input id="with_runtime_lte" name="with_runtime.lte" value="400">
            </div>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Keywords</h3>
            <div class=" k-multiselect   k-multiselect-clearable" unselectable="on" title="" style="">
                <div class="k-multiselect-wrap k-floatwrap" unselectable="on" role="listbox">
                    <ul unselectable="on" class="k-reset" id="with_keywords_taglist">
                    </ul><input class="k-input k-readonly" style="width: 169.062px;" accesskey=""
                        autocomplete="off" role="textbox" title="" aria-expanded="false"
                        aria-haspopup="listbox" aria-autocomplete="list" tabindex="0"
                        aria-describedby="with_keywords_taglist" aria-disabled="false" aria-readonly="false"><span
                        unselectable="on" class="k-clear-value k-hidden" title="clear" role="button"
                        tabindex="-1"><span class="k-icon k-i-x"></span></span><span
                        class="k-icon k-i-loading k-hidden"></span><span
                        style="font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 14.4px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 21.6px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;">Filter
                        by keywords...</span>
                </div><select id="with_keywords" name="with_keywords[]" multiple="multiple" class=" "
                    data-role="multiselect" aria-disabled="false" aria-readonly="false" style="display: none;">
                </select>
            </div>
        </div>
    </x-filter-panel>

    <x-filter-panel>
        <x-slot name="name">Where To Watch</x-slot>
        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>My Services <span class="tooltip glyphicons_v2 circle-question" data-tooltip-id="#ott_tooltip"
                    data-role="tooltip"></span>
            </h3>
            <label class="k-form-field">
                <input id="my_services" class="k-checkbox" type="checkbox" name="my_services" value="true"
                    disabled="">
                <label for="my_services" class="k-checkbox-label">Restrict
                    searches to my subscribed services?</label>
            </label>
        </div>

        <div class="filter w-full border-t-[1px] border-[#eee] border-solid p-[14px_16px_16px_16px]">
            <h3>Country</h3>
            <span title="" class="   " unselectable="on" role="listbox" aria-haspopup="listbox"
                aria-expanded="false" tabindex="0" aria-owns="ott_region_listbox" aria-live="polite"
                aria-disabled="false" aria-readonly="false" aria-busy="false"
                aria-activedescendant="u51022ff-74cc-4746-9ba5-5d5d3f4423ff" style="width: 100%;"><span
                    unselectable="on" class="-wrap k-state-default"><span id="u51022ff-74cc-4746-9ba5-5d5d3f4423ff"
                        unselectable="on" role="option" aria-selected="true" class="k-input"><span
                            class="dropdown_flag"
                            style="background-image: url('/assets/2/flags_v2/48/IN-5b73f4605171eaa60539e5d69a85bebe7b800f5ee6f94f24dafecaa0d47209fd.png')"></span><span>India</span></span><span
                        unselectable="on" class="k-select" aria-label="select"><span
                            class="k-icon k-i-arrow-60-down"></span></span></span>
                <div id="ott_region" class=" " style="width: 100%; display: none;" data-role="dropdownlist">
                </div>
            </span>

            <span id="ott_provider_wrapper">
                <ul id="ott_providers" class="ott_providers multi_select image" style="margin-bottom: 0;">
                    <li data-value="8" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Netflix">
                            <img src="{{ asset('images/ott/t2yyOv40HZeVlLjYsCsPHnWLk4W.jpg') }}" width="50"
                                height="50" alt="Netflix">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="119" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Amazon Prime Video">
                            <img src="{{ asset('images/ott/emthp39XA2YScoYL1p0sdbAH2WA.jpg') }}" width="50"
                                height="50" alt="Amazon Prime Video">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="122" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Hotstar">
                            <img src="{{ asset('images/ott/7Fl8ylPDclt3ZYgNbW2t7rbZE9I.jpg') }}" width="50"
                                height="50" alt="Hotstar">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="121" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Voot">
                            <img src="{{ asset('images/ott/2u1uElmpm4lProS7C9RYcaYLYt1.jpg') }}" width="50"
                                height="50" alt="Voot">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="220" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Jio Cinema">
                            <img src="{{ asset('images/ott/jRpQbuHbGR0MzSIBxJjxZxpXhqC.jpg') }}" width="50"
                                height="50" alt="Jio Cinema">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="232" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Zee5">
                            <img src="{{ asset('images/ott/ajbCmwvZ8HiePHZaOVEgm9MzyuA.jpg') }}" width="50"
                                height="50" alt="Zee5">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="350" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Apple TV Plus">
                            <img src="{{ asset('images/ott/6uhKBfmtzFqOcLousHwZuzcrScK.jpg') }}" width="50"
                                height="50" alt="Apple TV Plus">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="2" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Apple TV">
                            <img src="{{ asset('images/ott/peURlLlr8jggOwK53fJ5wdQl05y.jpg') }}" width="50"
                                height="50" alt="Apple TV">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="218" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Eros Now">
                            <img src="{{ asset('images/ott/4XYI2rzRm34skcvamytegQx7Dmu.jpg') }}" width="50"
                                height="50" alt="Eros Now">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="3" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Google Play Movies">
                            <img src="{{ asset('images/ott/tbEdFQDwx5LEVr8WpSeXQSIirVq.jpg') }}" width="50"
                                height="50" alt="Google Play Movies">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="11" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="MUBI">
                            <img src="{{ asset('images/ott/bVR4Z1LCHY7gidXAJF5pMa4QrDS.jpg') }}" width="50"
                                height="50" alt="MUBI">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="237" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Sony Liv">
                            <img src="{{ asset('images/ott/odTur9CmVtzsRUAZ9910tPM4XwL.jpg') }}" width="50"
                                height="50" alt="Sony Liv">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="192" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="YouTube">
                            <img src="{{ asset('images/ott/oIkQkEkwfmcG7IGpRR1NB8frZZM.jpg') }}" width="50"
                                height="50" alt="YouTube">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="100" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="GuideDoc">
                            <img src="{{ asset('images/ott/iX0pvJ2GFATbVIH5IHMwG0ffIdV.jpg') }}" width="50"
                                height="50" alt="GuideDoc">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="175" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Netflix Kids">
                            <img src="{{ asset('images/ott/j2OLGxyy0gKbPVI0DYFI2hJxP6y.jpg') }}" width="50"
                                height="50" alt="Netflix Kids">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="73" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Tubi TV">
                            <img src="{{ asset('images/ott/w2TDH9TRI7pltf5LjN3vXzs7QbN.jpg') }}" width="50"
                                height="50" alt="Tubi TV">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="255" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Yupp TV">
                            <img src="{{ asset('images/ott/8qNJcPBHZ4qewHrDJ7C7s2DBQ3V.jpg') }}" width="50"
                                height="50" alt="Yupp TV">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="309" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Sun Nxt">
                            <img src="{{ asset('images/ott/uW4dPCcbXaaFTyfL5HwhuDt5akK.jpg') }}" width="50"
                                height="50" alt="Sun Nxt">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="315" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Hoichoi">
                            <img src="{{ asset('images/ott/d4vHcXY9rwnr763wQns2XJThclt.jpg') }}" width="50"
                                height="50" alt="Hoichoi">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="319" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Alt Balaji">
                            <img src="{{ asset('images/ott/xiqTOBxOnlMy1nvppZcFhCDsP0f.jpg') }}" width="50"
                                height="50" alt="Alt Balaji">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="437" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Hungama Play">
                            <img src="{{ asset('images/ott/4QEQsvCBnORNIg9EDnrRSiEw61D.jpg') }}" width="50"
                                height="50" alt="Hungama Play">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="190" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Curiosity Stream">
                            <img src="{{ asset('images/ott/67Ee4E6qOkQGHeUTArdJ1qRxzR2.jpg') }}" width="50"
                                height="50" alt="Curiosity Stream">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="476" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="EPIC ON">
                            <img src="{{ asset('images/ott/q03pok7xSxYJaENuYs547qa6upY.jpg') }}" width="50"
                                height="50" alt="EPIC ON">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="474" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="ShemarooMe">
                            <img src="{{ asset('images/ott/vIhSFgmp0HXZbUHDscuhpU6S2Z6.jpg') }}" width="50"
                                height="50" alt="ShemarooMe">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="500" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="TVF Play">
                            <img src="{{ asset('images/ott/8ugSQ1g7E8fXFnKFT5G8XOMcmS0.jpg') }}" width="50"
                                height="50" alt="TVF Play">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="502" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Tata Play">
                            <img src="{{ asset('images/ott/qLR6qzB1IcANZUqMEkLf6Sh8Y8s.jpg') }}" width="50"
                                height="50" alt="Tata Play">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="510" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Discovery Plus">
                            <img src="{{ asset('images/ott/wYRiUqIgWcfUvO6OPcXuUNd4tc2.jpg') }}" width="50"
                                height="50" alt="Discovery Plus">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="482" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="ManoramaMax">
                            <img src="{{ asset('images/ott/iRv3wbUEPuwYYPSKwUxPaMPKGM4.jpg') }}" width="50"
                                height="50" alt="ManoramaMax">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="471" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="FILMRISE">
                            <img src="{{ asset('images/ott/mEiBVz62M9j3TCebmOspMfqkIn.jpg') }}" width="50"
                                height="50" alt="FILMRISE">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="515" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="MX Player">
                            <img src="{{ asset('images/ott/dH4BZucVyb5lW97TEbZ7RTAugjg.jpg') }}" width="50"
                                height="50" alt="MX Player">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="521" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Spamflix">
                            <img src="{{ asset('images/ott/xN97FFkFAdY1JvHhS4zyPD4URgD.jpg') }}" width="50"
                                height="50" alt="Spamflix">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="532" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="aha">
                            <img src="{{ asset('images/ott/m3NWxxR23l1w1e156fyTuw931gx.jpg') }}" width="50"
                                height="50" alt="aha">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="545" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Spuul">
                            <img src="{{ asset('images/ott/iJGVfWTDddgipZ7mJCCEYzmRYrP.jpg') }}" width="50"
                                height="50" alt="Spuul">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="538" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Plex">
                            <img src="{{ asset('images/ott/wDWvnupneMbY6RhBTHQC9zU0SCX.jpg') }}" width="50"
                                height="50" alt="Plex">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="546" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="WOW Presents Plus">
                            <img src="{{ asset('images/ott/mgD0T960hnYU4gBxbPPBrcDfgWg.jpg') }}" width="50"
                                height="50" alt="WOW Presents Plus">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="551" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Magellan TV">
                            <img src="{{ asset('images/ott/gekkP93StjYdiMAInViVmrnldNY.jpg') }}" width="50"
                                height="50" alt="Magellan TV">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="554" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="BroadwayHD">
                            <img src="{{ asset('images/ott/xLu1rkZNOKuNnRNr70wySosfTBf.jpg') }}" width="50"
                                height="50" alt="BroadwayHD">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="559" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Filmzie">
                            <img src="{{ asset('images/ott/olmH7t5tEng8Yuq33KmvpvaaVIg.jpg') }}" width="50"
                                height="50" alt="Filmzie">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="561" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Lionsgate Play">
                            <img src="{{ asset('images/ott/vrFpju3t7kplDbFsN5GLJpG0obj.jpg') }}" width="50"
                                height="50" alt="Lionsgate Play">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="562" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="MovieSaints">
                            <img src="{{ asset('images/ott/fdWE8jpmQqkZrwg2ZMuCLz6ms5P.jpg') }}" width="50"
                                height="50" alt="MovieSaints">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="444" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Dekkoo">
                            <img src="{{ asset('images/ott/u2H29LCxRzjZVUoZUQAHKm5P8Zc.jpg') }}" width="50"
                                height="50" alt="Dekkoo">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="567" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="True Story">
                            <img src="{{ asset('images/ott/osREemsc9uUB2J8VTkQeAVk2fu9.jpg') }}" width="50"
                                height="50" alt="True Story">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="569" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="DocAlliance Films">
                            <img src="{{ asset('images/ott/aQ1ritN00jXc7RAFfUoQKGAAfp7.jpg') }}" width="50"
                                height="50" alt="DocAlliance Films">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="614" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="VI movies and tv">
                            <img src="{{ asset('images/ott/h1PNHFp50cceDZ8jXUMnuVVMIw2.jpg') }}" width="50"
                                height="50" alt="VI movies and tv">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="677" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Eventive">
                            <img src="{{ asset('images/ott/fadQYOyKL0tqfyj012nYJxm3N2I.jpg') }}" width="50"
                                height="50" alt="Eventive">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="688" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="ShortsTV Amazon Channel">
                            <img src="{{ asset('images/ott/m0mvKlSjn38S9w7WVNV7a7XyPIe.jpg') }}" width="50"
                                height="50" alt="ShortsTV Amazon Channel">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="10" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Amazon Video">
                            <img src="{{ asset('images/ott/5NyLm42TmCqCMOZFvH4fcoSNKEW.jpg') }}" width="50"
                                height="50" alt="Amazon Video">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="692" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Cultpix">
                            <img src="{{ asset('images/ott/59azlQKUgFdYq6QI5QEAxIeecyL.jpg') }}" width="50"
                                height="50" alt="Cultpix">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="701" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="FilmBox+">
                            <img src="{{ asset('images/ott/4FqTBYsUSZgS9z9UGKgxSDBbtc8.jpg') }}" width="50"
                                height="50" alt="FilmBox+">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="528" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="AMC+ Amazon Channel">
                            <img src="{{ asset('images/ott/9edKQczyuMmQM1yS520hgmJbcaC.jpg') }}" width="50"
                                height="50" alt="AMC+ Amazon Channel">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="196" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="AcornTV Amazon Channel">
                            <img src="{{ asset('images/ott/8WWD7t5Irwq9kAH4rufQ4Pe1Dog.jpg') }}" width="50"
                                height="50" alt="AcornTV Amazon Channel">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="1771" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Takflix">
                            <img src="{{ asset('images/ott/cnIHBy3uLWhHRR7VeWQhK3ZsYP0.jpg') }}" width="50"
                                height="50" alt="Takflix">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="445" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="Classix">
                            <img src="{{ asset('images/ott/iaMw6nOyxUzXSacrLQ0Au6CfZkc.jpg') }}" width="50"
                                height="50" alt="Classix">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li data-value="1854" class="" data-role="tooltip">
                        <a class="no_click" href="#" title="AMC Plus Apple TV Channel ">
                            <img src="{{ asset('images/ott/yFgm7vxwKZ4jfXIlPizlgoba2yi.jpg') }}" width="50"
                                height="50" alt="AMC Plus Apple TV Channel ">
                            <div><span class="glyphicons_v2 check white"></span>
                            </div>
                        </a>
                    </li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                    <li class="hidden" data-role="tooltip"></li>
                </ul>
            </span>
        </div>
    </x-filter-panel>

    <div id=""
        class="apply background_color bg-gray-200 disabled light_blue mt-5 px-5 py-2 rounded-3xl small">
        <p class="font-semibold load_more text-center">
            <a class="no_click load_more" href="">Search</a>
        </p>
    </div>
</div>
