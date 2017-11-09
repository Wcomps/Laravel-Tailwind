<nav class="flex items-center justify-between flex-wrap p-6 {{ config('tailwind.navbar.nav-classes') }}">
    <a href="{{ isset($homeLink) ? $homeLink : '#' }}" class="no-underline">
    <div class="flex items-center flex-no-shrink mr-6">
        @isset($image)
            <img src="{{ $image }}" class="h-8 w-8 mr-2">
        @endisset
        @isset($title)
            <span class="text-xl tracking-tight {{ config('tailwind.navbar.title-classes') }}">{{ $title }}</span>
        @endisset
    </div>
    </a>

    <div class="block lg:hidden">
        <button id="menu-button" class="flex items-center px-3 py-2 {{ config('tailwind.navbar.menu-button-classes') }}">
            <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    @isset($items)
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto" id="menu-items">
        <div class="text-sm lg:flex-grow">
        @foreach ($items as $name => $link)
            <a href="{{ $link }}" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lightest hover:text-white mr-4 no-underline {{ config('tailwind.navbar.items-classes') }}">
                {{ $name }}
            </a>
        @endforeach
        </div>
        @isset($rightItems)
        @foreach ($rightItems as $name => $link)
            <div class="ml-1">
                <a href="{{ $link }}" class="inline-block text-sm leading-none text-white border-white hover:border-transparent hover:bg-white mt-4 lg:mt-0 no-underline {{ config('tailwind.navbar.right-items-classes') }}">
                    {{ $name }}
                </a>
            </div>
        @endforeach
        @endisset
    </div>
    @endisset
</nav>


{{-- importing JQuery --}}
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

{{-- Code for hide and unhide menu on small devices --}}
<script>
    $(function () {
        $('#menu-items').addClass('hidden');
        $('#menu-button').click(function () {
            if ($('#menu-items').hasClass('hidden')) {
                $('#menu-items').removeClass('hidden');
            } else {
                $('#menu-items').addClass('hidden');
            }
        });
    });
    </script>
