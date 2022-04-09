<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{ $seo->keyword }}">
    <meta name="description" content="{{ $seo->description }}" />
    <title>{{ $seo->title }}</title>

    {{-- 未正式開放時先放著禁止爬蟲和搜索引擎 --}}
    @if (!$company_info['is_active'])
        <meta name="robots" content="noindex" />
        <meta name="googlebot" content="noindex" />
    @endif

    {{-- facebook seo --}}
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo->title }}">
    <meta property="og:image" content="{{ $company_info['logo'] }}">
    <meta property="og:description" content="{{ $seo->description }}">
    <meta property="og:site_name" content="{{ $seo->title }}">
    {{-- 有多語系時再開 --}}
    {{-- <meta property="og:locale" content="en_US"> --}}

    {{-- twitter seo --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $seo->title }}">
    <meta name="twitter:description" content="{{ $seo->description }}">
    <meta name="twitter:image" content="{{ $company_info['logo'] }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-GXF49ZEXBX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GXF49ZEXBX');
    </script>

    @yield('recaptcha') --> --}}


    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.css" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background: url('{{ $company_info['bg_image'] }}');
        }

        .swiper-button-next:after,
        .swiper-container-rtl .swiper-button-prev:after,
        .swiper-button-prev:after,
        .swiper-container-rtl .swiper-button-next:after {
            content: "";
        }

        .bg-main {
            --tw-text-opacity: {{ $company_info['bg_opacity'] }};
            background-color: rgba({{ $company_info['bg_color'] }}, var(--tw-text-opacity)) !important;
        }

        .text-main {
            --tw-text-opacity: {{ $company_info['text_opacity'] }};
            color: rgba({{ $company_info['text_color'] }}, var(--tw-text-opacity)) !important;
        }

    </style>

    @yield('css')
</head>

<body>
    {{-- <header class="text-gray-600 body-font shadow bg-main fixed z-10 top-0 w-full">
        <div class="container mx-auto flex flex-wrap md:p-5 pt-2 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-0" href="/">
                <span class="ml-3 text-xl md:p-2 p-0 px-3">
                    <!-- <img class="h-10" src="/img/logo.png" alt="Logo"> -->
                    Logo
                </span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#AboutUs">
                    About Us
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#Products">
                    Products
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#News">
                    News
                </a>
                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="/#ContactUs">
                    Contact Us
                </a>
            </nav>

        </div>
    </header> --}}

    <header x-data="{ mobileMenuOpen: false }" class="text-gray-600 body-font shadow bg-main fixed z-10 top-0 w-full">
        <div class="container mx-auto flex flex-wrap p-5 justify-between items-center">
            <a class="flex items-center mb-0" href="/">
                <span class="ml-3 text-xl p-2 px-3 flex text-white items-end font-bold">
                    <img class="h-10" src="{{ $company_info['logo'] }}" alt="Logo">
                    {{ $company_info['name'] }}
                </span>
            </a>
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block md:hidden w-12 h-12 p-1"><svg
                    fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg></button>
            <nav class="md:ml-auto md:flex flex-col md:flex-row w-full md:w-auto items-center text-base justify-center"
                @click.away="mobileMenuOpen = false" :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}">
                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3"
                    href="/#AboutUs">
                    About Us
                </a>

                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3"
                    href="/#Products">
                    Products
                </a>

                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3"
                    href="/#News">
                    News
                </a>
                <a class="block items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3"
                    href="/#ContactUs">
                    Contact Us
                </a>
            </nav>
        </div>
    </header>


    <div style="padding-top:96px">
        @yield('content')
    </div>





    <footer class="text-white text-center sm:text-left body-font">
        <div class="bg-main">
            <div class="container mx-auto py-4 px-5">
                <p class="font-bold leading-loose text-lg whitespace-pre-line">{!! $company_info['name_en'] !!}</p>
                <p class="font-bold leading-loose text-lg whitespace-pre-line">Tel:{{ $company_info['tel'] }} |
                    Fax:{{ $company_info['fax'] }}</p>
                <p class="font-bold leading-loose text-sm whitespace-pre-line">Address: {!! $company_info['address'] !!}</p>
                <p class="font-bold leading-loose text-sm whitespace-pre-line">E-mail: {{ $company_info['email'] }}
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    @yield('js')
    {{-- JS麵包屑 SEO排行在第一時會出現在搜尋引擎下面的額外說明內容 對SEO有加分 --}}
    {{-- <script type="application/ld+json">
        {
            "@context": "http://www.schema.org",
            "@type": "ProfessionalService",
            //- 網站名子
            "name": "{{$company_info['name']}}",
            //- email
            "email": "mailto:{{$company_info['email']}}",
            //- 本站網址
            "url": "{{url()->current()}}",
            //- logo位置
            "image": "{{$company_info['logo']}}",
            //- 電話
            "telephone": "{{$company_info['tel']}}",
            //- logo位置
            "logo": "{{$company_info['logo']}}",
            //- 地址
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "克東路206號",
                "addressLocality": "和美鎮",
                "addressRegion": "彰化縣",
                "postalCode": "50842",
                "addressCountry": "中華民國 (台灣)"
            },
            //- 經緯度地點
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "24.114734091065507",
                "longitude": "120.53472367275536"
            },
            //- 據點地圖
            "hasMap": "https://www.google.com/maps/place/%E5%A3%93%E9%91%84%E5%BB%A0,%E9%8B%85%E5%90%88%E9%87%91%E5%A3%93%E9%91%84,%E5%AE%8F%E9%8E%A7%E4%BA%94%E9%87%91%E5%AF%A6%E6%A5%AD%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8/@24.1147199,120.5340867,19z/data=!4m5!3m4!1s0x34693ffa0dd6e5bf:0x47bb42e84e2ffdca!8m2!3d24.1146934!4d120.5347229",
            //- 營業時間
            "openingHours": "Mo 08:30-17:30",
            //- 聯絡方式
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer service",
                "telephone": "{{$company_info['tel']}}",
                "faxNumber": "{{$company_info['fax']}}"
            },
            //- 外部相關連結
            //"sameAs": [""]
        }
    </script> --}}

</body>

</html>
