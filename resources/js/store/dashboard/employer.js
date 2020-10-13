import axios from 'axios';

const state = {
    company_packages: '',
    dialog: false,
    editPackageModal: false,
    edit_company_packages: '',
    employer_city: '',
    editEmployerCity: '',
    editEmployerCityModal: false
};
const mutations = {
    initial_load(state, payloads) {
        state.dialog = true;
    },
    stop_load(state, payloads) {
        state.dialog = false;
    },
    get_company_packages(state, payloads) {
        state.company_packages = payloads.data
    },
    company_package_added() {
        state.dialog = false;
    },
    edit_company_packages(state, payloads) {
        state.edit_company_packages = payloads.data.company_package
    },
    update_company_package(state, payloads) {
        state.editPackageModal = false;
    },
    employer_city_added() {
        state.dialog = false;

    },
    get_employer_city(state, payloads) {
        state.employer_city = payloads.data

    },
    edit_employer_city(state, payloads) {
        state.editEmployerCity = payloads.data.city;
        state.editEmployerCityModal = true
    },
    update_employer_city(state, payloads) {
        state.editEmployerCityModal = false;

    }

};
const actions = {
    getCompanyPackages({commit}, payloads) {
        axios({
            url: '/api/admin/company-packages',
            method: 'GET',
        }).then(function (response) {
            commit('get_company_packages', response);
        }).catch(error => {

        });
    },

    addCompanyPackages({commit, state}, payloads) {
        commit('initial_load');
        axios({
            url: '/api/admin/company-packages',
            data: {
                package_name: payloads.package_name,
                price: payloads.package_price,
                duration: payloads.package_duration,
                features: payloads.package_features,
                status: payloads.status
            },
            method: "POST"
        }).then(function (response) {
            if (response.data.status == 'success') {
                toastr.success(response.data.message);
                commit('company_package_added');
                commit('stop_load');
            }
        }).catch(error => {
            if (error.response.status == 422) {
                // console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
                // state.editJobLevelModal = true
            }

        });
    },

    deleteCompanyPackage({commit}, payloads) {
        axios({
            url: `/api/admin/company-packages/${payloads}`,
            method: 'DELETE',
        }).then(function (response) {
            toastr.success(response.data.message);

        }).catch(error => {

        });
    },

    editCompanyPackages({commit}, payloads) {
        ;
        axios({
            url: `/api/admin/company-packages/${payloads}`,
            method: 'GET',
        }).then(function (response) {
            commit('edit_company_packages', response);
        }).catch(error => {
            console.log(error);
        });
    },

    updateCompanyPackage({commit, state}, payloads) {
        commit('initial_load');


        axios({
            method: 'PATCH',
            url: `/api/admin/company-packages/${payloads.packages_id}`,
            data: {
                'package_name': payloads.package_name,
                'price': payloads.price,
                'duration': payloads.duration.toLowerCase().trim(),
                'features': payloads.features,
                'status': payloads.status.toLowerCase().trim()
            }
        }).then(function (response) {
            commit('stop_load');
            commit('update_company_package');
            toastr.success(response.data.message);


        }).catch(error => {
            if (error.response.status == 422) {
                console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
                state.editPackageModal = true

            }
        });
    },

    /*
    Employer City starts
     */
    addEmployerCity({commit}, payloads) {
        commit('initial_load');

        axios({
            url: '/api/admin/city',
            data: payloads,
            method: "POST"
        }).then(function (response) {
            commit('employer_city_added');
            toastr.success(response.data.message);

        }).catch(error => {
            if (error.response.status == 422) {
                // console.log(error.response.data.errors);
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
            }
        });
    },

    getEmployerCity({commit}, payloads) {
        axios({
            url: '/api/admin/city',
            method: 'GET',
        }).then(function (response) {
            commit('get_employer_city', response);
        }).catch(error => {

        });
    },

    deleteEmployerCity({commit}, payloads) {
        axios({
            url: `/api/admin/city/${payloads}`,
            method: 'DELETE',
        }).then(function (response) {
            toastr.success(response.data.message);

        }).catch(error => {

        });
    },
    editEmployerCity({commit}, payloads) {
        axios({
            method: 'GET',
            url: `/api/admin/city/${payloads}`
        }).then(function (response) {
            commit('edit_employer_city', response);
        })
    },
    updateEmployerCity({commit}, payloads) {
        console.log(payloads);
        commit('initial_load');
        axios({
            method: 'PATCH',
            url: `/api/admin/city/${payloads.city_id}`,
            data: payloads
        }).then(function (response) {
            commit('stop_load');
            commit('update_employer_city');
            toastr.success(response.data.message);


        }).catch(error => {
            if (error.response.status == 422) {
                $.each(error.response.data.errors, function (key, value) {
                    toastr.warning(value);

                });
                commit('stop_load');
                state.editEmployerCityModal = true

            }
        });
    },

};


export default {
    namespaced: true,
    state,
    mutations,
    actions
}
