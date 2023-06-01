@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Bandwidth Calculator</title>
    <link rel="canonical" href="https://tradeshowinternet.com/resources/bandwidth-calculator" />
    <meta name="keywords" content="exhibitor internet, exhibition wifi, exhibitor wi-fi internet, portable wi-fi for exhibitors, exhibitor internet rental, trade show exhibition wi-fi, exhibition internet service provider, broadband internet for exhibitors" />
    <meta name="description" content="Bandwidth Calculator For Events. Calculate The Necessary Wired or WiFi Internet Bandwidth That Will Be  Necessary For Your Next Event!" />
@endsection

@section('content')
    @include('common.nav')

    <bandwidth-calculator></bandwidth-calculator>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
