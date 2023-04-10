<x-front-layout>
    <main id="main" class="smaller  subtle show_search_false">
        <section class="inner_content">
            <div id="media_v4" class="media discover">
                <div class="column_wrapper flex justify-center item-start">
                    <div class="content_wrapper px-[40px] py-[30px]">
                        <div class="title mb-4">
                            <h2 class="font-semibold text-[1.4em]">{{ $page_heading }}</h2>
                        </div>

                        <div
                            class="results flex results_profile_card justify-between items-start content-start flex-wrap">
                            @foreach ($persons['results'] as $person)
                                <x-person-card :person="$person" />
                            @endforeach

                            <script>
                                let current_page = {{ $persons['page'] }};
                                let total_pages = {{ $persons['total_pages'] }};
                            </script>
                            <div class="pagination_wrapper w-full flex justify-center">
                                <div role="navigation" aria-label="Pagination"
                                    class="pagination mt-[30px] text-black flex flex-wrap justify-between items-center content-center max-w-[500px] w-auto">
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
