<!DOCTYPE html>
<html
    class="scroll-smooth"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>
            {{ isset($title)
                 ? $title . ' | ' . config('app.name', 'Laravel')
                 : config('app.name', 'Laravel')
            }}
        </title>

        <link
            rel="preconnect"
            href="https://fonts.bunny.net"
        >
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="relative font-sans antialiased text-gray-700 bg-gray-100 dark:bg-gray-900 dark:text-gray-400">
        <x-navigation.responsive-navbar>
            {{ $slot }}
        </x-navigation.responsive-navbar>
    </body>
</html>
