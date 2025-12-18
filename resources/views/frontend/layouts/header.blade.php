<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- TTITLE CEO --}}
    <title>{{ $title ?? 'Telaga Kahuripan - Hunian & Area Komersial Strategis di Bogor' }}</title>


    {{-- META DESCRIPTION --}}
    <meta name="description"
        content="{{ $metaDescription ?? 'Telaga Kahuripan merupakan kawasan hunian modern dan area komersial strategis di Bogor. Rumah eksklusif, ruko, dan peluang investasi properti terbaik.' }}">


    {{-- META KEYWORDS (opsional) --}}
    <meta name="keywords"
        content="perumahan bogor, rumah dijual bogor, telaga kahuripan, hunian modern bogor, area komersial bogor, investasi properti">

    {{-- ROBOTS --}}
    <meta name="robots" content="index, follow">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    {{-- FAVICON --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/android-icon-48x48.png') }}">


    {{-- SwiperJS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
