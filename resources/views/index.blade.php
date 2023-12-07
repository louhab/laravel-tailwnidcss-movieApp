@extends('layouts.main')
@section('content')
@vite('resources/css/app.css')
        <div class="container mx-auto px-4 pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                    popular movies
                </h2>
                 <!-- start popular movies -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-24">
                    @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                    @endforeach
                </div>
                <!-- end popular movies -->
                <!-- start play now  -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-24 mt-4">
                    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                       play now
                    </h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-24">
                     @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                    @endforeach
                </div>
                <!--end play now  -->
            </div>
        </div>
@endsection


