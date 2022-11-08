<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap">

	<!-- css-->
    <link rel="stylesheet" href="{{ route('index') }}/css/style.css" media="all">
    @yield('css')

</head>

<body ontouchstart="">

    <div id="app">

        <div class="wrapper">

            <header class="site-header">
                <div class="inner">
                    <div class="header__logo">
                        <a href="{{ route('index') }}">注文システム</a>
                    </div>
                    <div class="header__navi">
                        <nav class="gNavi">
                            <ul>
                                <li><a href="{{ route('shopping.index') }}/1">かりんとう饅頭</a></li>
                                <li><a href="{{ route('shopping.index') }}/2">ながぬま ふ輪っと</a></li>
                                <li><a href="{{ route('shopping.index') }}/3">あかねいろマドレーヌ</a></li>
                                <li><a href="{{ route('admin.index') }}">管理画面</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div id="hamburger_button"><span></span></div>
                </div>
            </header>
            <!-- /.site-header-->

            <main class="site-container">

                <div class="page-container">

                    <div class="page-header">
                        @yield('page_header')
                    </div>

                    <div class="page-content">
                        <div class="inner">
                            @yield('content')
                        </div>
                    </div>

                    <div class="page-footer">
                        <div class="inner">
                        </div>
                    </div>

                </div>
                <!-- /.page-container-->

            </main>
            <!-- /.site-container-->

            <footer class="site-footer">
                <div class="inner">
                </div>
                <p class="copyright">copyright&copy; XXXXXX</p>
            </footer>
            <!-- /.site-footer-->

        </div>
        <!-- /.wrapper-->

    </div>

    <!-- Scripts -->
    <script src="{{ route('index') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ route('index') }}/js/script.js"></script>
    @yield('js')

</body>
</html>
