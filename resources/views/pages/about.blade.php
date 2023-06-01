@extends('layouts.frontend',['body_class'=>'about-us'])

@section('head')
    <title>About – Trade Show Internet</title>
    <link rel="canonical" href="https://tradeshowinternet.com/about" />
    <meta name="keywords" content="" />
    <meta name="description" content="Click Here To Learn More About Trade Show Internet, The Company's Leadership Team, Service Areas and Customer Service Approach!" />
@endsection

@section('content')
    @include('common.nav')

    <about></about>
    
    @include('common.footer')

@endsection

@section('scripts')

@endsection
