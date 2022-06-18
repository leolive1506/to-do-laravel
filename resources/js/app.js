require('./bootstrap');
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

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
