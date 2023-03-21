window.Vue = require('vue');
window.axios = require('axios');

// importiamo index.js delle rotte
import router from './router';

// vue moment
import moment from 'moment';
import VueMoment from 'vue-moment';

require('moment');

Vue.use(VueMoment,{moment});


Vue.component('serdCard-cmp', require('./components/serdCard.vue').default);


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import App from './views/App.vue';
import Vue from 'vue';

const app = new Vue({
    el: '#app',
    render: (h) => h(App),
    router: router,
  });