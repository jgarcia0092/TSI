@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>4G Mega Internet Kit – Trade Show Internet</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/4g-mega-internet-kit" />
    <meta name="keywords" content="4G mega internet kit, 4G mega kit, 4G mega kit rental, 4G mega kit bandwidth" />
    <meta name="description" content="4G Mega Internet Kit" />
@endsection

@section('content')
    @include('common.nav')

    <mega-kit></mega-kit>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
