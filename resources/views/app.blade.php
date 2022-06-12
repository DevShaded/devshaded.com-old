<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta Tags --}}
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ asset('favicons/browserconfig.xml') }}">
        <meta name="theme-color" content="#1f2937">

        {{-- Favicons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicons/site.json') }}">
        <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#1f2937">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        {{-- Scripts --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="bg-gray-900 antialiased">
        @inertia
    </body>
</html>
