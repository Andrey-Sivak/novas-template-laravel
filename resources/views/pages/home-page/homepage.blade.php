@extends('layouts.main')

@section('title', 'Home')

@section('page-content')
    <!-- Slider Revolution Section -->
    @include('pages.home-page.home-slider')

    <!-- Items Section -->
    @include('pages.home-page.home-product-items')

    <!-- Banner Section -->
    @include('pages.home-page.home-banner')

    <!-- List Section -->
    @include('pages.home-page.home-categories-list')
@endsection
