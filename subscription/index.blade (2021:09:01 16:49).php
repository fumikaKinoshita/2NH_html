@extends('layouts.home3')

@section('title', __('home.title.company01'))

@section('content')
<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- meta character set -->
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>株式会社セカンド・ウェーブ | subscription</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- Meta Description -->
        <meta name="description" content="株式会社セカンド・ウェーブは、WEBデザイン・WEBシステムを中心とした業務アプリケーションの作成など、皆様のビジネスに役立つトータルなお手伝いを行う会社です。">
        <meta name="keywords"
            content="セカンドウェーブ,WEBデザイン,アジャイル開発,WEBシステム開発,受託開発,自社内開発,ビジネスプロセスアウトソーシング,WEBサイト構築,神奈川,横浜,WEB制作,WEB制作会社,Webコンテンツ企画">
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
        <link rel="stylesheet" href="css/magnific.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/style.css">
    </head>
    <header class="globalHeader" id="top">
                <div class="globalHeader_pc">
                <div class="">
                    <div class="row">
                        <div class="navbar-header">
                            <h1>
                            <a href="" class="navbar-brand">株式会社セカンド・ウェーブ</a>
                            </h1>
                        </div>

                        <nav class="globalNav">
                            <ul class="globalNav_items">
                                <li class="telno"><a href="tel:0455347932">045-534-7932</a>
                                </li>
                                <li class="mailbtn">
                                    <a href="#mailform">お問い合わせはこちら</span></a>
                                </li>
                            </ul>
                        <!-- /.globalNav --></nav>
                    </div>
                </div>
                </div>
                <div class="globalHeader_sp">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <h1>
                            <a href="/" class="navbar-brand">株式会社セカンド・ウェーブ</a>
                            </h1>
                        </div>
                        <div class="contactmenu"><a href="tel:0455347932">045-534-7932</a></div>
                            <div class="mailbtn">
                                <a href="#mailform">お問い合わせはこちら</a>
                            </div>
                        </div>
                    </div>
                </div>
    </header>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <p style="color:red;">入力していただいた入力フォームにエラーがあります。リンクをクリックして確認してください。</p>
            <a href="#contactmsg" class="alert-link">{{$error}}</a>
        </div>
    @endforeach
    <main class="site-content" role="main">
        <section id="subscriptionmv" class="parallax">
            <div class="category-caption">
                <div class="caption-content">
                    <img src="/img/subscription/mv.jpg" class="pcv" alt="月々80万円からのwebシステム開発">
                </div>
            </div>
        </section>
        <section id="onayami" class="parallax">
                <div class="onayami-content">
                    <img src="/img/subscription/onayami_mv.jpg" class="pcv">
                </div>
        </section>
        <section id="onayamikaiketsu" class="parallax">

                    <h2 class="animated fadeInDown">そのお悩み,2ndwaveなら解決できます！</h2>
                <div class="caption-content">
                    <div class="ok_inner">
                        <div class="ok_inner_inner">
                            <div class="contents animated fadeInDown">
                                <img src="/img/subscription/service01.jpg">
                                <h3>新機能開発</h3>
                                <p>今使っているWEBシステムに新機能を追加したい！といったお声にお応えいたします。</p>
                            </div>
                            <div class="contents animated fadeInDown">
                                <img src="/img/subscription/service02.jpg">
                                <h3>エンハンス(改修･改善)業務</h3>
                                <p>今のシステムをもっと使いやすくしたい！お客様のニーズにあった最適なプランをご提案させていただきます。</p>
                            </div>
                            <div class="contents animated fadeInDown">
                                <img src="/img/subscription/service03.jpg">
                                <h3>保守業務</h3>
                                <p>現在使用中のWEBシステムの保守業務をアウトソースしたい、というお客様のニーズにお応えいたします。</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="customersvoice" class="parallax">
            <div class="category-caption">
                <div class="customersvoicecont">
                    <div class="caption-content">
                        <h2 class="animated fadeInDown">お客様の声</h2>
                        <span class="animated fadeInDown"></span>
                    </div>
                    <div class="caption-content">
                        <div class="cust_vo1 animated fadeInDown">
                            <img src="">
                            <h3>時短になりました！</h3>
                            <p>毎月発生する手作業でのルーチンワークに嫌気がさしていたんですが、2ndwaveさんの提案してくれたシステムを導入することにより手作業での入力が不要になりかなり時間が短縮できるようになりました！</p>
                        </div>
                        <div class="cust_vo2 animated fadeInDown">
                            <img src="">
                            <h3>売上は上がっているのに早く帰れるようになりました☆</h3>
                            <p>2ndwaveさんの作ってくれたシステムを導入することでコスト削減につながり結果売上があがりました。
                                作業効率もよくなり早く帰ることができるようになりました！</p>
                        </div>
                        <div class="cust_vo3 animated fadeInDown">
                            <img src="">
                            <h3>エンドユーザーからの問い合わせが増えた♪</h3>
                            <p>2ndwaveさんのシステム改善案を導入後、エンドユーザーからのお問い合わせが増え嬉しい悲鳴です♪
                                これからもよろしくお願いいたします☆</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="flow" class="parallax">
            <div class="category-caption">
                <div class="caption-content">
                    <h2 class="animated fadeInDown">サービス開始までの流れ</h2>
                    <span class="animated fadeInDown">なんとたったの3ステップで最速5営業日以内にご利用開始できます。</span>
                </div>
                <div class="caption-content">
                    <div class="flow_step">
                    <div class="flow_step1">
                        <div class="step1">
                            <img src="/img/subscription/stepone.jpg">
                        </div>
                        <h3>下記無料お見積もりフォームまたは<br>お電話にてお問合せください</h3>
                        <p class="pl-1">ご質問を承っております。<br>
                            また、現在ご利用中のWEBシステム運用が抱えている問題点をお聞きし弊社での対応が可能か？ <br>
                            現状のヒアリングを実施させていただきます。</p>
                    </div>
                    <div class="flow_step2">
                        <div class="step2">
                            <img src="/img/subscription/steptwo.jpg">
                        </div>
                        <h3>お問い合わせに対するご提案・<br>詳細お見積もり作成</h3>
                        <p class="pl-1">現状抱える問題に対し、どのようにご対応体制を整えるのがベストかを検討し適正ユニット、 チーム編成をシミュレーション。
                            お客様にフィットしたプランのご提案をいたします。</p>
                    </div>
                    <div class="flow_step3">
                        <div class="step3">
                            <img src="/img/subscription/stepthree.jpg">
                        </div>
                        <h3>ご契約</h3>
                        <p class="pl-1">ご提案内容が問題なければ、お客様の同意のもとご契約を行います。
                            WEBシステム更新作業など制作業務の依頼方法をレクチャーさせていただきます。</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="plan" class="parallax">
            <div class="category-caption">
                <div class="caption-content">
                    <h2 class="animated fadeInDown">選べる3つのプラン</h2>
                    <span class="animated fadeInDown">お客様のやりたいことにあわせてプランが選べて便利♪<br>
                        もちろん中途解約もOK！（費用は日割りになります）<br>
                        ※大手メーカー、Sier様からのご依頼は別途ご相談承ります。</span>
                </div>
                <div class="caption-content">
                    <div class="planinner">
                        <table class="plantbl">
                            <tr>
                                <th width="33.3%"><h3>ベーシックプラン</h3></th>
                                <th width="33.3%"><h3>ラボ契約プラン</h3></th>
                                <th width="33.3%"><h3>カスタマイズプラン</h3></th>
                            </tr>
                            <tr>
                                <td>80万円（月）</td>
                                <td>80万円(月)×人数</td>
                                <td>120万円(月)</td>
                            </tr>
                            <tr>
                                <td>小規模システムの
                                    エンハンス、既存システム調査、
                                    要件定義等</td>
                                <td>小中規模新規開発、<br>
                                    実効タスクが決定している中規模改修等
                                </td>
                                <td>デモ・プロトタイプ作成など、<br>
                                    進め方・御見積が困難な場合。</td>
                            </tr>
                            <tr>
                                <td>タスク単位でお見積もりを行い、優先順位をお打合せの上、毎月確実に消化します。
                                </td>
                                <td>ご希望金額（納期）に合わせて、お打合せの上決定いたします。
                                </td>
                                <td>要件詳細をご相談下さい。
                                </td>
                            </tr>
                        </table>
                        <table class="plantbl_sp">
                            <tr>
                                <th width="33.3%"><h3>ベーシックプラン</h3></th>
                                <td>80万円（月）</td>

                                <td>小規模システムの
                                    エンハンス、既存システム調査、
                                    要件定義等</td>
                                    <td>タスク単位でお見積もりを行い、優先順位をお打合せの上、毎月確実に消化します。
                                </td>


                            </tr>
                            <tr>
                            <th width="33.3%"><h3>ラボ契約プラン</h3></th>
                                <td>80万円(月)×人数</td>
                                <td>小中規模新規開発、<br>
                                    実効タスクが決定している中規模改修等
                                </td>
                                <td>ご希望金額（納期）に合わせて、お打合せの上決定いたします。
                                </td>
                            </tr>
                            <tr>
                            <th width="33.3%"><h3>カスタマイズプラン</h3></th>
                            <td>120万円(月)</td>
                                <td>デモ・プロトタイプ作成など、<br>
                                    進め方・御見積が困難な場合。</td>
                                <td>要件詳細をご相談下さい。</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </section>
        <section id="faq" class="parallax">
            <div class="category-caption">
                <div class="caption-content">
                    <h2 class="animated fadeInDown">Q＆A</h2>
                </div>
                <div class="caption-content">
                    <div class="faqinner">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <div class="mb-0 pm_mark">
                                        <a class="" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="" aria-controls="collapseOne">
                                    </a></div>
                                    <span class="titletxt">
                                        毎月コンスタントに作業が発生するわけではないけど、そういった場合費用はどうなるの？
                                    </span>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                まずは最低金額のお見積もりをさせていただき、作業発生の度にお見積もりを作成させていただくことも可能です。
                                </div>
                            </div>
                            </div>
                            <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <div class="mb-0 pm_mark">
                                        <a class="" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    </a></div>
                                <span class="titletxt">大きい改修をドカンとやりたいけど、どのプランがよい？</span>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                それでしたら断然カスタマイズプランがおススメです。<br>
                                お客様のご要望に沿ったご提案をさせていただきお見積りを作成させていただきます。
                                </div>
                            </div>
                            </div>
                            <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <div class="mb-0 pm_mark">
                                        <a class="" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    </a></div>
                                <span class="titletxt">使用する言語は何ですか？</span>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    弊社でよく使う言語はPHP,Ruby on Rails等です。<br>
                                    もちろんお客様のニーズに合わせた言語を使用し開発いたします。
                                </div>
                            </div>
                            </div>
                            <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <div class="mb-0 pm_mark">
                                    <a class="" type="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"></a>
                                    </div>
                                    <span class="titletxt">
                                    変えたいのは1つだけなんだけど、それでもベーシックプランの分払わなきゃダメ？
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                もちろんお客様のニーズに合わせてお見積もりを別途作成して対応を行いご請求させていただくことも可能です。
                            </div>
                            </div>
                        </div>
                        </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section id="telbox" class="parallax">
            <div class="category-caption">
                <div class="caption-content">
                    <p>まずはお気軽にお電話ください！</p>
                    <h2 class="animated fadeInDown">
                        <img src="/img/subscription/telmark.png">
                        045-534-7932</h2>
                    <span class="animated fadeInDown">営業時間（平日）9:00〜18:00</span>
                </div>
            </div>
        </section>
        <section id="mailform" class="parallax">
            <div class="category-caption">
                <div class="caption-content boxTit">
                    <div class="boxTit"></div>
                    <h2 class="animated fadeInDown">WEBからの無料お見積もりはこちらから♪</h2>
                    <span class="animated fadeInDown">お問合せ・ご相談につきましては、電話またはZoomで対応しておりますので、ご安心くださいませ。</span>
                </div>
            </div>
        </section>



        <!-- contactmsg section -->
        <section id="contactmsg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="entryform">
                            <form method="POST" action="{{ route('subscription.confirm') }}">
                            {{ csrf_field() }}
                            <table class="secFormTable">
                                <tr>
                                    <th>
                                        <span class="must">必須</span>
                                        <span class="innerTh">お名前</span></th>
                                        <td><input
                                        name="shimei"
                                        value="{{ old('shimei') }}"
                                        type="text" class="inputRequired" placeholder="例）二波太郎">
                                        @if ($errors->has('shimei'))
                                            <p class="error-message">{{ $errors->first('shimei') }}</p>
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="must">必須</span>
                                        <span class="innerTh">住所</span></th>
                                    <td>
                                        〒<input
                                        name="yubin"
                                        value="{{ old('yubin') }}"
                                        type="text" class="inputRequired" style="width:160px;" onKeyUp="AjaxZip3.zip2addr(this,'','pref','pref');"　 placeholder="例）2210835">
                                        @if ($errors->has('yubin'))
                                            <p class="error-message">{{ $errors->first('yubin') }}</p>
                                        @endif
                                        <input
                                        name="pref"
                                        value="{{ old('pref') }}"
                                        type="text" class="inputRequired" placeholder="都道府県・市区町村">
                                        @if ($errors->has('pref'))
                                            <p class="error-message">{{ $errors->first('pref') }}</p>
                                        @endif
                                        <input
                                        name="address1"
                                        value="{{ old('address1') }}"
                                        type="text" class="inputRequired" placeholder="番地">
                                        @if ($errors->has('address1'))
                                            <p class="error-message">{{ $errors->first('address1') }}</p>
                                        @endif
                                        <input
                                        name="address2"
                                        value="{{ old('address2') }}"
                                        type="text" class="inputRequired" placeholder="ビル名・部屋番号など">

                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="must">必須</span>
                                        <span class="innerTh">電話番号</span></th>
                                    <td><input
                                        name="telnumber"
                                        value="{{ old('telnumber') }}"
                                        type="text" class="inputRequired" placeholder="例）0455347932">
                                        @if ($errors->has('telnumber'))
                                            <p class="error-message">{{ $errors->first('telnumber') }}</p>
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th><span class="must">必須</span>
                                        <span class="innerTh">メールアドレス</span></th>
                                    <td><input
                                        name="email"
                                        value="{{ old('email') }}"
                                        type="text" class="inputRequired" placeholder="例）sample@companyname.com">
                                        @if ($errors->has('email'))
                                            <p class="error-message">{{ $errors->first('email') }}</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="must">必須</span>
                                        <span class="innerTh">メールアドレス（確認）</span></th>
                                    <td><input
                                        name="email_kaku"
                                        value="{{ old('email_kaku') }}"
                                        type="text" class="inputRequired" placeholder="例）sample@companyname.com">
                                        @if ($errors->has('email_kaku'))
                                            <p class="error-message">{{ $errors->first('email_kaku') }}</p>
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th><span class="optional">任意</span><span class="innerTh">会社名</span></th>
                                    <td><input
                                        name="com_name"
                                        value="{{ old('com_name') }}"
                                        type="text" placeholder="例）株式会社セカンド・ウェーブ"></td>
                                </tr>
                                <tr>
                                    <th><span class="optional">任意</span>
                                        <span class="innerTh">部署名</span>
                                    </th>
                                    <td>
                                        <input
                                        name="busyo"
                                        value="{{ old('busyo') }}"
                                        type="text" placeholder="例）営業部">

                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="optional">任意</span>
                                        <span class="innerTh">業種</span>
                                    </th>
                                    <td><select name="gyosyu"
                                        value="{{ old('gyosyu') }}">

                                        <option>選択してください</option>
                                        <option>農業・林業</option>
                                        <option>漁業</option>
                                        <option>鉱業，採石業，砂利採取業</option>
                                        <option>建設業</option>
                                        <option>製造業</option>
                                        <option>電気・ガス・熱供給・水道業</option>
                                        <option>情報通信業</option>
                                        <option>運輸業，郵便業</option>
                                        <option>卸売業，小売業</option>
                                        <option>金融業，保険業</option>
                                        <option>不動産業，物品賃貸業</option>
                                        <option>学術研究，専門・技術サービス業</option>
                                        <option>宿泊業，飲食サービス業</option>
                                        <option>生活関連サービス業，娯楽業</option>
                                        <option>教育，学習支援業</option>
                                        <option>医療，福祉</option>
                                        <option>複合サービス事業</option>
                                        <option>サービス業（他に分類されないもの）</option>


                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <span class="optional">任意</span>
                                        <span class="innerTh">ご要望</span>
                                    </th>
                                    <td>
                                    <select name="youbou"
                                        value="{{ old('youbou') }}">

                                        <option>選択してください</option>
                                        <option>新機能開発</option>
                                        <option>運用・保守</option>
                                        <option>改修・改善</option>
                                        <option>コンサルティング</option>
                                        <option>その他</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="optional">任意</span>
                                        <span class="innerTh">お問い合わせ内容</span>
                                    </th>
                                    <td><textarea name="o_message" placeholder="お問い合わせの内容をご入力ください。">{{ old('o_message') }}</textarea>
                                        @if ($errors->has('o_message'))
                                            <p class="error-message">{{ $errors->first('o_message') }}</p>
                                        @endif</td>
                                </tr>
                            </table>
                            <div class="boxTxt">
                                <p class="txt">
                                    本プライバシーポリシーは、株式会社セカンド・ウェーブ（以下「当社」）が取得し、利用する全ての個人情報等をその対象として、当社の個人情報等に関する基本的指針を定めるものです。
                                </p>
                                <p class="txt">
                                    個人情報保護方針<br>
                                    当社は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
                                </p>
                                <p class="txt">
                                    個人情報の管理<br>
                                    当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                                </p>
                                <p class="txt">
                                    個人情報の利用目的<br>
                                    当社は、当社が運営するウェブサイト（以下「当社サイト」と言います。）では、お客様からのお問い合わせ時に、お名前、メールアドレス、電話番号等の個人情報をご登録いただく場合がございますが、これらの個人情報はご提供いただく際の目的以外では利用いたしません。<br>
                                    お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料の送付に利用いたします。
                                </p>
                                <p class="txt">
                                    個人情報の第三者への開示・提供の禁止
                                    当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>
                                    1.	お客さまの同意がある場合<br>
                                    2.	当社関係会社その他の協力会社に対し業務委託を行なうために必要な場合<br>
                                    3.	お客さまからのお問い合わせ内容に照らし、当社製品・サービスを提供する当社関係会社にて対応することが適当と当社で判断した場合<br>
                                    4.	法令に基づき開示することが必要である場合<br>
                                    5.	人命や人権を保護するために緊急に開示を行なう必要がある場合<br>
                                    6.	司法機関、警察などの公共団体などによる法令に基づく要請に協力する場合
                                </p>
                                <p class="txt">
                                    個人情報の安全対策<br>
                                    当社は、当社サイトを通じてご本人から個人情報をご提供いただく際は、通信途上における第三者への情報漏えいを防止するため、SSL (Secure Sockets Layer)/TLS (Transport Layer Security)による暗号化またはこれに準ずるセキュリティ技術を使用します。<br>
                                    ただし、ご本人のコンピューター環境により、まれにこれらの技術をご利用いただけない場合がございます。
                                </p>
                                <p class="txt">
                                    ご本人の照会<br>
                                    お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                                </p>
                                <p class="txt">
                                    クッキー（Cookie）、WebビーコンおよびIPアドレスの利用について<br>
                                    「クッキー」とは、Webサイトの効率的な運用のために、サーバーがご本人のブラウザーに送信し、ブラウザー側に保持される識別情報です。「Webビーコン」とは、クッキーを利用して特定のWebページへのアクセスについて統計情報を取得するための技術です。「IPアドレス」とは、サーバーにアクセスしているコンピューターを特定できる番号です（コンピューターの使用者を特定することはできません）<br>
                                    当社は、当社サイトにおいて、クッキー（Cookie）、WebビーコンおよびIPアドレスを次の目的で使用することがあります。<br>
                                    1.	サーバーで発生した障害や問題の原因を突き止め解決するため<br>
                                    2.	Webサイトや電子メール等の内容を改良するため<br>
                                    3.	Webサイトや電子メール等の内容を個々の利用者向けにカスタマイズするため<br>
                                    4.	ご本人の閲覧履歴やアンケート結果などをマーケティング活動に利用するため<br>
                                    5.	個人を特定できない状態で統計資料として利用するため<br>
                                    ご本人は、インターネット閲覧ソフト（以下、ブラウザーといいます）の設定でクッキーの受取りを拒否することにより、弊社によるクッキーおよびWebビーコンの利用を拒否することができます。<br>
                                    ただし、その場合には、カスタマイズ機能等一部の機能が使用できないなどの制約が生じることがあります。
                                </p>
                                <p class="txt">
                                    Googleアナリティクスの利用について<br>
                                    当社は、当社サイトにおいて、その利用状況を把握するために、Googleアナリティクスを利用することがあります。Googleアナリティクスは、ファーストパーティクッキーを利用して、弊社サイトへのアクセス情報を個人を特定することなく収集します。<br>
                                    アクセス情報の収集方法および利用方法については、Googleアナリティクスサービス利用規約およびGoogleプライバシーポリシーによって定められています。<br>
                                    Googleアナリティクスについての詳細は、次のページをご参照ください。<br>
                                    http://www.google.com/analytics
                                </p>
                                <p class="txt">
                                    当社サイトからのリンク先について<br>
                                    当社サイトには、当社以外のWebサイトへのリンクが含まれている場合があります。<br>
                                    リンク先の選定に際しては充分注意を払っておりますが、当社は、当社以外のWebサイトにおける個人情報の保護およびコンテンツに関して責任を負うことはできません。
                                </p>
                                <p class="txt">
                                    法令、規範の遵守と見直し<br>
                                    当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                                </p>
                                <p class="txt">
                                    お問い合せ<br>
                                    当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。
                                </p>
                                <p class="txt">
                                    株式会社セカンド・ウェーブ<br>
                                    〒221-0835<br>
                                    神奈川県横浜市神奈川区鶴屋町三丁目29番地9<br>タクエー横浜西口第6ビル2F

                                </p>
                            </div>
                            <div><label class="boxCheck">
                                <input type="checkbox" name="personal_information" id="" value="1">&ensp;個人情報の取り扱いに同意する
                            </label>
                            </div>
                            <div>
                                <button type="submit" class="submitbtn">
                                    確認する
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- end companyprofile section -->
        <div class="container">
            <div class="row block">
            <h2>SNS</h2>
            <h4>2ndwave Instagram</h4>
            <div id="insta" class="insta"></div>
            <p class="SNSicon"><a href="https://www.instagram.com/2ndwave_info/"><img src="img/instagram.png" alt="instagram"></a></p>
            <p class="SNSicon"><a href="https://m.facebook.com/2ndwave.jp/"><img src="img/facebook.png" alt="facebook"></a></p>
        </div>
            <script src="js/magnific.min.js"></script>
            <script src="js/custom.js"></script>
    </main>
    <footer>
        copyright &copy; 2021 <a href="https://www.2ndwave.jp" target="_blank">2ndwave.,Inc</a> All Rights Reserved.
    </footer>
</html>
@endsection