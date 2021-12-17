<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-6 sm:px-10 bg-white border-b border-gray-200">
                    <div>
                        <img src="../../img/logo-growp.png" alt="">
                    </div>
                
                    <div class="mt-8 text-2xl">
                        Bem vindo ao WireChat
                    </div>
                
                    <div class="mt-6 text-gray-500">
                        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                        ecosystem to be a breath of fresh air. We hope you love it.
                    </div>
                </div>

                <div class="sm:px-10 bg-white border-b border-gray-200">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex" style="min-height: 400px; max-height: 400px;">
                    
                                <!-- list users -->
                                <div class="w-3/12 bg-gray-200 bg-opacity-25 border-r border-gray-200 overflow-y-scroll">
                                    <ul>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Robson V. Leite
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                        <li class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                            <p class="flex items-center">
                                                Kaue Francisquini
                                                <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                    
                                <!-- box message -->
                                <div class="w-9/12 flex flex-col justify-between">
                    
                                    <!-- message -->
                                    <div class="w-full p-6 flex flex-col overflow-y-scroll">
                                        <div class="w-full mb-3 text-right">
                                            <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                                Olá!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3">
                                            <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                                Oi!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3 text-right">
                                            <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                                Olá!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3">
                                            <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                                Oi!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3 text-right">
                                            <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                                Olá!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3">
                                            <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                                Oi!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3 text-right">
                                            <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                                Olá!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3">
                                            <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                                Oi!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3 text-right">
                                            <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                                Olá!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                    
                                        <div class="w-full mb-3">
                                            <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                                Oi!
                                            </p>
                                            <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:44</span>
                                        </div>
                                    </div>
                    
                                    <!-- form -->
                                    <div class="w-full bg-gray-200 bg-opacity-25 p-6 border-t border-gray-200">
                                    <form>
                                        <div class="flex rounded-md overflow-hidden border border-gray-300">
                                        <input type="text" class="flex-1 px-4 py-2 text-sm focus:outline-none">
                                        <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2">Enviar</button>
                                        </div>
                                    </form>
                                    </div>
                    
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
.messageFromMe {
    @apply bg-indigo-300 bg-opacity-25;
}
.messageToMe {
    @apply bg-gray-300 bg-opacity-25;
}
</style>