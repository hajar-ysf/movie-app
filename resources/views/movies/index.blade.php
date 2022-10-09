@extends('layouts.main')

@section('content')
<div class="bg-stone-800">
    <div class="popular-movies mx-4 ">

            <h1 class="text-red-500 text-xl font-semibold pb-1 pt-7">Popular Movies</h1>

            <div class="swiper overflow-hidden md:overflow-hidden relative">
                <div class="swiper-wrapper">

                    @foreach ($popularMovies as $movie)
                        <div class="swiper-slide">
                            <x-movie-card :movie="$movie" />
                        </div>
                    @endforeach

                </div>

                <div class="swiper-button-prev" style="font-size: 5px"></div>
                <div class="swiper-button-next"></div>

            </div>

    </div>


    <div class="now-playing mx-4">

        <h1 class="text-red-500 text-2xl font-semibold pb-1 pt-7">Top Rated</h1>

        <div class="swiper overflow-hidden md:overflow-hidden relative">
            <div class="swiper-wrapper">

                @foreach ($topRatedMovies as $top)
                        <div class="swiper-slide">
                            <x-movie-card :movie="$top" />
                        </div>
                @endforeach

            </div>

            <div class="swiper-button-prev" style="font-size: 5px"></div>
            <div class="swiper-button-next"></div>

        </div>

    </div>

    <div class="now-playing mx-4">

        <h1 class="text-red-500 text-xl font-semibold pb-1 pt-7">Now Playing</h1>

        <div class="swiper overflow-hidden md:overflow-hidden relative">
            <div class="swiper-wrapper">

                @foreach ($nowPlayingMovies as $now)
                        <div class="swiper-slide">
                            <x-movie-card :movie="$now" />
                        </div>
                @endforeach

            </div>

            <div class="swiper-button-prev" style="font-size: 5px"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="now-playing mx-4">

            <h1 class="text-red-500 text-xl font-semibold pb-1 pt-7">UpComing Movies</h1>

            <div class="swiper overflow-hidden md:overflow-hidden relative">
                <div class="swiper-wrapper">

                    @foreach ($upComingMovies as $coming)
                            <div class="swiper-slide">
                                <x-movie-card :movie="$coming" />

                            </div>
                    @endforeach

                </div>

                <div class="swiper-button-prev" style="font-size: 5px"></div>
                <div class="swiper-button-next"></div>

            </div>

    </div>
    </div>
@endsection

@section('scripts')
    <script>


        const swiper = new Swiper('.swiper', {
            // Default parameters
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 8
                },
                420: {
                    slidesPerView: 3,
                    spaceBetween: 8
                },
                540: {
                    slidesPerView: 4,
                    spaceBetween: 8
                },
                740: {
                    slidesPerView: 5,
                    spaceBetween: 8
                },

                1200: {
                    slidesPerView: 6,
                    spaceBetween: 10
                },
                1220: {
                    slidesPerView: 8,
                    spaceBetween: 8
                }

            }
        })
    </script>

    <script>
        /* var swiper = new Swiper('.swiper', {
                slidesPerView: 5,
                spaceBetween: 16,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });*/
    </script>
@endsection
