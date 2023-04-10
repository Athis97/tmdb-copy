<x-front-layout>
    <main id="main" class="smaller  subtle show_search_false">

        <section class="inner_content">
            <div id="media_v4" class="media discover">
                <div class="column_wrapper flex justify-center item-start">
                    <div class="content_wrapper px-[40px] py-[30px]">
                        <div class="title mb-4">
                            <h2 class="font-semibold text-[1.4em]">{{ $page_heading }}</h2>
                        </div>

                        <div class="content flex">
                            <x-side-bar />

                            <div class="w-4/5">
                                <div class="white_column no_pad pl-[30px]">
                                    <section id="media_results" class="panel results mt-[-30px]">
                                        <div class="media_items results">
                                            <x-list-page-wrapper :movies=$movies />
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- page_wrap opened in html_head -->
</x-front-layout>
