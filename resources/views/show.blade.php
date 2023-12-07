@extends('layouts.main')
@section('content')
@vite('resources/css/app.css')
    <!-- start info movies section-->
    <div class="movies-info boder-gray-800 border-b ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="parasite" class="w-96" style="width: 24 rem ">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-4">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6" viewBox="0 0 24 24">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                    </span>
                    <span class="ml-2" >{{$movie['vote_average'] * 10 }} %<</span>
                    <span class="ml-2" >|</span>
                    <span class="ml-2" >{{\Carbon\Carbon::parse($movie['release_date'])->format('M-D-Y')}}</span>
                    <span class="ml-2" >|</span>
                    <span class="ml-2" >
                     @foreach($movie['genres'] as $genre)
                        {{$genre['name']}}
                        <!-- this for making , for-->
                        @if(!$loop->last),@endif
                    @endforeach
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                       {{$movie['overview']}}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Cast </h4>
                </div>
                <div class="flex mt-4">
                    <div>
                        @foreach($movie['credits']['crew'] as $crew)
                        @if($loop->index < 2)
                            <div>{{$crew['name']}}</div>
                            <div class="text-sm text-gray-400">
                                  {{$crew['job']}}
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @if(count($movie['videos']['results']) > 0)
                <div class="mt-12">
                    <a
                        target="_blank"
                        href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key'] }}"
                        class="flex inline-flex items-center bg-orange-500 text-gray-900  rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
        </div>
    <div class="mx-auto max-w-screen-xl mt-4 mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-24 ml-4">

                @foreach($movie['credits']['cast'] as $cast)
                @if($loop->index < 5)
                <div class="mt-8">
                    <a href="#">
                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}"
                     alt="parasite"
                      class="w-96"
                      style="width: 24 rem ">

                    </a>
                    <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">{{$cast['name']}}}}</div>
                    <div class="flex items-center text-gray-400 text-sm">
                        <span class="ml-2" >{{$cast['character']}}</span>
                    </div>
                </div>
                @endif
                @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800 mt-4 mb-4">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images : </h2>
        </div>
        <div class="mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ml-4">
                @foreach($movie['images']['backdrops'] as $image)
                <div class="mt-8">
                    <a href="#">
                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}"
                     alt="parasite"
                      class="w-96"
                      style="width: 24 rem ">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    <!-- end info movies section-->
@endsection
