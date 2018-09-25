<!DOCTYPE html>
<html>
    <head>
        <title>@yield('pageTitle')</title>
        {{--<meta name="description" content="@yield('metaDescription')"/>--}}
    </head>
    <body>
    <div>
        <a href="front"></a>
        <a href="hop-in-line"></a>
        <a href="Barbers"></a>
        <br />
        @yield('content')
    </div>
        <div>@section('')
            @show</div>
        <div>@section ('Hello, {{ $name }}.')</div>
        @endsection


    </body>
</html>