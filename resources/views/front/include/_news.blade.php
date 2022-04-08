<section class="text-white body-font mt-20 bg-cover" id="News"
style="background-image:url(/img/news_background.jpg)">
<div class="container px-5 py-20 mx-auto">
    <div class="flex flex-wrap w-full mb-10">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-white">News</h1>
            <div class="h-1 w-20 bg-white rounded"></div>
        </div>
    </div>
    <div class="-mx-4 -my-8">
        @foreach ($indexData['all_news'] as $news)
            <div class="py-8 px-4">
                <div class="h-full flex items-start">
                    <div class="flex-grow pl-6 flex md:flex-row flex-col items-center">
                        <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                            src="{{ $news->img }}" alt="News">
                        <a href="/news/{{ $news->id }}"
                            class="flex items-center md:flex-row flex-col hover:underline">
                            <p class="title-font text-2xl font-bold leading-relaxed mx-5">{{ $news->date }}
                            </p>
                            <h2 class="title-font text-2xl font-bold my-3">{{ $news->title_ch }}
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>
