@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Event IT / Network Engineering</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/event-IT" />
    <meta name="keywords" content="exhibitor internet, exhibition wifi, exhibitor wi-fi internet, portable wi-fi for exhibitors, exhibitor internet rental, trade show exhibition wi-fi, exhibition internet service provider, broadband internet for exhibitors" />
    <meta name="description" content="Event IT Solutions From Expert Network Engineers. Contact Us For Custom IT Solutions For Your Next Event!" />
@endsection

@section('content')
    @include('common.nav')

    <event-it></event-it>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
