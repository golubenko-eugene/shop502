/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

document.querySelector('.buy').addEventListener('submit', function(e){
	e.preventDefault();
	const productData = new FormData(this);

	axios.post('/cart/add', productData)
	.then(function (response) {
		console.log(response);
	})
	.catch(function (error) {
		console.log(error);});

});

document.querySelector('.modal-body').addEventListener('click', function (e) {
	e.preventDefault();
	if(e.target.classList.contains('remove-product')){
		const id = e.target.getAttribute('data-id');

		axios.post('/cart/remove', {product_id: id})
		.then(function(response){
			updateCart(response.data);
		});
		.catch(function(error) {
			console.log(error);
		});
	};
});

document.querySelector('.modal-body').addEventListener('input', function (e) {
	e.preventDefault();
	if(e.target.classList.contains('change-qty')){
		const id = e.target.getAttribute('data-id');
		const qty = e.target.value;

		axios.post('/cart/change-qty', {product_id: id, product_qty: qty})
		.then(function(response){
			updateCart(response.data);
		});
		.catch(function(error) {
			console.log(error);
		});
	};
});

