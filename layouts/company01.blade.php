@extends('layouts.home')

@section('title', __('home.title.company01'))

@section('content')
<main class="site-content" role="main">

    <!--
    カテゴリータイトル
    ==================================== -->

    {{--<section id="category01" class="parallax">
        <div id="" class="category01">
        </div><!-- /category01 -->

        <div class="category-caption">
            <div class="caption-content">
                <h2 class="animated fadeInDown">{{ __('home.top.company_profile') }}</h2>
                @if (App::islocale('ja'))
                    <span class="animated fadeInDown">{{ __('home.heading.company_profile') }}</span>
                @endif
            </div>
        </div>
    </section>--}}

    <!--
    End カテゴリータイトルEnd
    ==================================== -->

    <!-- companyprofile section -->
    {{--<section id="companyprofile" >
        <div class="container">
            <div class="sec-title col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
                <h2>{{ __('home.heading.company_outline') }} </h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
                <ul class="nav nav-tabs">
                    <li class="active">{{ link_to('/company01', __('home.heading.company_outline')) }}</li>
                     <li>{{ link_to('/company02', __('home.heading.history')) }}</li> 
                    <li>{{ link_to('/company03', __('home.heading.access')) }}</li>
                    <li>{{ link_to('/company04', __('home.heading.management_philosoph')) }}</li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
                @if (App::islocale('ja'))--}}
                    {{-- 言語選択：日本語の場合 --}}
                    {{--<div class="container_inner">
                        <div class="company_inner">
                            <table>
                                <tr><th>{{ __('home.heading.company_name') }}</th><td>  {{ __('home.item.company_name') }}</td></tr>
                                <tr><th>{{ __('home.heading.ceo') }}</th><td>   {{ __('home.item.ceo') }}</td></tr>
                                <tr><th>{{ __('home.heading.establishment') }}</th><td>{{ __('home.item.establishment') }}</td></tr>
                                <tr><th>{{ __('home.heading.capital_stock') }}</th><td>{{ __('home.item.capital_stock') }}</td></tr>
                                <tr><th>{{ __('home.heading.head_office') }}</th><td>{{ __('home.item.head_office.address') }}<br>
                                    {{ __('home.item.head_office.tel') }}<br>{{ __('home.item.head_office.fax') }}<br><img src="../img/anaori_carbon_malaysia_ASR_JAB_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.office_tokyo') }}  </th><td>   {{ __('home.item.office_tokyo.address') }}<br>
                                    {{ __('home.item.office_tokyo.tel') }}<br>{{ __('home.item.office_tokyo.fax') }}</td></tr>
                                <tr><th>{{ __('home.heading.office_sendai') }}  </th><td>   {{ __('home.item.office_sendai.address') }}<br>
                                    {{ __('home.item.office_sendai.tel') }}<br></td></tr>
                                <tr><th>{{ __('home.heading.factory_takatsuki') }}</th><td>{{ __('home.item.factory_takatsuki.address') }}<br>
                                    {{ __('home.item.factory_takatsuki.tel') }}<br>{{ __('home.item.factory_takatsuki.fax') }}<br><img src="../img/anaori_carbon_malaysia_ASR_JAB_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.factory_mie') }}  </th><td>{{ __('home.item.factory_mie.address') }}<br>
                                    {{ __('home.item.factory_mie.tel') }}<br>{{ __('home.item.factory_mie.fax') }}<br><img src="../img/anaori_carbon_malaysia_ASR_JAB_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.annex_torishima') }}  </th><td>{{ __('home.item.annex_torishima.address') }}<br>
                                    {{ __('home.item.annex_torishima.tel') }}<br>{{ __('home.item.annex_torishima.fax') }}</td></tr>
                                <tr><th>{{ __('home.heading.bussiness_line') }}  </th><td>{{ __('home.item.bussiness_line') }}</td></tr>
                                <tr><th>{{ __('home.heading.welfare') }}      </th><td>{!! __('home.item.welfare') !!}</td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="container_inner">
                        <div class="company_inner">
                            <table><tr><th colspan="2"><p class="tac">{{ __('home.heading.overseas_bases') }}</p></th></tr>
                                <tr><th>{{ __('home.heading.malaysia_office') }}  </th><td>{{ __('home.item.factory_malaysia.address') }}<br>
                                    {{ __('home.item.factory_malaysia.tel') }}<br>{{ __('home.item.factory_malaysia.fax') }}<br><img src="../img/anaori_carbon_malaysia_SC_UKAS_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.malaysia_office_kualalumpur') }} </th><td>{!! __('home.item.factory_malaysia_kualalumpur.address') !!}<br>
                                    {{ __('home.item.factory_malaysia_kualalumpur.tel') }}<br>{{ __('home.item.factory_malaysia_kualalumpur.fax') }}</td></tr>
                                <tr><th>{{ __('home.heading.industrial_trading_malaysia') }}  </th><td>{{ __('home.item.industrial_trading_malaysia.address') }}<br>
                                    {{ __('home.item.industrial_trading_malaysia.tel1') }}<br>{{ __('home.item.industrial_trading_malaysia.fax1') }}<br>
                                    {{ __('home.item.industrial_trading_malaysia.tel2') }}<br>{{ __('home.item.industrial_trading_malaysia.fax2') }}</td></tr>
                            </table>
                        </div>
                    </div>
                @else --}}
                    {{-- 言語選択：英語の場合 --}}
                    {{-- <div class="container_inner">
                        <div class="company_inner">
                            <table>
                                <tr><th>{{ __('home.heading.company_name') }}</th><td>  {{ __('home.item.company_name') }}</td></tr>
                                <tr><th>{{ __('home.heading.ceo') }}</th><td>   {{ __('home.item.ceo') }}</td></tr>
                                <tr><th>{{ __('home.heading.establishment') }}</th><td>{{ __('home.item.establishment') }}</td></tr>
                                <tr><th>{{ __('home.heading.capital_stock') }}</th><td>{{ __('home.item.capital_stock') }}</td></tr>
                                <tr><th>{{ __('home.heading.head_office') }}</th><td>{{ __('home.item.head_office.address') }}<br>
                                    {{ __('home.item.head_office.tel') }}<br>{{ __('home.item.head_office.fax') }}<br><img src="../img/anaori_carbon_malaysia_ASR_JAB_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.office_tokyo') }}  </th><td>   {{ __('home.item.office_tokyo.address') }}<br>
                                    {{ __('home.item.office_tokyo.tel') }}<br>{{ __('home.item.office_tokyo.fax') }}</td></tr>
                                <tr><th>{{ __('home.heading.office_sendai') }}  </th><td>   {{ __('home.item.office_sendai.address') }}<br>
                                    {{ __('home.item.office_sendai.tel') }}<br></td></tr>
                                <tr><th>{{ __('home.heading.factory_takatsuki') }}</th><td>{{ __('home.item.factory_takatsuki.address') }}<br>
                                    {{ __('home.item.factory_takatsuki.tel') }}<br>{{ __('home.item.factory_takatsuki.fax') }}<br><img src="../img/anaori_carbon_malaysia_ASR_JAB_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.factory_mie') }}  </th><td>{{ __('home.item.factory_mie.address') }}<br>
                                    {{ __('home.item.factory_mie.tel') }}<br>{{ __('home.item.factory_mie.fax') }}<br><img src="../img/anaori_carbon_malaysia_ASR_JAB_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.annex_torishima') }}  </th><td>{{ __('home.item.annex_torishima.address') }}<br>
                                    {{ __('home.item.annex_torishima.tel') }}<br>{{ __('home.item.annex_torishima.fax') }}</td></tr>
                                <tr><th>{{ __('home.heading.factory_malaysia') }}  </th><td>{{ __('home.item.factory_malaysia.address') }}<br>
                                    {{ __('home.item.factory_malaysia.tel') }}<br>{{ __('home.item.factory_malaysia.fax') }}<br><img src="../img/anaori_carbon_malaysia_SC_UKAS_9001_s.jpg"></td></tr>
                                <tr><th>{{ __('home.heading.malaysia_office_kualalumpur') }} </th><td>{{ __('home.item.factory_malaysia_kualalumpur.address') }}<br>
                                    {{ __('home.item.factory_malaysia_kualalumpur.tel') }}<br>{{ __('home.item.factory_malaysia_kualalumpur.fax') }}</td></tr>
                                <tr><th>{{ __('home.heading.industrial_trading_malaysia') }}  </th><td>{{ __('home.item.industrial_trading_malaysia.address') }}<br>
                                    {{ __('home.item.industrial_trading_malaysia.tel1') }}<br>{{ __('home.item.industrial_trading_malaysia.fax1') }}<br>
                                    {{ __('home.item.industrial_trading_malaysia.tel2') }}<br>{{ __('home.item.industrial_trading_malaysia.fax2') }}</td></tr>
                                <tr><th>{{ __('home.heading.bussiness_line') }}  </th><td>{{ __('home.item.bussiness_line') }}</td></tr>
                                <tr><th>{{ __('home.heading.welfare') }}      </th><td>{!! __('home.item.welfare') !!}</td></tr>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>--}}
    {{--<section id="company-slider">
        <div id="slider" class="sl-slider-wrapper">
            <div class="sl-slider">
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="bg-img bg-img-4"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h3 class="animated fadeInDown">{{ __('home.item.company_name') }} {{ __('home.heading.factory_malaysia') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="bg-img bg-img-5"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h3>{{ __('home.item.company_name') }} {{ __('home.heading.head_office_takatsuki') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="bg-img bg-img-6"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h3>{{ __('home.item.company_name') }} {{ __('home.heading.factory_takatsuki') }}</h3>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!-- /sl-slider -->
            {{--<nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                <a href="javascript:;" class="sl-prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a href="javascript:;" class="sl-next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>
            <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>
        </div><!-- /slider-wrapper -->
    </section>--}}
    <!-- end companyprofile section -->
    <section class="companyprofileslider">
        <div class="container">
        </div>
    </section><!-- end companyprofileslider section -->
</main>
@endsection