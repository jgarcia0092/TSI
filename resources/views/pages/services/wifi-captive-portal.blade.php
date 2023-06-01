@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Captive Portal & Branded Splash Pages for Your WiFi Network</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/wifi-captive-portal" />
    <meta name="keywords" content="captive portal, captive portal software, wifi splash page, captive portal for wifi, wifi-splash-page-software, captive portal software solution for events" />
    <meta name="description" content="Create a WiFi Network Splash Page via Our Captive Portal Software Solution and Capture Your Attendees' Contact Information Easily During Your Events!" />
@endsection

@section('content')
    @include('common.nav')

    <wifi-captive-portal></wifi-captive-portal>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
