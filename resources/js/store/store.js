import Vue from 'vue';
import Vuex from 'vuex';
import settings from './dashboard/settings';
import jobs from './dashboard/jobs';
import employer from './dashboard/employer';

Vue.use(Vuex);

export const store = new Vuex.Store({

    modules: {
        settings,
        jobs,
        employer
    }

});

