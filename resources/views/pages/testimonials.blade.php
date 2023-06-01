@extends('layouts.frontend',['body_class'=>'about-us'])

@section('head')
    <title>Customer Testimonials - Trade Show Internet</title>
    <link rel="canonical" href="https://tradeshowinternet.com/testimonials" />
    <meta name="keywords" content="trade show internet customer testimonials, testimonials, event isp testimonials, trade show internet" />
    <meta name="description" content="Click Here To Read About What Our Customers Have Said After Utilizing Our Reliable and Affordable Internet Connectivity Solutions." />
@endsection

@section('content')
    @include('common.nav')

    <testimonials></testimonials>
    
    @include('common.footer')

@endsection

@section('scripts')

@endsection
