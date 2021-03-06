<div class="xl:w-1/3 md:w-1/2 sm:w-full mt-4 px-4">
    <div class="bg-white max-w-sm rounded overflow-hidden shadow-lg">
        @isset($image)
            <img class="w-full" src="{{ $image }}">
        @endisset
        <div class="px-6 py-4">
            @isset($title)
            <div class="font-bold text-xl mb-2">{{ $title }}</div>
            @endisset
            <p class="text-grey-darker text-base">
                {{ $slot }}
            </p>
        </div>
        @isset($hashtags)
        <div class="px-6 py-4">
            @foreach ($hashtags as $hashtag)
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2 mt-1">{{ $hashtag }}</span>
            @endforeach
        </div>
        @endisset
    </div>
</div>
