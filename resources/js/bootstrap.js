import _ from 'lodash';
window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import VMasker from 'vanilla-masker'
const cost = document.querySelector("#cost");

if (cost) {
    // Masking input element to money with options.
    VMasker(cost).maskMoney();
    // VMasker(document.querySelector("#cost")).maskMoney({
    //     // Decimal precision -> "90"
    //     precision: 2,
    //     // Decimal separator -> ",90"
    //     separator: ',',
    //     // Number delimiter -> "12.345.678"
    //     delimiter: '.',
    //   });
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
