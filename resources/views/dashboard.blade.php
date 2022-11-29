<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
      
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg  dark:bg-gray-700">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200  dark:bg-gray-500 dark:border-gray-600">
                            
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                <div>
                                    <img src="{{URL::asset('/image/favicon-32x32.png')}}">
                                </div>
                            
                                <div class="mt-8 text-2xl">
                                    Welcome to our application!
                                </div>
                            
                                <div class="mt-6 text-gray-500">
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
</x-app-layout>
