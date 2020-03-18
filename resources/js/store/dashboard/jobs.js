import axios from "axios";

const state = {
    /*
    Global
     */
    dialog: false,

    /*
    jobType
     */
    jobtypes: '',
    editjobtypes: '',
    editJobTypeModal: true,
    /*
    JobLevel
     */
    editJobLevelModal: false,
    jobLevel: '',
    editJobLevel: '',
    /*
    JobCurrency
     */
    jobCurrency: '',
    editJobCurrency: '',
    editJobCurrencyModal: false

};
const getters = {};

const mutations = {

    /**
     * @param state
     * @param payload
     * Job types
     */
    initial_load(state, payload) {
        state.dialog = true;
    },
    stop_load(state, payload) {
        state.dialog = false;

    },

    job_types_added(payloads) {
        state.dialog = false;
        toastr.success('Job Types Added');

    },
    get_job_types(state, payloads) {
        state.jobtypes = payloads.data;
        state.dialog = false;
    },
    edit_job_types(state, payloads) {
        state.editjobtypes = payloads.data.job_type
    },

    /**
     *Job Level
     */
    job_level_added(state, payloads) {
        state.dialog = false;
    },
    get_job_level(state, payloads) {
        state.jobLevel = payloads.data;
    },
    edit_job_level(state, payloads) {
        state.editJobLevel = payloads.data.job_level;
        state.editJobLevelModal = true
    },
    update_job_level(state, payloads) {
        state.editJobLevelModal = false
    },

    /*
    Job Currency
     */
    job_currency_added(state) {
        state.dialog = false;
    },
    get_jobs_currency(state, payloads) {
        state.jobCurrency = payloads.data;
    },
    edit_job_currency(state, payloads) {
        state.editJobCurrency = payloads.data.currency;
        state.editJobCurrencyModal = true
    }


};

const actions = {
    addJobLevel({commit}, payloads) {
        commit('initial_load');
        axios({
            method: 'POST',
            data: {
                job_level_name: payloads.jobLevelName,
                status: payloads.status
            },
            url: '/api/admin/joblevel'

        }).then(function (response) {
            if (response.data.status == 'success') {
                toastr.success(response.data.message);

                commit('job_level_added');
            }
        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
            }
        });
    },
    getJobLevel({commit}, state) {
        axios({
            method: 'GET',
            url: '/api/admin/joblevel'
        }).then(function (response) {
            commit('get_job_level', response);
        })
    },
    deleteJobLevel({commit}, payloads) {
        axios({
            method: 'DELETE',
            url: `/api/admin/joblevel/${payloads}`
        }).then(function (response) {
            toastr.success(response.data.message);
        })
    },
    editJobLevel({commit}, payloads) {
        axios({
            method: 'GET',
            url: `/api/admin/joblevel/${payloads}`
        }).then(function (response) {
            commit('edit_job_level', response);
            console.log(response);
        })
    },
    updateJobLevel({commit}, payloads) {
        console.log(payloads);
        commit('initial_load');
        axios({
            method: 'PATCH',
            url: `/api/admin/joblevel/${payloads.job_level_id}`,
            data: payloads
        }).then(function (response) {
            commit('stop_load');
            commit('update_job_level');
            toastr.success(response.data.message);


        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
                state.editJobLevelModal = true

            }
        });
    },
    /*
    JobTypes
     */

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
        axios({
            method: 'GET',
            url: `/api/admin/jobtype/${payloads}`
        }).then(function (response) {
            commit('edit_job_types', response);
        });
    },
    updateJobTypes({commit, state}, payloads,) {
        commit('initial_load');
        axios({
            method: 'PATCH',
            url: `/api/admin/jobtype/${payloads.job_type_id}`,
            data: payloads
        }).then(function (response) {
            commit('stop_load');
            state.editJobTypeModal = false;
            toastr.success(response.data.message);


        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
                state.editJobTypeModal = true

            }
        });
    },

    /*
    Job Currency
     */
    addJobCurrency({commit}, payloads) {
        commit('initial_load');
        axios({
            method: 'POST',
            data: payloads,
            url: '/api/admin/currency'

        }).then(function (response) {
            if (response.data.status == 'success') {
                toastr.success(response.data.message);

                commit('job_currency_added');
            }
        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
            }
        });
    },
    getJobCurrency({commit}) {
        commit('initial_load');
        axios({
            method: 'GET',
            url: '/api/admin/currency'
        }).then(function (response) {
            commit('get_jobs_currency', response)
        }.bind(this)).catch(error => {

        });
    },
    deleteJobCurrency({commit}, payloads) {
        axios({
            url: `/api/admin/currency/${payloads}`,
            method: 'Delete'
        }).then(function (response) {
            toastr.success(response.data.message);

            // console.log(response.data.message);
        })
    },
    editJobCurrency({commit}, payloads) {
        axios({
            method: 'GET',
            url: `/api/admin/currency/${payloads}`
        }).then(function (response) {
            commit('edit_job_currency', response);
        });
    },
    updateJobCurrency({commit}, payloads) {
        commit('initial_load');
        axios({
            method: 'PATCH',
            url: `/api/admin/currency/${payloads.currency_id}`,
            data: payloads
        }).then(function (response) {
            commit('stop_load');
            state.editJobCurrencyModal = false
            toastr.success(response.data.message);


        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
                state.editJobCurrencyModal = true

            }
        });
    }

    /*
    Job Location
     */


};

export default {
    state,
    getters,
    mutations,
    actions,
    namespaced: true,
}
