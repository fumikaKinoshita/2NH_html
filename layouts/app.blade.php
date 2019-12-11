<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    @section('stylesheets')
        <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="{{ asset_ver('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @show
</head>
<body>
<div id="app">
    @include('components._header')
    @include('components._messages')
    <div class="content">
        @yield('content')
    </div>
    @include('components._footer')
</div>
@section('javascripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
<script type="text/javascript" src="{{ asset_ver('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset_ver('js/flatpickr.js') }}"></script>
@show
</body>
</html>
