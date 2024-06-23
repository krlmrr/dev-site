@props([
    'title',
    'body',
])

<section
    class="flex justify-center scroll-mt-20 lg:scroll-mt-4"
    id="{{ $title }}"
>
    <div class="flex flex-col gap-2 mx-4 lg:mx-8 bg-gray-50 dark:bg-gray-800 max-w-7xl px-4 py-4 rounded-md drop-shadow w-full">
        @isset($title)
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
        @endisset
        @isset($body)
            <p class="prose dark:prose-invert">
                {!! $body !!}
            </p>
        @endisset
    </div>
</section>
