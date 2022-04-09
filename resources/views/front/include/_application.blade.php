        <!-- APPLICATIONS -->
        <section class="text-gray-600 body-font bg-main" id="Classification">
            <div class="container px-5 pt-20 pb-20 mx-auto text-white">
                <div class="flex flex-wrap w-full mb-10">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2">APPLICATIONS</h1>
                        <div class="h-1 w-20 bg-white rounded"></div>
                    </div>
                </div>
                <div class="flex flex-wrap -m-2">

                    @foreach($company_info['applications'] as $application)
                        <div class="p-2 lg:w-1/4 md:w-1/2 w-full text-white">
                            <div class="h-full text-center p-4 rounded-lg transform duration-300 hover:scale-105">
                                <img class="rounded-full object-cover object-center inline-block w-64 h-64"
                                    src="{{$application['image']}}" alt="{{$application['title']}}">
                                <div class="flex-grow">
                                    <h2 class="text-xl font-bold">{{$application['title']}}</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
