@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>WiFi & Permanent Internet Service for Venues</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/venue-wifi" />
    <meta name="keywords" content="wifi service at venues" />
    <meta name="description" content="WiFi and Bandwidth Service for Venues" />
@endsection

@section('content')
    @include('common.nav')

    <venue-wifi></venue-wifi>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
