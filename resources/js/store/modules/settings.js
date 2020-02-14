import axios from "axios"

const state = {
    settings: '',
    dialog: false,

};
const getters = {};

const mutations = {

    get_value(state, payloads) {
        // let list = [];
        // payload.data.map(function (value, key) {
        //     list.push(value);
        // });
        state.settings = payloads.data;

    },
    initial_load(state, payload) {
        state.dialog = true
    }
    , set_load(state, payload) {
        state.dialog = false;
        toastr.success('Settings Saved Successfully');


    }
};
const actions = {
    updateSettings({commit, state}, payloads) {
        commit('initial_load');
        axios({
            method: "POST",
            data: payloads,
            url: '/admin/setting'
        }).then(function (response) {
                commit('set_load');

        })
    },


    getSettings({commit}, payloads) {

        axios({
            method: "GET",
            url: '/admin/setting'
        }).then(function (response) {
            commit('get_value', response);
        }.bind(this));
    }
};
export default {
    state,
    getters,
    actions,
    mutations,
    namespaced: true,
}

