<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{URL::asset('/image/favicon.ico')}}">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
        <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-800 ">
           

            <!-- Page Content -->
            <main>
                <nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5 dark:bg-gray-900">
                    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                        <a href="https://flowbite.com" class="flex items-center">
                            <img src="{{URL::asset('/image/favicon-32x32.png')}}" class="mr-3 h-6 sm:h-9" />
                            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Minimo</span>
                            <div class="flex items-center md:order-2">
                           
                        </a>
                        
                        <div class="pl-8 ml-4 mr-3">
                            <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                                x-on:click="darkMode = !darkMode"
                                class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                role="switch" aria-checked="false">
                                <span class="sr-only">Dark mode toggle</span>
                                <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                                    class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                                    <span
                                        x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                        class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                        aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                        </svg>
                                    </span>
                                    <span
                                        x-bind:class="darkMode ?  'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                        class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                        aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                        


                            @if (Route::has('login'))
                
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                        <a href="{{ url('/dashboard') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Dashboard</a>
                        
                    @else
                        {{-- <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
                        <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>

                        @if (Route::has('register'))
                            {{-- <a href="" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                            <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
                        @endif
                    @endauth
                
            @endif

                            {{-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
                             --}}
                        </div>
                    </div>
                </nav>


                <header class="bg-white shadow dark:bg-gray-700">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
                    <div class="dark:text-white">
                        <h2 class="font-semibold text-xl leading-tight">
                            {{ __('Welcome') }}
                        </h2>
                    </div>
                    </div>
                </header>

                


                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg  dark:bg-gray-700">
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200  dark:bg-gray-500 dark:border-gray-600">
                                
                                <div class="p-6 sm:px-20">
                                <div>
                                    <img src="{{URL::asset('/image/favicon-32x32.png')}}">
                                </div>
                            
                                <div class="mt-8 text-2xl dark:text-white">
                                    Welcome to our application!
                                </div>
                            
                                <div class="mt-6 text-gray-500 dark:text-white"">
                                    Our application provides a beautiful, robust starting point for your application. Minimo is designed
                                    to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                                    you should love expressing your creativity through programming, so we have spent time carefully crafting the Minimo
                                    ecosystem to be a breath of fresh air. We hope you love it.
                                </div>
                            </div>



                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
           

        @stack('modals')

        @livewireScripts
        
    </body>
</html>


