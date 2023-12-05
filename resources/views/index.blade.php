@extends('layouts.main')
@section('content')
@vite('resources/css/app.css')
        <div class="container mx-auto px-4 pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                    popular movies
                </h2>
                <div class="grid grid-cols-5 gap-24">
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/parasite.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Parasite</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/joker.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Joker</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/sonic.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Sonic</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/joker.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Joker</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/frozen2.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300"> Frozen </div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/joker.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Joker</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/frozen2.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Fronzen</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/parasite.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Parasite</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/joker.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Joker</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/img/parasite.jpg" alt="parasite"
                         class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                        <div class="mt-2" class="text-lg mt-2 hover::text-gray-300">Parasite</div>

                        <div class="flex items-center text-gray-400 text-sm">
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
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action , Thriller , Comedy
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection


