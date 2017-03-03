
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import router from './routes';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.css';

var build = require('./modules/model');
window.build = build;

build.libs = require('./modules/libs');
build.document = require('./modules/document');
build.services = require('./modules/services');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('AppHeader', require('./components/AppHeader.vue'));
Vue.component('AppFooter', require('./components/AppFooter.vue'));
Vue.use(VueMaterial)
Vue.material.registerTheme('default', {
    primary: 'blue',
    accent: 'green',
    warn: 'orange',
    background: 'white'
})

const app = new Vue({
    el: '#app',
    router: router
});
