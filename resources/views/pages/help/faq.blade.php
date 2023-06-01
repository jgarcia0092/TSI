@extends('layouts.frontend',['body_class'=>'about-us'])

@section('head')
    <title>Frequently Asked Questions – Trade Show Internet</title>
    <link rel="canonical" href="https://tradeshowinternet.com/help/frequently-asked-questions" />
    <meta name="keywords" content="trade show internet faq, frequently asked questions, common questions about WiFi, frequently asked questions from event organizers" />
    <meta name="description" content="Get Answers to Most Frequently Asked Questions About Our Services and Offers For Trade Show Organizers and Exhibitors." />
@endsection

@section('content')
    @include('common.nav')

    <faq></faq>
    
    @include('common.footer')

@endsection

@section('scripts')

@endsection
