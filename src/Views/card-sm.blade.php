<div class="xl:w-1/3 md:w-1/2 sm:w-full mt-4 px-4">
    <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden xl:mt-6">
        <div class="sm:flex sm:items-center px-6 py-4">
            @isset($image)
                <img class="block h-16 sm:h-24 mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 {{ config('tailwind.card-sm.img-classes') }}" src="{{ $image }}" alt="">
            @endisset
            <div class="text-center sm:text-left sm:flex-grow">
                <div class="mb-4">
                    @isset($title)
                        <p class="text-xl leading-tight">{{ $title }}</p>
                    @endisset
                    <p class="text-sm leading-tight text-grey-dark">
                        {{ $slot }}
                    </p>
                </div>
                @isset($buttons)
                    <div>
                    @foreach ($buttons as $title => $link)
                        <a class="text-xs font-semibold rounded-full px-4 py-1 leading-normal {{ config('tailwind.card-sm.buttons-classes') }}" href="{{ $link }}">{{ $title }}</a>
                    @endforeach
                    </div>
                @endisset
            </div>
        </div>
    </div>
</div>
