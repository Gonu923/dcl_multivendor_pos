import Welcome from './components/Welcome.vue';
Vue.component('Welcome', require('./components/Welcome.vue'));

var app = new Vue({
   el: '#app',
   components: {
       'Welcome': require('./components/Welcome.vue'),
   }
});
