<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta Tags --}}
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />
        @if(str_contains(Route::current()->uri, 'bobwatts') == 'bobwatts')
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="msapplication-config" content="{{ asset('favicons/bobwatts/browserconfig.xml') }}">
            <meta name="theme-color" content="#ffffff">
        @else
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="msapplication-config" content="{{ asset('favicons/browserconfig.xml') }}">
            <meta name="theme-color" content="#feac10">
        @endif

        {{-- Favicons --}}
        @if(str_contains(Route::current()->uri, 'bobwatts') == 'bobwatts')
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/bobwatts/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/bobwatts/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/bobwatts/favicon-16x16.png') }}">
            <link rel="manifest" href="{{ asset('favicons/bobwatts/site.json') }}">
            <link rel="mask-icon" href="{{ asset('favicons/bobwatts/safari-pinned-tab.svg') }}" color="#1f2937">
            <link rel="shortcut icon" href="{{ asset('favicons/bobwatts/favicon.ico') }}">

            @production
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-7KFLKPB9HC"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'G-7KFLKPB9HC');
                </script>
            @endproduction
        @else
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
            <link rel="manifest" href="{{ asset('favicons/site.json') }}">
            <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#1f2937">
            <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

            @production
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-8WQ9K14MBC"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'G-8WQ9K14MBC');
                </script>
            @endproduction
        @endif

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        {{-- Scripts --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/566002e451.js" crossorigin="anonymous"></script>
        @inertiaHead
    </head>
    <body class="bg-gray-900 antialiased">
        @inertia
    </body>
</html>
