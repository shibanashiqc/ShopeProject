<div tabindex="0" class="focus:outline-none">
    <!-- Remove py-8 -->
    <div class="mx-auto container py-8">
        <div class="flex flex-wrap items-center lg:justify-between justify-center">

            @foreach ($category as $categorys)
            @foreach ($categorys->products as $products)
            <!-- Card 1 -->
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="{{ $products->name }}" src="images/{{ $products->image }}" tabindex="0" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>

                                @if($products->featured == 1)
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">
                                Featured
                            </p>
                        </div>
                            @endif
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ $products->name }}</h2>

                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{ $products->description }}</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Category Name:</p>
                            </div>
                            <div class="pl-2">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">{{ $categorys->name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <button type="button" class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">

                                <span class="pl-2 mx-1">$ {{ $products->price }} Buy now</span>
                             </button>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            @endforeach

