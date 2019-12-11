<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- meta character set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>株式会社セカンド・ウェーブ | WEBシステム開発・WEBサイト構築なら！株式会社セカンド・ウェーブ 2ndwave</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Meta Description -->
    <meta name="description" content="株式会社セカンド・ウェーブは、WEBデザイン・WEBシステムを中心とした業務アプリケーションの作成など、皆様のビジネスに役立つトータルなお手伝いを行う会社です。">
    <meta name="keywords" content="セカンドウェーブ,WEBデザイン,アジャイル開発,WEBシステム開発,受託開発,自社内開発,ビジネスプロセスアウトソーシング,WEBサイト構築,神奈川,横浜,WEB制作,WEB制作会社,Webコンテンツ企画">
    <meta name="author" content="株式会社セカンド・ウェーブ ">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- sp_tablet.css -->
    <link rel="stylesheet" href="css/sp_tablet.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- parallax -->
    <link rel="stylesheet" id="parallax-css" href="css/parallax.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fadethis.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/wow.min.js"></script>
</head>

<body>
@include('layouts.header')


@yield('content')

@include('layouts.footer')
@section('javascripts')
<script type="text/javascript" src="js/skrollr.js"></script>
<script type="text/javascript" src="js/scrollr-init.js"></script>
    <script>
        var $d = jQuery.noConflict();
            $d(window).fadeThis();
    </script>
@show
</body>
</html>