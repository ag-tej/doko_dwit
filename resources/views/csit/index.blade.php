@extends('layouts.layout')
@section('content')
    @include('components.sidebar')
    <div class="mt-4 mb-16">
        <p class="text-center text-3xl text-gray-200 mb-8">Batch of 2011</p>
        <div class="grid place-items-center sm:grid-cols-2 md:grid-cols-3 gap-5 md:gap-8 xl:gap-6 2xl:gap-12">
            @for ($i = 0; $i < 8; $i++)
                <div
                    class="max-w-xs rounded overflow-hidden bg-[#18212f] border-2 border-[#242c34] hover:shadow hover:shadow-[#ef4444]/30 md:hover:-mt-2">
                    <img class="w-full aspect-3/2 object-cover" src="{{ asset('images/tej.jpg') }}"
                        alt="Sunset in the mountains">
                    <div class="flex items-center justify-between px-3">
                        <p class="text-xlfont-semibold text-gray-300 text-center p-2">Tej Agrawal</p>
                        <a href="https://www.linkedin.com" target="blank"><img src="{{ asset('icons/linkedin.svg') }}"
                                alt="link_to_linkedin" class="h-5 object-contain aspect-3/2"></a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
