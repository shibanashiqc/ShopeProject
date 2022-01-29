<div class="min-h-screen">
  <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
  <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
      <div class="flex flex-row items-center justify-between p-4">
        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Shop</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Home</a>
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Cart</a>
        @if (Route::has('login'))
        @auth
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('/dashboard') }}">Dashboard</a>

        @else
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/login">Login</a>
        @if (Route::has('register'))
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/register">Register</a>
        @endif
        @endauth
        @endif

      </nav>
    </div>
  </div>
</div>


<div tabindex="0" class="focus:outline-none">
    <!-- Remove py-8 -->
    <center> <p  class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"> <b>{{  $category_name->name  }}</b></p> </center>
    <div class="mx-auto container py-8">
        <div class="flex flex-wrap items-center lg:justify-between justify-center">



@foreach ($products as $product)
            {{-- @foreach ($categorys->products as $products) --}}
            <!-- Card 1 -->

            {{-- {{ dd($product->image) }} --}}
            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                <div>
                    <img alt="{{ $product->name }}" src="{{ asset('images') }}/{{ $product->image }}" tabindex="0" class="focus:outline-none w-full h-44" />
                </div>
                <div class="bg-white">
                    <div class="flex items-center justify-between px-4 pt-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>

                                @if($product->featured == 1)
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">
                                Featured
                            </p>
                        </div>
                            @endif
                    </div>
                    <div class="p-4">
                        <div class="flex items-center">
                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ $product->name }}</h2>

                        </div>
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{ $product->description }}</p>
                        <div class="flex mt-4">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Category Name:</p>
                            </div>
                            <div class="pl-2">
                                <a href="/category/{{  $category_name->name }}" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">{{ $category_name->name }}</a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-4">
                            <button type="button" class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">

                                <span class="pl-2 mx-1">$ {{ $product->price }} Buy now</span>
                             </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @endforeach --}}
            @endforeach
