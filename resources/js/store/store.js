import Vue from 'vue';
import Vuex from 'vuex';
import settings from './modules/settings';
import jobs from './modules/jobs';

Vue.use(Vuex);

export const store = new Vuex.Store({

    modules: {
        settings,
        jobs
    }

});

