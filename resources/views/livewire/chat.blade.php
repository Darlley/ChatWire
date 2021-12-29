<div class="p-6" x-data="chat({
        receivedMessages: @entangle('receivedMessages'),
        loggedUser: @entangle('loggedUser'),
        to_user: @entangle('to_user')
    })">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div
                class="flex justify-between flex-row-reverse items-center py-6 px-5 md:px-10 bg-white border-b border-gray-200">
                <div>
                    <img src="../../img/logo-growp.png" alt="">
                </div>

                <div class="text-2xl">
                    Conversas
                </div>
            </div>

            <div class="bg-white border-b border-gray-200">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex"
                    style="min-height: 400px; max-height: 400px;">

                    <!-- list users -->
                    <div
                        class="w-3/12 md:w-3/12 bg-gray-200 bg-opacity-25 border-r border-gray-200 overflow-y-auto list-scroll">
                        <ul>
                            @foreach ($list_users as $key => $listUser)
                                <li wire:click="mountUser({{ $listUser['id'] }},{{ $key }})"
                                    class="p-6 text-lg text-gray-600 leading-7  font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                    <p class="flex items-center">
                                        {{ $listUser['name'] }}
                                        <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- box message -->
                    <div class="w-9/12 md:w-9/12 flex flex-col justify-between">
                        @if ($to_user !== [])
                            <div class="h-full flex flex-col">
                                <div class="w-full bg-teal-600 h-16 pt-2 text-white flex justify-between shadow-md"
                                    style="top:0px; overscroll-behavior: none;">
                                    <!-- back button -->
                                    <svg wire:click="disassembly" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="cursor-pointer w-12 h-12 my-1 text-green-100 ml-2">
                                        <path class="text-green-100 fill-current"
                                            d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z" />
                                    </svg>
                                    <div class="my-3 text-green-100 font-bold text-lg tracking-wide"
                                        x-text="to_user.name"></div>
                                    <!-- 3 dots -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="icon-dots-vertical w-8 h-8 mt-2 mr-2">
                                        <path class="text-green-100 fill-current" fill-rule="evenodd"
                                            d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                                    </svg>
                                </div>

                                <!-- message -->
                                <div class="h-full w-full p-6 flex flex-col overflow-y-auto list-scroll text-white">

                                    <!-- Mensagens no banco de dados -->
                                    <template x-for="(message, index) in receivedMessages">
                                        <div>

                                            <template x-if="message.from_user_id !== loggedUser.id">
                                                <div class="w-full mb-3">
                                                    <p class="bg-gray-300 inline-block p-2 rounded-md messageFromMe"
                                                        style="max-width: 75%;" x-text="message.content"></p>
                                                    <span class="block mt-1 text-xs text-gray-500">28-12-2021
                                                        09:49</span>
                                                </div>
                                            </template>

                                            <template x-if="message.from_user_id === loggedUser.id">
                                                <div class="w-full mb-3 text-right">
                                                    <p class="bg-teal-600 inline-block p-2 rounded-md messageFromMe"
                                                        style="max-width: 75%;" x-text="message.content"></p>
                                                    <span class="block mt-1 text-xs text-gray-500">28-12-2021
                                                        09:49</span>
                                                </div>
                                            </template>

                                            
                                        </div>
                                    </template>
                                    
                                    <div class="w-full mb-3 text-right">
                                        <div class="bg-teal-600 inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                            <img class="w-full" src="../../img/739550.png" alt="">
                                        </div>
                                        <span class="block mt-1 text-xs text-gray-500">28-12-2021
                                            09:49</span>
                                    </div>
                                </div>

                                <!-- form -->
                                <div class="w-full bg-gray-300 p-2 border-t" style="bottom: 0px;">
                                    <div class="px-4 P-2 sm:mb-0">
                                        <div class="relative flex">
                                            <span class="absolute inset-y-0 flex items-center">
                                                <button 
                                                type="button" 
                                                class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none" 
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                                                </svg>
                                            </button>
                                            </span>
                                            <input 
                                                type="text" 
                                                placeholder="Mensagem" 
                                                class="border-none w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-full py-3"
                                                wire:model.defer="message" 
                                            >
                                            <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                                                <button type="button" class="input-archive-btn inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                                    </svg>
                                                    
                                                    <div class="input-archive">
                                                        <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
                                                            <div class="md:flex">
                                                                <div class="w-full p-3">
                                                                    <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                                                                        <div class="absolute">
                                                                            <div class="flex flex-col items-center"> 
                                                                                <i class="fa fa-folder-open fa-4x text-blue-700"></i> 
                                                                                <span class="block text-gray-400 font-normal">Adicionar arquivos de imagem</span> 
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="cursor-crosshair h-full w-full opacity-0" name="" wire:model="message_file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>

                                                
                                                <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </button>
                                                <button type="button" class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </button>
                                                <button 
                                                    type="button" 
                                                    class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none"
                                                    wire:click="sendMessage"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 transform rotate-90">
                                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="h-full flex-1 bg-gray-300"></div>
                        @endif
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
