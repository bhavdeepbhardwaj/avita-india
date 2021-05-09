<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

@php
    $country = 'in';
    $page = 'home' ;
    $xml_lang = ($lang == 'en') ? 'en' : 'zh-hk';
    $keyword = metaDescriptionByPage($page);
    $description = metaDescriptionByPage($page);
    
@endphp

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ $xml_lang }}" lang="{{ $xml_lang }}">
<head>


    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <meta name="keyword" content="{{ $keyword }}">
    <meta name="description" content="{{ $description }}"/>

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="{{ $description }}">

    <meta property="og:image" content="{{ asset('images/fb-pic.jpg') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!--- 
    Twitter Card 
    --->

    <meta name="twitter:card" content="{{ $keyword }}" />
    <meta name="twitter:site" content="@AvitaIndia" />
    <meta name="twitter:title" content="{{ $keyword }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="{{ asset('images/twitter-pic.jpg') }}" />
    
     <!--- 
    Twitter Card 
    --->

    <meta property="fb:app_id" content="{{ env('FACEBOOK_CLIENT_ID') }}" />

    <meta name="google-site-verification" content="R1kH74ny5l80vabgxtYCz8X_wkcj4wW5Z-wT31L4Qrg" />

    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">

    @yield('meta')
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>



    <title>@yield('title', 'AVITA') {{ $TITLE_SUFFIX or "" }}</title>

 

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> -->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWQCKIl7B4w27KcSW-tW4ja_Rk4SbcPnk&callback=initMap" type="text/javascript"></script>-->
   <!--- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
 

    <script>try{Typekit.load();}catch(e){}</script>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    @php
        $ga_code = googleAnalyticCode( $country );
    @endphp

    @if( $ga_code )
<!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154623067-1"></script>
    --->
    <script async type="text/javascript" src="{{ asset('js/ga.js') }}"></script>
    <script type="text/javascript" src="{{asset('/js/liber.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/support.js')}}"></script>

<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-133345635-5');

//  gtag('config', 'UA-128035503-6');
</script>
  @endif

<!-- Google Tag Manager -->
   <!---
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WLGC2FG');</script>

        -->
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
<!--
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLGC2FG"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

-->
    <!-- End Google Tag Manager (noscript) -->

    <!-- Global site tag (gtag.js) - Google Ads: 878181922 -->
  <!--
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-878181922"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-878181922');
    </script>
-->
    <!-- Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3386287304724739');
        fbq('track', 'PageView');
    </script>
   
    <!-- End Facebook Pixel -->

    <!-- Facebook Pixel (noscript) -->
    <noscript>
    
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3386287304724739&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel (noscript) -->

    @stack('css')
    @yield('css')
   
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script type="text/javascript">
window.addEventListener('load', 
  function() { 
    $('.preloader').fadeOut('slow');
  },false);

</script>

</head>

<body class="lang_{{$lang}} country_{{ $country }}">
   
@if( View::exists('partials.header_'.$country) )
    @include('partials.header_'.$country)
@else
    @include('partials.header')
@endif

<!-- Content -->
@yield('content')
<!-- ./Content -->


@if( View::exists('partials.footer_'.$country) )
    @include('partials.footer_'.$country)
@else
    @include('partials.footer')
@endif

<script async type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script async type="text/javascript" src="{{ asset('js/demo.js') }}"></script>

<!-- Facebook API -->
<!--
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '538642693536589',
            xfbml      : true,
            version    : 'v5.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
--->
<!-- Google Code for Remarketing Tag -->
<!--
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 830592061;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
-->

<!-- 
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script> -->
<!--
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/830592061/?guid=ON&amp;script=0"/>
    </div>
</noscript>
-->


<script type="text/javascript" src="{{ asset('js/conversion.js') }}"></script>
<script type="text/javascript" src="{{asset('/js/wpk4iql.js')}}"></script>




@stack('js')
@yield('js')

</body>
</html>
