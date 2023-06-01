@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>WiFi and Internet Services for Gaming Events & Tournaments</title>
    <link rel="canonical" href="https://tradeshowinternet.com/event-types/gaming-events" />
    <meta name="keywords" content="gaming event ISP, event internet for gaming events, tournament WiFi internet service, WiFi internet service during game tournament, wifi event internet service for gaming event" />
    <meta name="description" content="WiFi Event Internet Service for Gaming Events and Tournaments. Get First Class WiFi Internet For an Upcoming Gaming Tournament or Conference!" />
@endsection

@section('content')
    @include('common.nav')

    <gaming-events></gaming-events>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
