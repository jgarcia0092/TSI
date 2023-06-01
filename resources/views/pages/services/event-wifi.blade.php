@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Event WiFi - Internet Solutions For Events</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/event-WiFi" />
    <meta name="keywords" content="exhibitor internet, exhibition wifi, exhibitor wi-fi internet, portable wi-fi for exhibitors, exhibitor internet rental, trade show exhibition wi-fi, exhibition internet service provider, broadband internet for exhibitors" />
    <meta name="description" content="WiFi Event Internet Solutions For Event Organizers. Click Here to Learn More About Our Custom WiFi Solutions For Your Next Event!" />
@endsection

@section('content')
    @include('common.nav')

    <event-wifi></event-wifi>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
