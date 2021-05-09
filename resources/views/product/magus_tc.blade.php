@extends('layouts.app')

@section('title')
    @lang('title.MAGUS_home')
@stop

@section('content')
    <main class="top-nav-padding">

<!-------------------Submenu------------->
        <div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">


                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'magus12-2in1-laptop') }}">AVITA MAGUS 12.2" 二合一手提電腦</a></li>


                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'magus-spec') }}">@lang('site.productnav_spec')</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
            </ul>
        </div>
    </div>
</div>
<!--------------->

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/magus/banner.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/magus/banner_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/brand.png">--}}
                        </div>
                        <div class="an-scroll-wrap">
                        
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/sc2_img1.png">
                    <!--<img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">-->
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc2_img1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">二合一手提電腦</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">結合平板電腦輕巧便攜的特性與手提電腦的功能性，MAGUS 既是休閒娛樂工具也能是在辦公室的最佳拍檔。擁備12.2 吋1920x1200 IPS 觸控屏幕，提供賞心悅目的色彩與超闊可視角度。MAGUS 12.2”二合一手提電腦附有實體鍵盤保護蓋，只需打開MAGUS內置支架，即可變成一般筆記簿電腦使用，隨時隨地輕易處理文書工作。</span>
                       <p class="d-lg-block"><img src="/images/magus/feature.png"></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <section class="product-liber-performance ls-0"/>
            <div >
                <div class="hidden-xs-down"><img src="/images/magus/sc1_bg.png"></div>
                <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/magus/sc3_fimg2.png">
                        </div>
                <!--<div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/liber/sc3_fimg1.png">
                    <img class="bc-computer-image bc-computer-2" src="/images/liber/sc3_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc3_fimg3.png">
                    <img class="bc-computer-image bc-computer-4" src="/images/liber/sc3_fimg4.png">
                    <img class="bc-computer-image bc-computer-5" src="/images/liber/sc3_fimg5.png">
                    <img class="bc-computer-image bc-computer-6" src="/images/liber/sc3_fimg6.png">
                    <img class="bc-computer-image bc-computer-7" src="/images/liber/sc3_fimg7.png">
                    <img class="bc-computer-image bc-computer-8" src="/images/liber/sc3_fimg8.png">
                </div>-->
                <div class="container">
                    <div class="banner-info">

                        <div class="h2 banner-header mb-4 mb-sm-5">由內到外  發掘自我</div>
                        <div class="banner-para">
                            <span class="d-lg-block">MAGUS揉合簡約的線條設計與金屬感十足的外殼，共有四款個性十足的型格配色：Seashell Pink（海貝粉紅）、Steel Blue（鋼鎧藍）、Charcoal Grey（炭灰黑）以及Pastel Violet（夢幻紫）可供選擇，無論作為平板使用還是把 MAGUS 作為手提電腦使用，都能盡展 AVITA 時尚魅力。</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/sc7_fimg1.png">
                    <!--<img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">-->
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">日常工作玩樂一手掌握</div>

                        <div class="banner-para ls-0">
                            <p class="d-lg-block">MAGUS能運行多種 Windows 應用程式同時擁有長達八小時的電池續航力。全方位照顧用家需要，當然需要擁有完善的擴充性能，MAGUS 除了備有microSDXC 讀卡機並附送 64GB microSD卡，更擁有 3.5mm 耳機插孔、Mini HDMI 連接埠以及USB 3.0 介面，妥善照顧用家所需。</p>
                            <!--p class="d-lg-block"><img src="/images/magus/sideview.png"></p-->
                          <p class="d-lg-block"><img src="/images/magus/port_en.png"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等 trademarks 屬於美國及其他國家的Intel 公司所有。</li>
                    <li>產品規格可能會依國家地區而有所變動，我們誠摯的建議您與當地的經銷商或零售商確認目前販售產品的規格。</li>
                    <li>產品顏色可能會因拍照光線誤差或螢幕設定而與實際產品有所差異。</li>
                    <li>我們會盡力提供正確與完整的資料於網頁上，並保留更動、修正頁面資訊的權利，恕不另行通知。</li>
                    <li>重量會因組態及製造差異而有所不同。</li>
                    <li>電池使用時間因應產品型號、規格、應用程式、功能、使用情況、網絡連線情況及電源設定而異。電池的最高使用效能隨使用時間及情況而遞減</li>

                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-magus.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
