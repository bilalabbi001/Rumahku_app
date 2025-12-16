<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/android-icon-48x48.png') }}">
    {{-- atau --}}

    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"> --}}

    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Rumahku | {{ $title ?? 'Rumahku' }}</title>
</head>

<body>
