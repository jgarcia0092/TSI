@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Event Internet Service - Meeting & Conference WiFi Solutions</title>
    <link rel="canonical" href="https://tradeshowinternet.com/event-types/meetings-conferences" />
    <meta name="keywords" content="event wifi, conference broadband wifi, expo internet connectivity, exposition broadband wifi, trade fair internet, trade show booth, exhibitor booth hotspot, event internet, convention wifi, convention internet, event wi-fi, convention isp, temporary isp, exhibition internet, trade show booth wi-fi" />
    <meta name="description" content="Are You Looking For Temporary Conference or Company Meeting WiFi/Internet?  Trade Show Internet provides event internet services and wireless networks for meetings and conferences." />
@endsection

@section('content')
    @include('common.nav')

    <meetings-conferences></meetings-conferences>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
