@extends('layouts.frontend.master')
@section('title','Əsas Səhifə')
@section('content')
    @include('frontend.includes.mobil')
    @include('frontend.includes.slider')

    @include('frontend.includes.banner')
    @include('frontend.includes.trainer_product')
    @include('frontend.includes.discount')
    @include('frontend.includes.packet_product')
@endsection
