@extends('layouts.template')

@section('recaptcha')
    {{-- google recaptcha v3 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('css')
    <style>


    </style>
@endsection

@section('content')
    <main>
        @include('front.include._banner', $indexData['banners'])

        @if(isset($company_info['applications']) && count($company_info['applications']))
            @include('front.include._aboutus')
        @endif

        @if(isset($company_info['applications']) && count($company_info['applications']))
            @include('front.include._application')
        @endif

        @include('front.include._news', $indexData['all_news'])

        @include('front.include._products', $indexData['productTypes'])

        @include('front.include._form')

    </main>
@endsection

@section('js')
    <script>
        var swiper = new Swiper(".bannerSwiper", {
            autoplay: {
                delay: 5000,
            },
            spaceBetween: 30,
            navigation: {
                nextEl: ".bannerSwiper .swiper-button-next",
                prevEl: ".bannerSwiper .swiper-button-prev",
            },
            pagination: {
                el: ".bannerSwiper .swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".recommendSupplierSwiper", {
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 4,
            pagination: {
                el: ".recommendSupplierSwiper .swiper-pagination",
                clickable: true,
            },
        });

        var swiper = new Swiper(".productsVideosSwiper", {
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 3,
            pagination: {
                el: ".productsVideosSwiper .swiper-pagination",
                clickable: true,
            },
        });
    </script>

    @if (Session::has('message'))
        <script>
            alert('We will contact you in a few days, thank you for contacting us!')
        </script>
    @endif
@endsection
