@extends('layouts.layout')
@section('content')
    @include('components.navbar')
    {{-- particle background --}}
    <div id="particles-js" class="absolute top-0 left-0 w-full h-screen -z-10"></div>
    {{-- landing page content --}}
    <div>
        <div class="flex flex-col lg:flex-row justify-between items-center mt-8 xl:mt-16">
            {{-- doko robot section --}}
            <section class="lg:w-1/2">
                <div class="flex items-center">
                    {{-- doko robot --}}
                    <img src="{{ asset('/images/robot.png') }}" alt="i_am_doko"
                        class="-ml-10 drop-shadow-[0_0_8px_#ef4444] h-72 sm:h-80 animate-bounce">
                    <div class="text-gray-300 font-semibold">
                        <p class="text-4xl sm:text-6xl lg:text-4xl xl:text-6xl">Hi!</p>
                        <p class="text-3xl sm:text-5xl lg:text-3xl xl:text-5xl leading-relaxed">I am Doko,</p>
                        {{-- changing text animation --}}
                        <div class="text-sm sm:text-4xl lg:text-base xl:text-4xl leading-snug font-bold text-gray-300">
                            <div class="sm:h-[40px] lg:h-fit xl:h-[40px] overflow-hidden">
                                <span class="relative sm:animate-textChange lg:animate-none xl:animate-textChange">
                                    <span class="text-[#ff8515]">your DWIT companion.</span><br>
                                    <span class="text-[#4daf00]">a symbol of unity.</span><br>
                                    <span class="text-[#0091bf]">a basket of knowledge.</span><br>
                                    <span class="text-[#c03aff]">a portal of possibilities.</span><br>
                                </span>
                            </div>
                        </div>
                        <p class="mt-4 text-base">you'll see me throughout your educational voyage</p>
                    </div>
                </div>
            </section>
            {{-- cards section --}}
            <section class="grid grid-cols-2 my-8 lg:mt-0 grid-flow-row gap-5 sm:gap-8 lg:gap-12 xl:gap-16">
                {{-- use loop here when data is fetched --}}
                {{-- csit --}}
                <a href="{{ route('csit') }}">
                    <div class="card">
                        <div class="flex justify-between items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="svg_icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            <p class="text-white text-xl">12</p>
                        </div>
                        <p class="text-gray-300 text-center text-xl">CSIT BATCHES</p>
                    </div>
                </a>
                {{-- bca --}}
                <div class="card">
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="svg_icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                        <p class="text-white text-xl">5</p>
                    </div>
                    <p class="text-gray-300 text-center text-xl">BCA BATCHES</p>
                </div>
                {{-- clubs --}}
                <div class="card">
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="currentColor" class="svg_icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                        </svg>
                        <p class="text-white text-xl">10</p>
                    </div>
                    <p class="text-gray-300 text-center text-xl">DWIT CLUBS</p>
                </div>
                {{-- exam papers --}}
                <div class="card">
                    <div class="flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="currentColor" class="svg_icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <p class="text-white text-xl">80</p>
                    </div>
                    <p class="text-gray-300 text-center text-xl">EXAM PAPERS</p>
                </div>
            </section>
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="bg-[#18212f] border-2 border-[#242c34] rounded py-3 px-6">
                <p class="text-xl font-medium text-white mb-2">Illustrator Workshop | DWIT Social Service Club</p>
                <p class="text-gray-300 text-justify">In collaboration with DWIT News and Media Team, a successful
                    internal Adobe Illustrator Workshop took place on July 28, 2023, mentored by Mr. Gaurab Neupane,
                    President of DWIT News and Media Club.</p>
            </div>
        </div>
        {{-- current affairs section --}}
        <section class="my-8">
            <p class="text-[#ef4444] text-xl font-bold ml-6 mb-2">Current Affairs</p>
            {{-- scroll component --}}
            <div class="flex flex-col m-auto p-auto">
                <div class="flex overflow-x-scroll hide-scroll-bar">
                    <div class="flex flex-nowrap">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="inline-block px-3">
                                <div class="relative scroll_card bg-cover"
                                    style="background-image: url('{{ asset('images/current_affair.JPG') }}')">
                                    <div class="absolute bg-black/50 h-full w-full"></div>
                                    <div class="absolute text-gray-300 bottom-4 left-4 font-semibold">
                                        <p>Illustrator Workshop</p>
                                        <p> DWIT Social Service Club</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
