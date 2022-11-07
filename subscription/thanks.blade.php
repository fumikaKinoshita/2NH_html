@extends('layouts.home3')

@section('title', __('home.title.company01'))

@section('content')
<main class="site-content" role="main">
	<section id="contactcatV" class="parallax">
        <div class="category-caption">
            <div class="caption-content">
                <h2 class="animated fadeInDown">CONTACT</h2>
                <span class="animated fadeInDown">お問い合わせ</span>
            </div>
        </div>
	</section>
    <section id="companyprofile" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">送信が完了いたしました。ありがとうございました。</div>
            </div>
        </div>
    </section>
    <section id="companyprofile" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><a href="https://www.2ndwave.jp/subscription">TOPへ戻る</a></div>
            </div>
        </div>
    </section>
</main>
<footer>
    copyright &copy; 2021 <a href="https://www.2ndwave.jp" target="_blank">2ndwave.,Inc</a> All Rights Reserved.
</footer>


@endsection