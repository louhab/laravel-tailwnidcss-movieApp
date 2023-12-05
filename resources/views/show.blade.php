@extends('layouts.main')
@section('content')
@vite('resources/css/app.css')
    <!-- start info movies section-->
    <div class="movies-info boder-gray-800 border-b ">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="/img/parasite.jpg" alt="parasite" class="w-96" style="width: 24 rem ">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-400 text-sm mt-4">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6" viewBox="0 0 24 24">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                    </span>
                    <span class="ml-2" >85 %</span>
                    <span class="ml-2" >|</span>
                    <span class="ml-2" >Décembre 05 ,2023</span>
                    <span class="ml-2" >|</span>
                    <span class="ml-2" >Action , Thriller , Drama </span>
                </div>
                <p class="text-gray-300 mt-8">
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur
                         sint occaecat cupidatat non proident, sunt in culpa
                         qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Cast </h4>
                </div>
                <div class="flex mt-4">
                    <div>
                        <div>Bon Jhon-ho</div>
                        <div class="text-sm text-gray-400">
                            Screen Play , Director  , Story
                        </div>
                    </div>
                    <div class="ml-4">
                        <div>Han Jin-Won</div>
                        <div class="text-sm text-gray-400">
                            Screen Play
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end info movies section-->
@endsection
