require('./bootstrap');

window.Vue = require('vue').default;

import App from './App.vue';

const app = new Vue({
  el: '#app',
  template: "<App/>",
  components: {
    App,
  },
});
