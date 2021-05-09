@extends('layouts.app')

@section('title')
    @lang('title.service')
@stop
@section('css')
<style>
.shopsList {
    display: inline-table;
    width: 100%;
}
.shopsList .col-md-6:nth-child(2n+1) {
    clear: both;
}


.shopsList .col-md-6 {
    display: inline-grid;
    width: 50%;
    margin-bottom: 30px;
}

.shopsList .fa {
    font-size: 18px;
    weight:600;
}
</style>
@stop

@php

 $page = 'support';

@endphp


@section('content')

    <main>

        <section class="top-nav-padding support-search-section">
            <div class="support-search-wrap pb-sm-5">

                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-6 text-center">
                            <form method="POST" action="{{ route('support') }}" class="">
                                {{ csrf_field() }}
                                <div class="support-search-mob-img">
                                    <img class="hidden-lg-up " src="/images/background/support-min.png"/>
                                </div>

                                
                                <div class="h1 section-title my-4 ls-0 font-weight-light">@lang('site.support_title')</div>

                                <div class="row no-gutters my-4 align-content-center justify-content-center col-12 col-sm-8 col-lg-12 mx-auto">
                                    <div class="col-12 col-md-12 col-md-12 ml-0 ml-md-4">
                                        <div class="form-group mb-2">

                                            <select id="product_type_field" name="type" class="form-control custom-select mb-3">

                                            </select>

                                            <select id="product_series_field" name="series" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            <select id="marketing_number_field" name="marketing_number" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            <select id="product_number_field" name="product_number" class="form-control custom-select mb-3" style="display: none;">

                                            </select>

                                            {{--<select id="product_model_field" name="product_model" class="form-control custom-select mb-3" style="display: none;">--}}

                                            {{--</select>--}}

                                            {{--<p id="product_config_field"></p>--}}

                                            <button class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>

                                        </div>
                                    </div>

                                </div>
                            </form>
                              <br/>
                        <img src="/images/contact.png" style="width:320px;">
                            </div>
                    </div>
                </div>
                <div class="hidden-md-down panel-image">
                    <img src="/images/background/support-min.png"/>
                </div>
            </div>

            <div class="support-center-wrap py-5">

<div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension</div>
        <div class="text-center purchase_steps">
            <a href="https://www.avita.global/warranty-extension" target="_blank" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">See More</a> 
        </div>

     <br/>

<div class="container">
<div class="alert alert-dismissible alert-info">
Due to the global outbreak of the coronavirus (COVID-19), the service center will adjust the operation time or temporarily shut down for the time being. The adjustment will be subjected to local regulations and will be updated as soon as possible. We thank you for your patience and understanding.
</div>
  
   <div class="panel-heading">

   <div class="h2 text-center section-title mb-3 ls-0 font-weight-light pt-5">@lang('site.support_title_2')</div>
            <div class="panel-body">
         <div class="alert alert-success">
           <div class="col-md-12">
             
             <div>
                 <i class="fa fa-map icon"></i>
                 Customer Service Hotline
             </div>

              <div>
                 <i class="fa fa-clock-o icon"></i>
                 09:30AM-6:30PM (Mon to Sat, Excluding 3rd Saturday), close on Sunday and Public Holidays
             </div>

             <div>
                 <i class="fa fa-phone icon"></i>
                    1800-103-9635
             </div>

             <div>
                 <i class="fa fa-envelope icon"></i>
                  india_support@avita.com
             </div>
             
                </div>


            </div>
                    
               
            
                <div class="shopsList">
                 @foreach( $serviceCenters as $center )

                 <div class="col-md-6">
                 
                                <div>
                                    <i class="fa fa-map icon"></i>
                                    {{ $center->address }}
                                </div>

                                 <div>
                                    <i class="fa fa-clock-o icon"></i>
                                    {{ $center->opening_hour }}
                                </div>

                                <div>
                                    <i class="fa fa-phone icon"></i>
                                    {{ $center->phone }}
                                </div>
                                
                            </div>
                                  @endforeach

                </div>
               
                </div>
            </div>


        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('js')

   <!--
        <script>
        function initMap() {

            // Get all lat lng

            $('.google_map').each(function( index, item ) {

                var data = $(item).data();

                var location = new google.maps.LatLng( data.lat, data.lng );

                var map = new google.maps.Map(item, {
                    zoom: 18,
                    maxZoom: 18,
                    minZoom: 18,
                    disableDefaultUI: true,
                    center: location,
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                });

            });

        }
    </script>
    --->

    <script type="text/javascript" defer src="{{ asset('js/support.js') }}"></script>

    <script type="text/javascript" defer src="{{ asset('js/conversion.js') }}"></script>




@endsection
