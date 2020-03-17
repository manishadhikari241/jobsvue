import axios from 'axios';

const state = {
    company_packages: '',
    dialog: false,
    editPackageModal: false,
    edit_company_packages: ''
};
const mutations = {
    initial_load(state, payloads) {
        state.dialog = true;
    }
    , stop_load(state, payloads) {
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
    }


};


export default {
    namespaced: true,
    state,
    mutations,
    actions
}
