<section class="body-font" id="Products">
    <div class="container px-5 md:py-24 py-10 mx-auto flex flex-wrap">
        <div class="flex flex-wrap w-full mb-10">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-main">Products</h1>
                <div class="h-1 w-20 bg-main rounded"></div>
            </div>
        </div>
        <div class="flex flex-wrap">
            @foreach ($indexData['productTypes'] as $types)
                <div class="p-4 lg:w-1/4 md:w-1/2 w-full">
                    <a class="py-3 text-black text-center block transform duration-300 hover:scale-105 shadow"
                        href="/Products/{{ $types->id }}">
                        <img class="rounded-full object-cover object-center inline-block w-56 h-56"
                            src="{{ $types->img ?? '/img/bg.png' }}" alt="{{ $types->type_name_en }}">
                        <div class="text-lg font-bold pt-3">{{ $types->type_name_en }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
