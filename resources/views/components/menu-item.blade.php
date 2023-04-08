@props(['menu', 'submenu'])

<li class="mr-[14px] group" role="menuitem">
    <a class="no_click p-[8px]" href="{{ $menu['link'] }}">{{ $menu['name'] }}</a>

    <ul class="absolute bg-white group-hover:block hidden py-3 mt-1 rounded text-[#16181b] font-normal border-[1px] border-[rgba(0,0,0,0.15)] z-[10002]"
        role="menu">
        @foreach ($submenu as $item)
            <li role="menuitem" class="pl-[24px] pr-[64px] py-1 hover:bg-[#f8f9fa]"><a
                    href="{{ $item['link'] }}">{{ $item['name'] }}</a>
            </li>
        @endforeach
    </ul>
</li>
