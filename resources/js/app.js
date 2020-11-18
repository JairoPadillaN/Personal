
require('./bootstrap');

window.Vue = require('vue');

Vue.component('hello-dev', require('./components/HelloDevelopers.vue').default);

const app = new Vue({
    el: '#app',
});

new Vue({
    el:"#app"
})