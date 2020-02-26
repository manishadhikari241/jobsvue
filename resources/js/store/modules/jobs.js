import axios from "axios";

const state = {
    dialog: false,
    jobtypes: ''

};
const getters = {};

const mutations = {
    initial_load(state, payload) {
        state.dialog = true
    }
    , stop_load(state, payload) {
        state.dialog = false;

    },
    job_types_added(payloads) {
        state.dialog = false;
        toastr.success('Job Types Added');

    },
    get_job_types(state, payloads) {
        state.jobtypes = payloads.data;
        state.dialog = false;
    }
};

const actions = {
    addJobLevel() {
        axios({
            method: 'POST',
        }).then(() => {
            state.dialog = true;
            console.log(state.dialog);
        }).catch(error => {

        });
    },
    addJobTypes({commit, state}, payloads) {
        commit('initial_load');
        axios({
            method: 'POST',
            data: {
                job_type_name: payloads.jobTypeName,
                status: payloads.status
            },
            url: '/api/admin/jobtype'
        }).then(function (response) {
            commit('job_types_added');
        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
            }
        })
    },
    getJobTypes({commit}, state) {
        commit('initial_load');
        axios({
            method: 'GET',
            url: '/api/admin/jobtype'
        }).then(function (response) {
            // console.log(response.data);
            commit('get_job_types', response)
        }.bind(this)).catch(error => {

        });
    },
    deleteJobTypes({commit}, payloads) {
        axios({
            url: `/api/admin/jobtype/${payloads}`,
            method: 'Delete'
        }).then(function (response) {
            toastr.success(response.data.message);

            // console.log(response.data.message);
        })
    },
    editJobTypes({commit}, payloads) {

    }
};

export default {
    state,
    getters,
    mutations,
    actions,
    namespaced: true,
}
