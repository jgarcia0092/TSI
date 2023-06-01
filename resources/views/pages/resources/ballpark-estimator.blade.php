@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Ballpark Estimator</title>
    <link rel="canonical" href="https://tradeshowinternet.com/resources/ballpark-estimator" />
    <meta name="keywords" content="exhibitor internet, exhibition wifi, exhibitor wi-fi internet, portable wi-fi for exhibitors, exhibitor internet rental, trade show exhibition wi-fi, exhibition internet service provider, broadband internet for exhibitors" />
    <meta name="description" content="Trade Show Internet provides reliable Internet and WiFi solutions for trade shows, conferences, experiential marketing activations and outdoor events." />
@endsection

@section('content')
    @include('common.nav')

    <ballpark-estimator></ballpark-estimator>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
