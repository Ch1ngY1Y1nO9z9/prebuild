<section class="body-font" id="AboutUs">
    <div class="container px-5 md:py-24 py-10 mx-auto flex flex-wrap">
        <div class="flex flex-wrap w-full">
            <div class="lg:w-1/3 md:w-1/2 object-cover object-center rounded-lg">
                <div class="flex flex-wrap w-full mb-10">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-main">About Us</h1>
                        <div class="h-1 w-20 bg-main rounded"></div>
                    </div>
                </div>
                <img src="{{$indexData['about']->image}}" alt="About Us">
            </div>
            <div class="lg:w-2/3 md:w-1/2 md:pl-10 md:py-6 font-bold text-black leading-loose md:pt-0 pt-10 whitespace-pre-line">{{$indexData['about']->content_ch}}</div>
        </div>
    </div>
</section>
