
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import router from './routes';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// Vue.component('banner', require('./components/Banner.vue'));
Vue.component('AppHeader', require('./components/AppHeader.vue'));
Vue.component('AppFooter', require('./components/AppFooter.vue'));

const app = new Vue({
    el: '#app',
    router: router
});
