<template>
    <v-col cols="12">

        <v-data-table
                :headers="headers"
                :items="get_company_packages"
                :items-per-page="5"
                class="elevation-1">
            <template v-slot:item.actions="{item}">
                <v-icon dark small v-on:click="editPackage(item.packages_id)">fa fa-edit</v-icon>
                <v-icon dark small v-on:click="deletePackage(item.packages_id)">fa fa-trash</v-icon>

            </template>
        </v-data-table>
        <v-dialog v-model="dialog" hide-overlay persistent width="300">
            <v-card color="primary" dark>
                <v-card-text>
                    Please stand by
                    <v-progress-linear
                            indeterminate
                            color="white"
                            class="mb-0"
                    ></v-progress-linear>
                </v-card-text>
            </v-card>
        </v-dialog>
        <v-dialog v-model="editModal" max-width="500px">
            <v-form @submit.prevent="updateJobLevel">
                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>
                            <v-text-field v-model="edit_company_packages.package_name" label="Package Name"
                                          :counter="20"></v-text-field>
                            <v-text-field v-model="edit_company_packages.price" single-line
                                          label="Package Price"
                                          type="number"></v-text-field>
                            <v-select v-model="edit_company_packages.duration" :items="package_duration"
                                      item-text="name" item-value="value"
                                      label="Package Duration"></v-select>

                            <v-text-field v-model="edit_company_packages.features" label="Features"></v-text-field>
                            <v-select v-model="edit_company_packages.status" :items="status" item-text="name"
                                      item-value="value" label="Status"></v-select>

                        </v-container>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn text color="blue darken-1" @click="close">Cancel</v-btn>
                        <v-btn color="blue darken-1" type="submit" text>Update</v-btn>
                    </v-card-actions>
                </v-card>
            </v-form>
        </v-dialog>
    </v-col>
</template>

<script>
    export default {
        name: "CompanyPackagesDatatableComponent",

        data() {
            return {

                status: [
                    {name: "Pending", value: 'Pending'},
                    {name: "Publish", value: 'Publish'},

                ],
                package_duration: [{name: "Yearly", value: 'Yearly'}, {name: "Monthly", value: 'Monthly'}],
                editModal: this.$store.state.employer.editPackageModal,
                dialog: this.$store.state.employer.dialog,

                headers: [
                    {
                        text: 'Package Name',
                        align: 'start',
                        sortable: false,
                        value: 'package_name',
                    },
                    {text: 'Package Price', value: 'price'},
                    {text: 'Package Duration', value: 'duration'},
                    {text: 'Package Features', value: 'features'},
                    {text: 'Status', value: 'status'},
                    {text: 'Actions', value: 'actions'},
                ],
            }
        },
        mounted() {
            this.$store.dispatch('employer/getCompanyPackages').then(function () {

            }.bind(this));
        },
        computed: {
            get_company_packages() {
                return this.$store.state.employer.company_packages.company_package;
            },
            edit_company_packages() {
                return this.$store.state.employer.edit_company_packages;
            }
        },
        methods: {
            close() {
                this.editModal = false;
            },
            deletePackage(id) {
                this.$dialog.confirm('Are you Sure You want to Delete?').then(function () {

                    this.$store.dispatch('employer/deleteCompanyPackage', id).then(function () {
                        setTimeout(() => {

                            this.$store.dispatch('employer/getCompanyPackages');
                        }, 600)
                    }.bind(this));
                }.bind(this));
            },
            editPackage(id) {
                this.editModal = true;
                this.$store.dispatch('employer/editCompanyPackages', id).then(function () {

                }.bind(this));
            },
            updateJobLevel() {
                this.$store.dispatch('employer/updateCompanyPackage', this.edit_company_packages).then(function () {
                    setTimeout(() => {
                        this.dialog = this.$store.state.employer.dialog;

                    }, 200);
                }.bind(this)).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.employer.dialog;
                        this.$store.dispatch('employer/getCompanyPackages');
                        this.editModal = this.$store.state.employer.editPackageModal;

                    }, 900)
                });
            }
        },
    }

</script>

<style scoped>

</style>