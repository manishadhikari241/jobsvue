import settings from "./store/modules/settings";

require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();

import Vue from 'vue'
import VueRouter from 'vue-router'
import VuejsDialog from 'vuejs-dialog';
import routes from './routes/routes';
import vuetify from './vuetify/vuetify';
import {store} from './store/store';
import RichTextEditor from 'rich-text-editor-vuetify';


Vue.use(RichTextEditor);
Vue.use(VuejsDialog);
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});
// router.beforeResolve((to, from, next) => {
//     // If this isn't an initial page load.
//     if (to.name) {
//         // Start the route progress bar.
//         NProgress.start()
//     }
//     next()
// });

// router.afterEach((to, from) => {
//     // Complete the animation of the route progress bar.
//     NProgress.done()
// });
Vue.component('app', require('./components/app').default);

Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);
Vue.component('category-component', require('./components/Category/CategoryComponent.vue').default);
Vue.component('setting-component', require('./components/Settings/SettingComponent').default);
Vue.component('login', require('./components/Login/LoginComponent').default);
Vue.component('jobs-level-datatable', require('./components/PostJobs/JobLevel/JobLevelDatatableComponent').default);
Vue.component('job-type-datatable',require('./components/PostJobs/JobTypes/JobTypesDatatableComponent').default);
Vue.component('company-package-datatable',require('./components/Employer/CompanyPackagesDatatableComponent').default);


new Vue({
    router,
    vuetify,
    store,
}).$mount('#app');
