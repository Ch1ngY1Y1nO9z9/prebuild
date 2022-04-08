<section class="text-white body-font relative">
    <div class="absolute inset-0 bg-bottom bg-no-repeat" style="background-image:url('/img/contact_us.jpg')">
    </div>
    <div class="container px-5 py-32 mx-auto flex" id="ContactUs">
        <div
            class="w-full bg-black bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative shadow-md">
            <div class="flex flex-wrap w-full mb-10">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-white">Contact Us</h1>
                    <div class="h-1 w-20 bg-white rounded"></div>
                </div>
            </div>

            <form action="/contact_us" method="post">
                @csrf
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="flex-1">
                        <div class="relative mb-4">
                            <label for="companyName" class="leading-7 text-sm text-white">Company</label>
                            <input type="text" id="companyName" name="companyName" required
                                class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('companyName')
                                <span class="text-red-200" role="alert">
                                    <strong>{{ $message ?: '' }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="relative mb-4">
                            <label for="country" class="leading-7 text-sm text-white">Country</label>
                            <input type="text" id="country" name="country" required
                                class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="companyWebsite" class="leading-7 text-sm text-white">Website</label>
                            <input type="text" id="companyWebsite" name="companyWebsite" required
                                class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('companyWebsite')
                                <span class="text-red-200" role="alert">
                                    <strong>{{ $message ?: '' }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="relative mb-4">
                            <label for="business" class="leading-7 text-sm text-white">Business</label>
                            <input type="text" id="business" name="business" required
                                class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('business')
                                <span class="text-red-200" role="alert">
                                    <strong>{{ $message ?: '' }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="flex-1">
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-white">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                            @error('email')
                                <span class="text-red-200" role="alert">
                                    <strong>{{ $message ?: '' }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="relative mb-4">
                            <label for="message" class="leading-7 text-sm text-white">Message</label>
                            <textarea id="message" name="content"
                                class="w-full bg-black bg-opacity-25 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-white py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <button
                            class="text-white block w-full bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                            type="submit">Send</button>
                    </div>
                </div>



                <!-- {!! app('captcha')->render() !!} -->

            </form>
        </div>
    </div>
</section>
