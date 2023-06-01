@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Temporary Event WiFi Hotspot & 4G Internet Kit Rental</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/4g-internet-kit" />
    <meta name="keywords" content="portable wi-fi, internet kit, mobile hotspot, temporary broadband wi-fi, wifi hotspot rental, wifi hotspot kit, mobile hot spot rental, 4g internet kit" />
    <meta name="description" content="Do you need a temporary 4G wireless Internet Kit? Trade Show Internet can help you with rental portable broadband Internet and WiFi hotspot products!" />
@endsection

@section('content')
    @include('common.nav')

    <internet-kit></internet-kit>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
