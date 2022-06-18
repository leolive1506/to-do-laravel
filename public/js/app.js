"use strict";
/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! alpinejs */ \"./node_modules/alpinejs/dist/module.esm.js\");\n__webpack_require__(/*! ./bootstrap */ \"./resources/js/bootstrap.js\");\n\n\nwindow.Alpine = alpinejs__WEBPACK_IMPORTED_MODULE_0__[\"default\"];\nalpinejs__WEBPACK_IMPORTED_MODULE_0__[\"default\"].start();\nconsole.log('oi');//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibWFwcGluZ3MiOiI7O0FBQUFBLG1CQUFPLENBQUMsZ0RBQUQsQ0FBUDs7QUFDQTtBQUNBRSxNQUFNLENBQUNELE1BQVAsR0FBZ0JBLGdEQUFoQjtBQUNBQSxzREFBQTtBQUNBRyxPQUFPLENBQUNDLEdBQVIsQ0FBWSxJQUFaIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FwcC5qcz9jZWQ2Il0sInNvdXJjZXNDb250ZW50IjpbInJlcXVpcmUoJy4vYm9vdHN0cmFwJyk7XG5pbXBvcnQgQWxwaW5lIGZyb20gJ2FscGluZWpzJztcbndpbmRvdy5BbHBpbmUgPSBBbHBpbmU7XG5BbHBpbmUuc3RhcnQoKTtcbmNvbnNvbGUubG9nKCdvaScpXG4iXSwibmFtZXMiOlsicmVxdWlyZSIsIkFscGluZSIsIndpbmRvdyIsInN0YXJ0IiwiY29uc29sZSIsImxvZyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lodash */ \"./node_modules/lodash/lodash.js\");\n/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ \"./node_modules/axios/index.js\");\n/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var vanilla_masker__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vanilla-masker */ \"./node_modules/vanilla-masker/lib/vanilla-masker.js\");\n/* harmony import */ var vanilla_masker__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(vanilla_masker__WEBPACK_IMPORTED_MODULE_2__);\n\nwindow._ = (lodash__WEBPACK_IMPORTED_MODULE_0___default());\n/**\n * We'll load the axios HTTP library which allows us to easily issue requests\n * to our Laravel back-end. This library automatically handles sending the\n * CSRF token as a header based on the value of the \"XSRF\" token cookie.\n */\n\n\nwindow.axios = (axios__WEBPACK_IMPORTED_MODULE_1___default());\nwindow.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';\n\nvar cost = document.querySelector(\"#cost\");\n\nif (cost) {\n  // Masking input element to money with options.\n  vanilla_masker__WEBPACK_IMPORTED_MODULE_2___default()(cost).maskMoney(); // VMasker(document.querySelector(\"#cost\")).maskMoney({\n  //     // Decimal precision -> \"90\"\n  //     precision: 2,\n  //     // Decimal separator -> \",90\"\n  //     separator: ',',\n  //     // Number delimiter -> \"12.345.678\"\n  //     delimiter: '.',\n  //   });\n}\n/**\n * Echo exposes an expressive API for subscribing to channels and listening\n * for events that are broadcast by Laravel. Echo and event broadcasting\n * allows your team to easily build robust real-time web applications.\n */\n// import Echo from 'laravel-echo';\n// import Pusher from 'pusher-js';\n// window.Pusher = Pusher;\n// window.Echo = new Echo({\n//     broadcaster: 'pusher',\n//     key: process.env.MIX_PUSHER_APP_KEY,\n//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,\n//     forceTLS: true\n// });//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYm9vdHN0cmFwLmpzLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7QUFBQTtBQUNBQyxNQUFNLENBQUNELENBQVAsR0FBV0EsK0NBQVg7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0FDLE1BQU0sQ0FBQ0MsS0FBUCxHQUFlQSw4Q0FBZjtBQUVBRCxNQUFNLENBQUNDLEtBQVAsQ0FBYUMsUUFBYixDQUFzQkMsT0FBdEIsQ0FBOEJDLE1BQTlCLENBQXFDLGtCQUFyQyxJQUEyRCxnQkFBM0Q7QUFFQTtBQUNBLElBQU1FLElBQUksR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLE9BQXZCLENBQWI7O0FBRUEsSUFBSUYsSUFBSixFQUFVO0VBQ047RUFDQUQscURBQU8sQ0FBQ0MsSUFBRCxDQUFQLENBQWNHLFNBQWQsR0FGTSxDQUdOO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7QUFDSDtBQUVEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUVBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYm9vdHN0cmFwLmpzPzZkZTciXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IF8gZnJvbSAnbG9kYXNoJztcbndpbmRvdy5fID0gXztcblxuLyoqXG4gKiBXZSdsbCBsb2FkIHRoZSBheGlvcyBIVFRQIGxpYnJhcnkgd2hpY2ggYWxsb3dzIHVzIHRvIGVhc2lseSBpc3N1ZSByZXF1ZXN0c1xuICogdG8gb3VyIExhcmF2ZWwgYmFjay1lbmQuIFRoaXMgbGlicmFyeSBhdXRvbWF0aWNhbGx5IGhhbmRsZXMgc2VuZGluZyB0aGVcbiAqIENTUkYgdG9rZW4gYXMgYSBoZWFkZXIgYmFzZWQgb24gdGhlIHZhbHVlIG9mIHRoZSBcIlhTUkZcIiB0b2tlbiBjb29raWUuXG4gKi9cblxuaW1wb3J0IGF4aW9zIGZyb20gJ2F4aW9zJztcbndpbmRvdy5heGlvcyA9IGF4aW9zO1xuXG53aW5kb3cuYXhpb3MuZGVmYXVsdHMuaGVhZGVycy5jb21tb25bJ1gtUmVxdWVzdGVkLVdpdGgnXSA9ICdYTUxIdHRwUmVxdWVzdCc7XG5cbmltcG9ydCBWTWFza2VyIGZyb20gJ3ZhbmlsbGEtbWFza2VyJ1xuY29uc3QgY29zdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjY29zdFwiKTtcblxuaWYgKGNvc3QpIHtcbiAgICAvLyBNYXNraW5nIGlucHV0IGVsZW1lbnQgdG8gbW9uZXkgd2l0aCBvcHRpb25zLlxuICAgIFZNYXNrZXIoY29zdCkubWFza01vbmV5KCk7XG4gICAgLy8gVk1hc2tlcihkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2Nvc3RcIikpLm1hc2tNb25leSh7XG4gICAgLy8gICAgIC8vIERlY2ltYWwgcHJlY2lzaW9uIC0+IFwiOTBcIlxuICAgIC8vICAgICBwcmVjaXNpb246IDIsXG4gICAgLy8gICAgIC8vIERlY2ltYWwgc2VwYXJhdG9yIC0+IFwiLDkwXCJcbiAgICAvLyAgICAgc2VwYXJhdG9yOiAnLCcsXG4gICAgLy8gICAgIC8vIE51bWJlciBkZWxpbWl0ZXIgLT4gXCIxMi4zNDUuNjc4XCJcbiAgICAvLyAgICAgZGVsaW1pdGVyOiAnLicsXG4gICAgLy8gICB9KTtcbn1cblxuLyoqXG4gKiBFY2hvIGV4cG9zZXMgYW4gZXhwcmVzc2l2ZSBBUEkgZm9yIHN1YnNjcmliaW5nIHRvIGNoYW5uZWxzIGFuZCBsaXN0ZW5pbmdcbiAqIGZvciBldmVudHMgdGhhdCBhcmUgYnJvYWRjYXN0IGJ5IExhcmF2ZWwuIEVjaG8gYW5kIGV2ZW50IGJyb2FkY2FzdGluZ1xuICogYWxsb3dzIHlvdXIgdGVhbSB0byBlYXNpbHkgYnVpbGQgcm9idXN0IHJlYWwtdGltZSB3ZWIgYXBwbGljYXRpb25zLlxuICovXG5cbi8vIGltcG9ydCBFY2hvIGZyb20gJ2xhcmF2ZWwtZWNobyc7XG5cbi8vIGltcG9ydCBQdXNoZXIgZnJvbSAncHVzaGVyLWpzJztcbi8vIHdpbmRvdy5QdXNoZXIgPSBQdXNoZXI7XG5cbi8vIHdpbmRvdy5FY2hvID0gbmV3IEVjaG8oe1xuLy8gICAgIGJyb2FkY2FzdGVyOiAncHVzaGVyJyxcbi8vICAgICBrZXk6IHByb2Nlc3MuZW52Lk1JWF9QVVNIRVJfQVBQX0tFWSxcbi8vICAgICBjbHVzdGVyOiBwcm9jZXNzLmVudi5NSVhfUFVTSEVSX0FQUF9DTFVTVEVSLFxuLy8gICAgIGZvcmNlVExTOiB0cnVlXG4vLyB9KTtcbiJdLCJuYW1lcyI6WyJfIiwid2luZG93IiwiYXhpb3MiLCJkZWZhdWx0cyIsImhlYWRlcnMiLCJjb21tb24iLCJWTWFza2VyIiwiY29zdCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsIm1hc2tNb25leSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/bootstrap.js\n");

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvY3NzL2FwcC5jc3MuanMiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Nzcy9hcHAuY3NzP2E1ZTciXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/css/app.css\n");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","/js/vendor"], () => (__webpack_exec__("./resources/js/app.js"), __webpack_exec__("./resources/css/app.css")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);