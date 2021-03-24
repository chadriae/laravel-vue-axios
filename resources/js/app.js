require('./bootstrap');

window.Vue = require('vue');

import store from './store/index'

Vue.component('Posts', require('./components/Posts.vue'))
Vue.component('CreatePost', require('./components/CreatePost.vue'))

const app = new Vue({
    el: '#app',
    store
});