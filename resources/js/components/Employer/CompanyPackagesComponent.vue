<template>
    <v-container>
        <v-row>
            <v-col cols="12">

                <v-card>
                    <v-form id="packages" @submit.prevent="addCompanyPackages">

                        <v-card-title>
                            Company Packages
                        </v-card-title>
                        <v-card-text>
                            <v-text-field v-model="packageData.package_name" label="Package Name"
                                          :counter="20"></v-text-field>
                            <v-text-field v-model="packageData.package_price" single-line
                                          label="Package Price"
                                          type="number"></v-text-field>
                            <v-select v-model="packageData.package_duration" :items="package_duration"
                                      label="Package Duration" item-text="name" item-value="value"></v-select>

                            <v-text-field v-model="packageData.package_features" label="Features"></v-text-field>
                            <v-select v-model="packageData.status" label="Status" :items="status" item-text="name"
                                      item-value="value"></v-select>


                        </v-card-text>
                        <v-card-actions>
                            <v-btn type="submit">Save</v-btn>
                        </v-card-actions>
                    </v-form>

                </v-card>
            </v-col>

            <company-package-datatable></company-package-datatable>

        </v-row>
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

    </v-container>

</template>

<script>
    export default {
        name: "CompanyPackagesComponent",

        data() {
            return {
                dialog: this.$store.state.employer.dialog,

                status: [
                    {name: "Pending", value: 'pending'},
                    {name: "Publish", value: 'publish'},

                ],
                package_duration: [{name: "Yearly", value: 'yearly'}, {name: "Monthly", value: 'monthly'}],
                packageData: {
                    package_name: '',
                    package_duration: '',
                    package_price: '',
                    package_features: '',
                    status: ''

                },

            }
        },
        methods: {
            addCompanyPackages() {

                this.$store.dispatch('employer/addCompanyPackages', this.packageData).then(function () {
                    this.dialog = this.$store.state.employer.dialog;
                }.bind(this)).finally(function () {
                    setTimeout(() => {
                        this.dialog = this.$store.state.employer.dialog;
                        this.$store.dispatch('employer/getCompanyPackages');
                    }, 1000);
                }.bind(this));
            }
        }
    }
</script>

<style scoped>

</style>