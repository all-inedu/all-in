@extends('layout.user.main')

@section('content')
    {{-- ================================== Top Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <h2 class="font-primary font-bold text-4xl text-[#6696E2] text-center">
                {{ __('pages/resources/testimonial.title') }}
            </h2>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col gap-y-28">
                {{-- Admission Mentoring --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img data-original="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-primary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Admission <br> Mentoring</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                                    </button>
                                </div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($admission_mentoring as $testi)
                                            <li class="splide__slide w-full">
                                                <div class="splide__slide__container h-full">
                                                    <div
                                                        class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                                        <div class="flex flex-col">
                                                            <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                                class="w-7 mb-3 h-auto">
                                                            <div class="font-primary text-sm text-white text-justify">
                                                                {!! $testi->testi_desc !!}
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 flex flex-col">
                                                            <div class="font-primary font-semibold text-base text-yellow">
                                                                {{ $testi->testi_name }}
                                                            </div>
                                                            <div class="font-primary text-sm text-white">
                                                                {!! $testi->testi_subtitle !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Experiential Learning --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img data-original="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-primary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Experiential <br> Learning</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                                    </button>
                                </div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($experiential_learning as $testi)
                                            <li class="splide__slide w-full">
                                                <div class="splide__slide__container h-full">
                                                    <div
                                                        class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                                        <div class="flex flex-col">
                                                            <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                                class="w-7 mb-3 h-auto">
                                                            <div class="font-primary text-sm text-white text-justify">
                                                                {!! $testi->testi_desc !!}
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-between items-center mt-12">
                                                            <div class="flex flex-col">
                                                                <h5
                                                                    class="font-primary font-semibold text-base text-yellow">
                                                                    {{ $testi->testi_name }}
                                                                </h5>
                                                                <span class="font-primary text-sm text-white">
                                                                    {!! $testi->testi_subtitle !!}
                                                                </span>
                                                            </div>
                                                            <div class="w-24 h-24 rounded-full">
                                                                @if ($testi->testi_thumbnail)
                                                                    <img data-original="{{ asset('uploaded_files/testimonial/' . $testi->created_at->format('Y') . '/' . $testi->created_at->format('m') . '/' . $testi->testi_thumbnail) }}"
                                                                        alt="{{ $testi->testi_thumbnail }}"
                                                                        class="w-full h-full object-contain object-center">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Academic Preparation --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img data-original="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-primary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Academic <br> Preparation</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows">
                                    <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                                    </button>
                                    <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                                    </button>
                                </div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($academic_preparation as $testi)
                                            <li class="splide__slide w-full">
                                                <div class="splide__slide__container h-full">
                                                    <div
                                                        class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                                        <div class="flex flex-col">
                                                            <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                                class="w-7 mb-3 h-auto">
                                                            <div class="font-primary text-sm text-white text-justify">
                                                                {!! $testi->testi_desc !!}
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 flex flex-col">
                                                            <div class="font-primary font-semibold text-base text-yellow">
                                                                {{ $testi->testi_name }}
                                                            </div>
                                                            <div class="font-primary text-sm text-white">
                                                                {!! $testi->testi_subtitle !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-primary font-extrabold text-primary text-center text-3xl mb-4 md:w-1/2">
                {{ __('pages/resources/testimonial.bottom_title') }}
            </h2>
            <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}" class="my-btn">
                {{ __('pages/resources/testimonial.bottom_btn') }}
            </a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches

        var splides = document.querySelectorAll('.splide');

        for (var i = 0; i < splides.length; i++) {
            new Splide(splides[i], {
                type: 'slide',
                perPage: isLargeDevice ? 1 : 2,
                focus: 0,
                pagination: false,
                autoplay: true,
                lazyload: true,
                interval: 5000,
            }).mount();
        }
    </script>
@endsection
