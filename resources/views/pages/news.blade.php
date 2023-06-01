@extends('layouts.frontend',['body_class'=>'about-us'])

@section('head')
    <title>News About Event Internet Solutions – Trade Show Internet</title>
    <link rel="canonical" href="https://tradeshowinternet.com/news" />
    <meta name="keywords" content="trade show internet news, news about event internet solutions, news about live event internet solutions, TSI news, TSI media" />
    <meta name="description" content="Read about Trade Show Internet in the news. Click here to go to our Event Internet Solutions news page!" />
@endsection

@section('content')
    @include('common.nav')

    <news></news>
    
    @include('common.footer')

@endsection

@section('scripts')

@endsection
