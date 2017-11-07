<a href="#responsive" class="mb-2 inline-flex items-center rounded-full border border-grey-light bg-grey-lightest text-xs font-semibold pl-1 pt-1 pb-1 pr-2 leading-none mr-2 no-underline text-black font-sans">
    @php
        $type = isset($type) ? $type : 'success';
    @endphp
    @if ($type == 'success')
    <span class="inline-flex rounded-full bg-green-light text-white mr-1">
        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
            <path d="M5.8 9.4c-.33-.442-.958-.53-1.4-.2-.442.33-.53.958-.2 1.4l3 4c.38.508 1.134.537 1.553.06l7-8c.363-.417.32-1.05-.094-1.413-.417-.363-1.05-.32-1.413.094L8.06 12.414 5.8 9.4z"></path>
        </svg>
    </span>
    @elseif ($type == 'error')
        <span class="inline-flex rounded-full bg-red-light text-white mr-1">
            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                <path d="M10 8.586L6.707 5.293c-.39-.39-1.024-.39-1.414 0-.39.39-.39 1.024 0 1.414L8.586 10l-3.293 3.293c-.39.39-.39 1.024 0 1.414.39.39 1.024.39 1.414 0L10 11.414l3.293 3.293c.39.39 1.024.39 1.414 0 .39-.39.39-1.024 0-1.414L11.414 10l3.293-3.293c.39-.39.39-1.024 0-1.414-.39-.39-1.024-.39-1.414 0L10 8.586z"></path>
            </svg>
        </span>
    @endif
    <span>{{ $slot }}</span>
</a>
