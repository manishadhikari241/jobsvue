<template>

    <v-row>
        <v-dialog v-model="editModal" max-width="500px">
            <v-form @submit.prevent="updateJobCurrency">
                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>
                            <v-col cols="12">
                                <v-text-field :counter="20" v-model="getEditJobCurrency.currency_name"
                                              :rules="currencyRules" label="Currency Name"
                                              required></v-text-field>
                            </v-col>
                            <v-col cols="12">
                                <v-text-field :counter="1" v-model="getEditJobCurrency.currency_symbol"
                                              :rules="currencySymbolRules" label="Currency Symbol"
                                              required></v-text-field>
                            </v-col>

                            <v-col cols="12">
                                <v-select
                                        :items="status" name="status" v-model="getEditJobCurrency.status"
                                        item-text="status" item-value="value"
                                        label="Status"></v-select>
                            </v-col>

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
        <v-col col="12">
            <v-data-table
                    :headers="headers"
                    :items="getJobCurrency"
                    :search="search"
                    class="elevation-1">
                <template v-slot:item.actions="{item}">
                    <v-icon dark small v-on:click=" editJobCurrency(item.currency_id)">fa fa-edit</v-icon>
                    <v-icon dark small v-on:click=" deleteJobCurrency(item.currency_id)">fa fa-trash</v-icon>
                </template>


            </v-data-table>
        </v-col>

    </v-row>
</template>

<script>
    export default {
        data() {
            return {
                currencyRules: [
                    v => !!v || 'Please insert currency name'
                ],
                currencySymbolRules: [
                    v => !!v || 'Please insert symbol'
                ],
                editModal: this.$store.state.jobs.editJobLevelModal,
                'status': [{'status': 'Pending', 'value': 'pending'}, {'status': 'Publish', 'value': 'publish'}],
                search: '',
                headers: [
                    {
                        text: 'Currency Name',
                        align: 'left',
                        sortable: false,
                        value: 'currency_name'
                    },
                    {
                        text: 'Currency Symbol',
                        align: 'left',
                        sortable: false,
                        value: 'currency_symbol'
                    },
                    {
                        text: 'Status',
                        align: 'left',
                        sortable: false,
                        value: 'status'
                    },
                    {
                        text: 'Actions',
                        value: 'actions'
                    }
                ],


            }
        },
        mounted() {
            this.$store.dispatch('jobs/getJobCurrency');


        },
        computed: {
            getJobCurrency() {
                return this.$store.state.jobs.jobCurrency.currency;

            },
            getEditJobCurrency() {
                return this.$store.state.jobs.editJobCurrency;
            }
        },
        methods: {
            close() {
                this.editModal = false;
            },
            deleteJobCurrency(id) {
                this.$dialog
                    .confirm('Are you Sure You want to Delete?').then(function () {
                    this.$store.dispatch('jobs/deleteJobCurrency', id).then(function () {
                        setTimeout(() => {

                            this.$store.dispatch('jobs/getJobCurrency');
                        }, 600)
                    }.bind(this));
                }.bind(this));

            },
            editJobCurrency(id) {
                this.editModal = true;
                this.$store.dispatch('jobs/editJobCurrency', id).then(function () {
                    // setTimeout(() => {
                    //     this.editModal= this.$store.state.employer.editEmployerCityModal;
                    // },600)
                }.bind(this));
            },
            updateJobCurrency() {
                this.$store.dispatch('jobs/updateJobCurrency', this.getEditJobCurrency).then(function () {
                    this.dialog = this.$store.state.jobs.dialog;
                    // this.editModal = this.$store.state.jobs.editJobTypeModal;

                }.bind(this)).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.jobs.dialog;
                        this.$store.dispatch('jobs/getJobCurrency');
                        this.editModal =  this.$store.state.jobs.editJobCurrencyModal;

                    }, 900)
                });
            }
        }

    }
</script>

<style scoped>

</style>