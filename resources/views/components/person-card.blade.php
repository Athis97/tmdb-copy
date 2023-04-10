<div class="fifty_square">
    <div
        class="item profile card mt-[30px] text-black w-[235px] bg-white flex flex-wrap items-center justify-start shadow-[0_2px_8px_#0000001a] border-[1px] border-[#e3e3e3]">
        <div class="image_content w-[235px] h-[235px] flex items-center">
            <a id="person_{{ $person['id'] }}" class="result w-full h-full block font-normal cursor-pointer"
                href="/person/{{ $person['id'] }}" title="{{ $person['name'] }}" alt="{{ $person['name'] }}">
                <img loading="lazy" class="profile w-[235px] h-[235px] block "
                    src="https://image.tmdb.org/t/p/w235_and_h235_face{{ $person['profile_path'] }}"
                    srcset="https://image.tmdb.org/t/p/w235_and_h235_face{{ $person['profile_path'] }} 1x, https://image.tmdb.org/t/p/w470_and_h470_face{{ $person['profile_path'] }} 2x"
                    alt="{{ $person['name'] }}">

            </a>
        </div>
        <div class="meta w-full px-[8px] py-[10px] overflow-hidden text-ellipsis whitespace-nowrap">
            <p class="name leading-[1.2em] ">
                <a href="/person/{{ $person['id'] }}" class="font-semibold text-[1.1em]">{{ $person['name'] }}</a>
            </p>
            <p class="sub text-[0.9em] font-normal text-[#00000099] overflow-hidden text-ellipsis whitespace-nowrap">Caligula, The Key, Paprika</p>
        </div>
    </div>
</div>
