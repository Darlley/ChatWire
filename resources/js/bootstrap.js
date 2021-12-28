window._ = require('lodash');

// window.axios = require('axios');
//
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
//


import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: "5446b6749ac0b38967ca",
    cluster: "mt1",
    forceTLS: true
});

window.Echo.channel('chats').listen('ChatStatusUpdated', event => {
    console.log(event);
});
