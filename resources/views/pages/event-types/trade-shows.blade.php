@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Wired & WiFi Network Solutions for Trade Shows</title>
    <link rel="canonical" href="https://tradeshowinternet.com/event-types/trade-shows" />
    <meta name="keywords" content="event wifi, conference broadband wifi, expo internet connectivity, exposition broadband wifi, trade fair internet, trade show booth, exhibitor booth hotspot, event internet, convention wifi, convention internet, event wi-fi, convention isp, temporary isp, exhibition internet, trade show booth wi-fi" />
    <meta name="description" content="Are You Looking for a WiFi or Wired Internet Service for an Upcoming Trade Show? We Are Here to Help! Click Here to Learn More!" />
@endsection

@section('content')
    @include('common.nav')

    <trade-shows></trade-shows>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
