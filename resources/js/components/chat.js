document.addEventListener("alpine:init", () => {
    Alpine.data("chat", (params) => {
        return {
            list_messages_bd: params.list_messages_bd,
            list_users: params.list_users,
            data_messages: params.data_messages,
            message: '',
            
            init() {
                
            },

            smoothScroll() {
                setTimeout(() => {
                    this.$refs.chatContainer.scroll({
                        top: this.$refs.chatContainer.scrollHeight,
                        behavior: 'smooth'
                    })
                }, 100)
            },
            ...params,
        }
    });
});