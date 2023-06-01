@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Live Event Internet Solution White Papers</title>
    <link rel="canonical" href="https://tradeshowinternet.com/resources/white-papers" />
    <meta name="keywords" content="exhibitor internet, exhibition wifi, exhibitor wi-fi internet, portable wi-fi for exhibitors, exhibitor internet rental, trade show exhibition wi-fi, exhibition internet service provider, broadband internet for exhibitors" />
    <meta name="description" content="White Papers about Event Internet Needs at Convention Centers, Hotels and Other Event Locations - Trade Show Internet"/>
@endsection

@section('content')
    @include('common.nav')

    <white-papers></white-papers>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
