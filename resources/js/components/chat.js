document.addEventListener("alpine:init", () => {
    Alpine.data("chat", (params) => {
        return {
            receivedMessages: params.receivedMessages,
            loggedUser: params.loggedUser,
            to_user: params.to_user,
            message_file: params.message_file,

            init(){
                window.Echo.channel('chats').listen('ChatStatusUpdated', event => {
                    this.receivedMessages.push(event.message);
                })
            },
            ...params
        }
    });
});