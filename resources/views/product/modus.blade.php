@extends('layouts.app')

@section('title')
    @lang('title.MODUS_home')
@stop


@section('content')

<main class="top-nav-padding">
@include('partials.rolling-cta')

	<section class="">

        <img src="{{ asset('/images/modus/modus.jpg') }}" class="w-100 ">

    </section>

</main>

@stop
