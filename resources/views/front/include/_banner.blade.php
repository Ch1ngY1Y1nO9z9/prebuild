<section>
    <div class="swiper-container bannerSwiper">
        <div class="swiper-wrapper">
            @foreach ($indexData['banners'] as $banner)
                <div class="swiper-slide">
                    @if ($banner->links)
                        <a href="{{ $banner->links }}" target="_blank">
                            <img src="{{ $banner->img }}" alt="{{ $banner->alt }}">
                        </a>
                    @else
                        <img src="{{ $banner->img }}" alt="{{ $banner->alt }}">
                    @endif
                </div>
            @endforeach
        </div>
        <div
            class="swiper-button-next right-5 bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div
            class="swiper-button-prev left-10 bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
