require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();

import Vue from 'vue'
import VueRouter from 'vue-router'
import VuejsDialog from 'vuejs-dialog';
import Loading from 'vue-loading-overlay';
import routes from './routes/routes';
import vuetify from './vuetify/vuetify';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';

Vue.use(Loading);
Vue.use(VuejsDialog);
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

//
// Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);
// Vue.component('category-component', require('./components/CategoryComponent.vue').default);
// Vue.component('edit-category-modal', require('./components/CategoryEditModal.vue').default);
// Vue.component('setting-component', require('./components/Settings/SettingComponent').default);
Vue.component('app', require('./components/app').default);

const app = new Vue({
    el: '#app',
    router,
    vuetify

}).$mount('#app');
