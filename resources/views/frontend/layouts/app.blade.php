{{-- CONNECT TO HEADER --}}
@include('frontend/layouts/header')


{{-- CONNECT TO NAVBAR --}}
@include('frontend/layouts/navbar')

{{-- CONNECT TO CONTENT --}}
@yield('content')

{{-- Floating WhatsApp CTA --}}
@include('frontend/layouts/callToAction')

{{-- CONNEC TO FOOTER --}}
@include('frontend/layouts/footer')
