@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Exhibitor Internet Solutions - Broadband WiFi HotSpot Rental</title>
    <link rel="canonical" href="https://tradeshowinternet.com/event-types/exhibitors" />
    <meta name="keywords" content="exhibitor internet, exhibition wifi, exhibitor wi-fi internet, portable wi-fi for exhibitors, exhibitor internet rental, trade show exhibition wi-fi, exhibition internet service provider, broadband internet for exhibitors" />
    <meta name="description" content="Exhibition Coming Up? Try the Portable Wi-Fi Internet Kit Solution for Exhibitors from Trade Show Internet for a Flawless Broadband Experience!" />
@endsection

@section('content')
    @include('common.nav')

    <exhibitor></exhibitor>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
