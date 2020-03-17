import Vue from 'vue';
import Vuex from 'vuex';
import settings from './modules/settings';
import jobs from './modules/jobs';
import employer from './modules/employer';

Vue.use(Vuex);

export const store = new Vuex.Store({

    modules: {
        settings,
        jobs,
        employer
    }

});

