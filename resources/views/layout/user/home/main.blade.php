@extends('layout.user.main')

@section('content')
    {{-- Banner Section --}}
    <div class="absolute w-full left-0">
        <section class="splide" aria-labelledby="carousel-heading">
            <div class="splide__track ">
                <ul class="splide__list ">
                    @foreach ($banners as $banner)
                        <li class="splide__slide relative">
                            <img class="object-center object-cover w-full h-full"
                                src="{{ asset('assets/img/home/' . $banner->banner_img) }}" alt="{{ $banner->banner_alt }}">
                            <div class="absolute-center -ml-1 bg-gradient-to-r w-full h-full from-primary/90">
                                <div class="main-container font-primary">
                                    <h2
                                        class="text-3xl font-semibold text-white mt-[45%] mb-6 sm:text-4xl sm:mt-[30%] lg:mt-20 lg:text-5xl xl:w-[30%]">
                                        {{ $banner->banner_title }}</h2>
                                    <p
                                        class="text-base font-medium text-white w-[80%] sm:text-lg lg:w-[50%] lg:text-xl xl:w-[30%]">
                                        {{ $banner->banner_description }}
                                    </p>
                                    <a href="{{ $banner->banner_link }}"
                                        class="inline-block mt-10 bg-secondary py-2.5 px-8 rounded-lg font-bold text-white text-base capitalize">{{ $banner->banner_button }}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>

    {{-- Spacer --}}
    <div class="lg:h-[74vh] xl:h-[68vh]"></div>

    <div class="">


        {{-- Wave  --}}
        <svg id="wave" class="invisible lg:visible" style="transform:rotate(0deg); transition: 0.3s"
            viewBox="0 0 1440 190" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                d="M0,171L48,142.5C96,114,192,57,288,57C384,57,480,114,576,136.2C672,158,768,146,864,123.5C960,101,1056,70,1152,47.5C1248,25,1344,13,1440,19C1536,25,1632,51,1728,60.2C1824,70,1920,63,2016,53.8C2112,44,2208,32,2304,34.8C2400,38,2496,57,2592,63.3C2688,70,2784,63,2880,69.7C2976,76,3072,95,3168,85.5C3264,76,3360,38,3456,38C3552,38,3648,76,3744,98.2C3840,120,3936,127,4032,114C4128,101,4224,70,4320,60.2C4416,51,4512,63,4608,60.2C4704,57,4800,38,4896,41.2C4992,44,5088,70,5184,88.7C5280,108,5376,120,5472,117.2C5568,114,5664,95,5760,98.2C5856,101,5952,127,6048,129.8C6144,133,6240,114,6336,117.2C6432,120,6528,146,6624,148.8C6720,152,6816,133,6864,123.5L6912,114L6912,190L6864,190C6816,190,6720,190,6624,190C6528,190,6432,190,6336,190C6240,190,6144,190,6048,190C5952,190,5856,190,5760,190C5664,190,5568,190,5472,190C5376,190,5280,190,5184,190C5088,190,4992,190,4896,190C4800,190,4704,190,4608,190C4512,190,4416,190,4320,190C4224,190,4128,190,4032,190C3936,190,3840,190,3744,190C3648,190,3552,190,3456,190C3360,190,3264,190,3168,190C3072,190,2976,190,2880,190C2784,190,2688,190,2592,190C2496,190,2400,190,2304,190C2208,190,2112,190,2016,190C1920,190,1824,190,1728,190C1632,190,1536,190,1440,190C1344,190,1248,190,1152,190C1056,190,960,190,864,190C768,190,672,190,576,190C480,190,384,190,288,190C192,190,96,190,48,190L0,190Z">
            </path>
        </svg>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                direction: 'ttb',
                height: '90vh',
                wheel: false,
                isNavigation: false,
                arrows: false,
            });

            splide.mount();
        });
    </script>
@endsection
