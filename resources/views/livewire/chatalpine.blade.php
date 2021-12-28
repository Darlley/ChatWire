<div class="p-6">
    <div class="max-w-7xl mx-auto">
        <div 
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
        >

            <div class="flex justify-between flex-row-reverse items-center py-6 px-5 md:px-10 bg-white border-b border-gray-200">
                <div>
                    <img src="../../img/logo-growp.png" alt="">
                </div>

                <div class="text-2xl">
                    Conversas
                </div>
            </div>

            <div class="bg-white border-b border-gray-200">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex" style="min-height: 400px; max-height: 400px;">
                    
                    <!-- list users -->
                    <div class="w-3/12 md:w-3/12 bg-gray-200 bg-opacity-25 border-r border-gray-200 overflow-y-auto list-scroll">
                        <ul>
                           <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    Fulano
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                        </ul>
                    </div>

                    <!-- box message -->
                    <div class="w-9/12 md:w-9/12 flex flex-col justify-between">
                       <div class="w-full bg-teal-600 h-16 pt-2 text-white flex justify-between shadow-md" style="top:0px; overscroll-behavior: none;">
                            <!-- back button -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="cursor-pointer w-12 h-12 my-1 text-green-100 ml-2" >
                                <path class="text-green-100 fill-current" d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z"/>
                            </svg>
                            <div class="my-3 text-green-100 font-bold text-lg tracking-wide">{{$chatUser->name}}</div>
                            <!-- 3 dots -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-dots-vertical w-8 h-8 mt-2 mr-2" >
                                <path class="text-green-100 fill-current" fill-rule="evenodd" d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                            </svg>
                        </div>
                        
                        <!-- message -->
                        <div class="w-full p-6 flex flex-col overflow-y-auto list-scroll text-white" x-ref="chatContainer">

                            <!-- Mensagens no banco de dados -->
                            <div class="w-full mb-3 text-right ">
                                <p class="bg-gray-300 inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">oi</p>
                                <span class="block mt-1 text-xs text-gray-500">28-12-2021 09:49</span>
                            </div>

                        </div>

                        <!-- form -->
                        <div class="w-full flex justify-between items-center bg-opacity-25 p-2 border-t border-gray-200" style="bottom: 0px;">
                            <textarea
                            class="flex-grow m-2 py-2 px-4 mr-1 rounded-full border border-gray-300 bg-gray-200 resize-none"
                            rows="1"
                            placeholder="Message..."
                            style="outline: none;"
                            wire:model.defer="message"
                            ></textarea>
                            <button
                                class="mr-2 p-2" style="outline: none;"
                                wire:click="sendMessage"
                            >
                                <svg
                                    class="svg-inline--fa text-white bg-green-400 fa-paper-plane fa-w-16 w-12 h-12 p-3 rounded-full"
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="paper-plane"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
