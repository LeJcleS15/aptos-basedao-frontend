<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ vite_asset("resources/assets/sass/app.scss") }}">

    <title>@yield('title', 'BaseDAO')</title>
    {{--SEO meta--}}
    <meta name="description" content="@yield('description')" />
    <meta property="og:site_name" content="BaseDAO" />
    <meta property="og:locale" content="en_US" />

    @yield('meta')

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</head>

<body id="body" class="flex min-h-screen flex-col">

@include('partials.nav')

<div id="app" class="app flex flex-col flex-grow min-h-screen mt-14 bg-amber-50 z-10">

    @yield('content')

</div>

@yield('extras')

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ vite_asset("resources/assets/js/app.tsx") }}" defer></script>

<script>
    // Listen for the 'walletConnected' event
    window.addEventListener('walletConnected', (event) => {
        const { connected } = event.detail;
        location.href="/connected"
    });

    // listen for the 'walletDisconnected' event
    window.addEventListener('walletDisconnected', (event) => {
        $('.nav_create_dao_button').addClass('invisible').removeClass('visible');
    });

    document.addEventListener('DOMContentLoaded', function () {
        let connected = localStorage.getItem("connected");

        if (connected === "true") {
            // show nav button
            $('.nav_create_dao_button').addClass('visible').removeClass('invisible');
        } else {
            // hide nav button
            $('.nav_create_dao_button').addClass('invisible').removeClass('visible');
        }
    });

</script>

@yield('scripts')

</body>

@if(config('app.env') !== 'production')
    {{-- Development tag at bottom right of browser --}}
    <div style="background: #F88379;
                                    color: #fff;
                                    font-weight: 600;
                                    position: fixed;
                                    display: block;
                                    z-index: 9999;
                                    padding: 8px 10px;
                                    border-radius: 8px;
                                    right: 10px;
                                    bottom: 10px">DEV</div>
@endif

</html>
