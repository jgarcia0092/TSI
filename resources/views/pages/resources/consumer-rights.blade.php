@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Consumer Bill of Rights – Trade Show Internet</title>
    <link rel="canonical" href="https://tradeshowinternet.com/help/consumer-rights" />
    <meta name="keywords" content="consumer bill of rights, wireless spectrum use, federal protections regarding WiFi use, WiFi usage rights" />
    <meta name="description" content="Learn More About the Federal Protections Created to Protect Your Wireless Freedom and the Consumer Bill of Rights Regarding the Wireless Spectrum Use in the United States!" />
@endsection

@section('content')
    @include('common.nav')

    <consumer-rights></consumer-rights>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
