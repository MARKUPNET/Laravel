<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>予約フォーム | laravel | ポートフォリオ</title>

	<meta name="description" content="ポートフォリオ">

	<!-- google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap">
	<!-- google font-->

	<!-- for Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
	<!-- for Bootstrap 5 -->

    <!-- css-->
    <link href="{{ config('app.utl') }}/css/style.css" rel="stylesheet">
    @yield('css')
	<!-- css-->

</head>
<body class="" ontouchstart="">
    <div id="app">

        <div class="wrapper">

            <header class="site-header">

                <div class="headerNavi d-flex align-items-center justify-content-between">
                    <div class="logo"></div>
                    <div class="gnavi">
                        <a href="./admin/">ADMIN</a>
                    </div>
                </div>

                @yield('content_header')

            </header>
            <!-- /.site-header-->

            <main class="site-container">
                <div class="page-container">

                    @yield('content')

                </div>
            </main>
            <!-- /.site-container-->

            <footer class="site-footer">
                <p class="copyright">copyright xxxxxx</p>
            </footer>
            <!-- /.site-footer-->

        </div>

    </div>

    <!-- js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('js')
	<!-- js-->
</body>
</html>
