<div class="p-6" x-data="chat({
        receivedMessages: @entangle('receivedMessages'),
        loggedUser: @entangle('loggedUser'),
        to_user: @entangle('to_user')
    })">
    <div class="mx-auto max-w-7xl">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

            <div
                class="flex flex-row-reverse items-center justify-between px-5 py-6 bg-white border-b border-gray-200 md:px-10">
                <div>
                    <img src="../../img/logo-growp.png" alt="">
                </div>

                <div class="text-2xl">
                    Conversas
                </div>
            </div>

            <div class="bg-white border-b border-gray-200">

                <div class="flex overflow-hidden bg-white shadow-xl sm:rounded-lg"
                    style="min-height: 400px; max-height: 400px;">

                    <!-- list users -->
                    <div
                        class="w-3/12 overflow-y-auto bg-gray-200 bg-opacity-25 border-r border-gray-200 md:w-3/12 list-scroll">
                        <ul>
                            @foreach ($list_users as $key => $listUser)
                                <li wire:click="mountUser({{ $listUser['id'] }},{{ $key }})"
                                    class="p-6 text-lg font-semibold leading-7 text-gray-600 border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                    <p class="flex items-center">
                                        {{ $listUser['name'] }}
                                        <span class="w-2 h-2 ml-2 bg-blue-500 rounded-full"></span>
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- box message -->
                    <div class="flex flex-col justify-between w-9/12 md:w-9/12">
                        @if ($to_user !== [])
                            <div class="flex flex-col h-full">
                                <div class="flex justify-between w-full h-16 pt-2 text-white bg-teal-600 shadow-md"
                                    style="top:0px; overscroll-behavior: none;">
                                    <!-- back button -->
                                    <svg wire:click="disassembly" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-12 h-12 my-1 ml-2 text-green-100 cursor-pointer">
                                        <path class="text-green-100 fill-current"
                                            d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z" />
                                    </svg>
                                    <div class="my-3 text-lg font-bold tracking-wide text-green-100"
                                        x-text="to_user.name"></div>
                                    <!-- 3 dots -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-8 h-8 mt-2 mr-2 icon-dots-vertical">
                                        <path class="text-green-100 fill-current" fill-rule="evenodd"
                                            d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                                    </svg>
                                </div>

                                <!-- message -->
                                <div class="flex flex-col w-full h-full p-6 overflow-y-auto text-white list-scroll">
                                    <!-- Mensagens no banco de dados -->
                                    <template x-for="(message, index) in receivedMessages">
                                        <div>
                                            <template x-if="message.from_user_id !== loggedUser.id">
                                                <div class="inline-block w-full mb-3">
                                                    <template x-if="message.content && !message.image">
                                                        <div class="flex items-center justify-between px-4 py-2 bg-gray-300 rounded-md align-center messageFromMe" style="max-width: min-content; gap: 1rem;">
                                                            <p class="text-white" x-text="message.content"></p>
                                                        <div>
                                                        <span class="inline-block mt-6 text-xs text-gray-400">15:00</span>
                                                    </template>

                                                    <template x-if="!message.content && message.image">
                                                        <div class="inline-block px-4 py-2 bg-gray-300 rounded-md messageFromMe" style="max-width: 75%;">
                                                            <img src="./../../../public/storage/BH6zNqahh7eL1pqGYsGE9q4uGYTv8Gcw857FF012.png">
                                                        <div>
                                                        <span class="block mt-6 text-xs text-gray-500">15:00</span>
                                                    </template>
                                                    
                                                    <template x-if="message.content && message.image">
                                                        <div class="inline-block px-4 py-2 bg-gray-300rounded-md messageFromMe" style="max-width: 75%;">
                                                            <figure>
                                                                <img src="{{ url('storage/') }}">
                                                                <figcaption x-text="message.content"></figcaption>
                                                            </figure>
                                                        </div>
                                                        <span class="block mt-6 text-xs text-gray-500">15:00</span>
                                                    </template>
                                                </div>
                                            </template>

                                            <template x-if="message.from_user_id === loggedUser.id">
                                                <div class="w-full mb-3 text-right">
                                                    <template x-if="message.content && !message.image">
                                                        <div class="flex items-center justify-between px-4 py-2 bg-teal-600 rounded-md align-center messageFromMe" style="max-width: min-content; gap: 1rem;">
                                                            <p class="text-white" x-text="message.content"></p>
                                                        <div>
                                                        <span class="inline-block mt-6 text-xs text-gray-200">15:00</span>
                                                    </template>
                                                    <template x-if="!message.content && message.image">
                                                        <div class="inline-block px-4 py-2 bg-teal-600 rounded-md messageFromMe" style="max-width: 75%;">
                                                            <img src="./../../../public/storage/uploads/BH6zNqahh7eL1pqGYsGE9q4uGYTv8Gcw857FF012.png">
                                                        <div>
                                                        <span class="block mt-6 text-xs text-gray-200">15:00</span>
                                                    </template>
                                                    <template x-if="message.content && message.image">
                                                        <figure class="inline-block px-4 py-2 bg-teal-600 rounded-md messageFromMe" style="max-width: 75%;">
                                                            <img src="./../../../public/storage/uploads/BH6zNqahh7eL1pqGYsGE9q4uGYTv8Gcw857FF012.png">
                                                            <figcaption x-text="message.content"></figcaption>
                                                            <span class="block mt-6 text-xs text-gray-200">15:00</span>
                                                        </figure>
                                                    </template>
                                                </div>
                                            </template>
                                        </div>
                                    </template>
                                </div>

                                <!-- form -->
                                <div class="w-full p-2 bg-gray-300 border-t" style="bottom: 0px;">
                                    <div class="px-4 sm:mb-0">
                                        <div class="relative flex">
                                            <span class="absolute inset-y-0 flex items-center">
                                                <button 
                                                type="button" 
                                                class="inline-flex items-center justify-center w-12 h-12 text-gray-500 transition duration-500 ease-in-out rounded-full hover:bg-gray-300 focus:outline-none" 
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                                                </svg>
                                            </button>
                                            </span>
                                            <input 
                                                type="text" 
                                                placeholder="Mensagem" 
                                                class="w-full py-3 pl-12 text-gray-600 placeholder-gray-600 bg-gray-200 border-none rounded-full focus:outline-none focus:placeholder-gray-400"
                                                wire:model.defer="message" 
                                            >
                                            <div class="absolute inset-y-0 right-0 items-center hidden sm:flex">
                                                <button type="button" class="inline-flex items-center justify-center w-10 h-10 text-gray-500 transition duration-500 ease-in-out rounded-full input-archive-btn hover:bg-gray-300 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-600">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                                    </svg>
                                                    
                                                    <div class="input-archive">
                                                        <div class="max-w-md mx-auto overflow-hidden rounded-lg md:max-w-xl">
                                                            <div class="md:flex">
                                                                <div class="w-full p-3">
                                                                    <div class="relative flex items-center justify-center h-48 bg-gray-100 border-2 border-blue-700 border-dotted rounded-lg">
                                                                        <div class="absolute">
                                                                            <div class="flex flex-col items-center"> 
                                                                                <i class="text-blue-700 fa fa-folder-open fa-4x"></i> 
                                                                                <span class="block font-normal text-gray-400">Adicionar arquivos de imagem</span> 
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="w-full h-full opacity-0 cursor-crosshair" name="" wire:model="message_file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>

                                                
                                                <button type="button" class="inline-flex items-center justify-center w-10 h-10 text-gray-500 transition duration-500 ease-in-out rounded-full hover:bg-gray-300 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-600">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </button>
                                                <button type="button" class="inline-flex items-center justify-center w-10 h-10 text-gray-500 transition duration-500 ease-in-out rounded-full hover:bg-gray-300 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-600">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </button>
                                                <button 
                                                    type="button" 
                                                    class="inline-flex items-center justify-center w-12 h-12 text-white transition duration-500 ease-in-out bg-blue-500 rounded-full hover:bg-blue-400 focus:outline-none"
                                                    wire:click="sendMessage"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 transform rotate-90">
                                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex-1 h-full bg-gray-300"></div>
                        @endif
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
