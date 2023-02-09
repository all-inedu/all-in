@extends('layout.user.main')

@section('content')
    {{-- Header Section --}}
    <section class="py-24 bg-cover bg-center">
        <div class="main-container">
            <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-5">
                <div class="w-full rounded-lg shadow-lg overflow-hidden md:col-span-2 xl:row-span-2">
                    <img src="{{ asset('uploaded_files/mentor/' . $mentor->mentor_picture) }}" alt="{{ $mentor->mentor_alt }}"
                        class="w-full bg-cover bg-center">
                </div>
                <div class="md:col-span-5 md:-order-1 xl:col-span-3 xl:order-none xl:row-span-1 xl:self-end">
                    <h1 class="font-secondary font-bold text-4xl text-primary text-center md:text-6xl xl:text-start">
                        Get to know {{ $mentor->mentor_firstname }}
                    </h1>
                </div>
                <div class="w-full flex flex-col md:col-span-3 xl:row-span-1 xl:self-start">
                    <div class="mb-6 w-full font-inter font-medium text-base text-primary text-justify">
                        {!! $mentor->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recent Video Section --}}
    <section class="py-10">
        <div class="main-container flex flex-col">
            <h2 class="mb-8 font-secondary font-extrabold text-4xl text-primary text-left">
                Recent Videos?
            </h2>
            @if (count($mentor_videos) > 1)
                <div class="splide" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-4xl"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-4xl"></i>
                        </button>
                    </div>
                    <div class="splide__track py-8">
                        <ul class="splide__list">
                            @foreach ($mentor_videos as $video)
                                <li class="splide__slide">
                                    <div class="splide__slide__container w-full h-full px-4">
                                        @php
                                            preg_match('/watch\?v=([^&]+)/', $video->video_embed, $matches);
                                            $video_id = $matches[1];
                                        @endphp
                                        <iframe width="100%" height="315"
                                            src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            @elseif(count($mentor_videos) == 1)
                <div class="w-full h-full">
                    @php
                        preg_match('/watch\?v=([^&]+)/', $mentor_videos[0]->video_embed, $matches);
                        $video_id = $matches[1];
                    @endphp
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $video_id }}"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            @else
                <h2 class="mb-8 font-secondary font-extrabold text-base text-primary text-center">
                    Video Not Found!
                </h2>
            @endif
        </div>
    </section>

    {{-- Bottom Section --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="mb-4 font-secondary font-extrabold text-4xl text-primary text-center">
                    Schedule your Consultation with Devi!
                </h2>
                <p class="max-w-2xl mb-8 font-secondary font-medium text-base text-primary text-center">Let’s find out how
                    to get into
                    your
                    dream university and future career path through the first consultation with our top-notch mentors and
                    your profile assessment based on ALL-in’s Four Pillars of University Application.</p>
                <a href="#">
                    <span class="px-10 py-2 font-inter font-medium text-base text-white rounded-md bg-yellow">Start Your
                        Consultation</span>
                </a>
            </div>
        </div>
    </section>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: isMediumDevice ? 1 : 2,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            pagination: isMediumDevice ? true : false,
        });

        splide.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[110%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '10px';
                item.button.style.height = '10px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection