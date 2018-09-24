<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<!-- mobile specific metas--}}
    {{--================================================== -->--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">--}}

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')

    {{--<style>--}}
        {{--.search-wrap .search-form::after {--}}
            {{--content: "@lang('Press Enter to begin your search.')";--}}
        {{--}--}}
    {{--</style>--}}
    <!-- script ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
</head>

<body id="top">

    <!-- header ================================================== -->
    <header>
        <div class="gradient-block"></div>
        <div class="row header-content">
            <nav id="main-nav-wrap">
                <ul class="main-navigation sf-menu">
                    <li {{ currentRoute('home') }}>
                        <a href="{{ route('home') }}">@lang('Home')</a>
                    </li>
                    @guest
                    @endguest
                    {{--check login?--}}
                    @request
                    @endrequest
                    @else
                        @admin
                        <li>
                            <a href="{{ url('admin') }}">@lang('Administration')</a>
                        </li>
                        @endadmin
                        @redac
                        <li>
                            <a href="{{ url('admin/posts') }}">@lang('Administration')</a>
                        </li>
                        @endredac
                        <li>
                            <a id="logout" href="{{ route('logout') }}">@lang('Logout')</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                {{ csrf_field() }}
                            </form>
                        </li>
                </ul>
            </nav> <!-- end main-nav-wrap -->
        </div>
    </header> <!-- end header -->

@yield('main')

<!-- footer =============================================== -->
    <footer>
        <div class="footer-main">
            <div class="row">
                <div class="col-six tab-full mob-full footer-info">
                    <h4>@lang('About')</h4>
                </div> <!-- end footer-info -->
                <div class="col-three tab-1-2 mob-1-2 social-links">
                    <h4>@lang('Social')</h4>
                    {{--<ul>--}}
                    {{--<li><a href="#">Twitter</a></li>--}}
                    {{--<li><a href="#">Facebook</a></li>--}}
                    {{--<li><a href="#">Dribbble</a></li>--}}
                    {{--<li><a href="#">Google+</a></li>--}}
                    {{--<li><a href="#">Instagram</a></li>--}}
                    {{--</ul>--}}
                </div> <!-- end social links -->
            </div> <!-- end row -->
        </div> <!-- end footer-main -->
    </footer>
{{--<div id="preloader">--}}
{{--<div id="loader"></div>--}}
{{--</div>--}}
<!-- Java Script ================================================== -->
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{--enable logout js--}}
    {{--<script>--}}
    {{--$(function() {--}}
    {{--$('#logout').click(function(e) {--}}
    {{--e.preventDefault();--}}
    {{--$('#logout-form').submit()--}}
    {{--})--}}
    {{--})--}}
    {{--</script>--}}
    @yield('scripts')
</body>
</html>
