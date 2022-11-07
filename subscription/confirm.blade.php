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
    <!-- contactmsg section -->
	<section id="contactmsg" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>お問い合わせ内容確認</h2>
                    <div class="entryform">
                        <form method="POST" action="{{ route('subscription.send') }}">
                        {{ csrf_field() }}
                        <table class="secFormTable">
                            <tr>
                                <th><span class="innerTh">お名前</label></th>
                                <td>{{ $inputs['shimei'] }}
                                <input
                                    name="shimei"
                                    value="{{ $inputs['shimei'] }}"
                                    type="hidden">
                                </td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">住所</span></th>
                                <td>{{ $inputs['yubin'] }}
                                <input
                                    name="yubin"
                                    value="{{ $inputs['yubin'] }}"
                                    type="hidden">
                                    {{ $inputs['pref'] }}
                                    <input
                                    name="pref"
                                    value="{{ $inputs['pref'] }}"
                                    type="hidden">
                                    {{ $inputs['address1'] }}
                                    <input
                                    name="address1"
                                    value="{{ $inputs['address1'] }}"
                                    type="hidden">
                                    {{ $inputs['address2'] }}
                                    <input
                                    name="address2"
                                    value="{{ $inputs['address2'] }}"
                                    type="hidden">
                                </td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">電話番号</span></th>
                                <td>{{ $inputs['telnumber'] }}
                                <input
                                    name="telnumber"
                                    value="{{ $inputs['telnumber'] }}"
                                    type="hidden"></td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">メールアドレス</span></th>
                                <td>{{ $inputs['email'] }}
                                <input
                                    name="email"
                                    value="{{ $inputs['email'] }}"
                                    type="hidden"></td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">メールアドレス（確認）</span></th>
                                <td>{{ $inputs['email_kaku'] }}
                                <input
                                    name="email_kaku"
                                    value="{{ $inputs['email_kaku'] }}"
                                    type="hidden"></td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">会社名</span></th>
                                <td>{{ $inputs['com_name'] }}
                                <input
                                    name="com_name"
                                    value="{{ $inputs['com_name'] }}"
                                    type="hidden"></td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">部署名</span></th>
                                <td>{{ $inputs['busyo'] }}
                                <input
                                    name="busyo"
                                    value="{{ $inputs['busyo'] }}"
                                    type="hidden"></td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">業種</span></th>
                                <td>{{ $inputs['gyosyu'] }}
                                <input
                                    name="gyosyu"
                                    value="{{ $inputs['gyosyu'] }}"
                                    type="hidden"></td>
                            </tr>
                            <tr>
                                <th><span class="innerTh">ご要望</span></th>
                                <td>
                                {{ $inputs['youbou'] }}
                                <input
                                    name="youbou"
                                    value="{{ $inputs['youbou'] }}"
                                    type="hidden">
                                </td>
                            </tr>

                        </table>

                            <div>
                                <label class="title">お問い合わせ内容</label>
                                {!! nl2br(e($inputs['o_message'])) !!}
                                <input
                                    name="o_message"
                                    value="{{ $inputs['o_message'] }}"
                                    type="hidden">
                            </div>
                            <div>
                                <button type="submit" name="action" value="back">
                                    入力内容修正
                                </button>
                                <button type="submit" name="action" value="submit">
                                    送信する
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- end companyprofile section -->
</main>

@endsection