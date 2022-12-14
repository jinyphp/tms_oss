<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JinyERP</title>

        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('css/mosaic.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flatpickr.css') }}">
        {{--  <link rel="stylesheet" href="{{ asset('css/app.4387550e.css') }}"> --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        @stack('css')
        @livewireStyles
    </head>
    <body>

        {{$slot}}

        @livewireScripts
        @stack('scripts')
    </body>
</html>
