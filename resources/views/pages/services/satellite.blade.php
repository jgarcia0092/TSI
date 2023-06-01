@extends('layouts.frontend',['body_class'=>'landing-page'])

@section('head')
    <title>Satellite Bandwidth Solutions</title>
    <link rel="canonical" href="https://tradeshowinternet.com/services/satellite-bandwidth" />
    <meta name="keywords" content="satellite internet kit, satellite kit, satellite rental, satellite bandwidth" />
    <meta name="description" content="Satellite Internet Kit" />
@endsection

@section('content')
    @include('common.nav')

    <satellite></satellite>

    @include('common.footer')

@endsection

@section('scripts')

@endsection
