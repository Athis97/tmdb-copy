<div class="border card filter_panel rounded-lg mb-3.5 shadow-[0_2px_8px_#0000001a]">
    <div class="name px-[14px] py-[16px] flex justify-between item-center">
        <h2 class="inline-block font-bold">{{ $name }}</h2>
        <span
            class="glyphicons_v2 chevron-right inline-block w-[1em] h-auto bg-center bg-[url({{ asset('/images/right.svg') }})] bg-no-repeat"></span>
    </div>
    {{ $slot }}
</div>
