<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common.head')
    @yield('head')
</head>
<body class="{{$body_class}}">
    <div id="app">
        @yield('content')
    </div>
    @include('common.scripts')
    @yield('scripts')
</body>
</html>
