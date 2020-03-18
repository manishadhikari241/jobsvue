<template>

    <v-row>
        <v-dialog v-model="editModal" max-width="500px">
            <v-form @submit.prevent="updateEmployerCity">
                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>
                            <v-col cols="12">
                                <v-text-field :counter="30" v-model="getEditEmployerCity.city_name"
                                              label="City Name"
                                              required></v-text-field>
                            </v-col>
                            <v-col cols="12">
                                <v-text-field :counter="5" v-model="getEditEmployerCity.zip_code"
                                              label="Zip Code"
                                              required></v-text-field>
                            </v-col>

                            <v-col cols="12">
                                <v-select
                                        :items="status" name="status" v-model="getEditEmployerCity.status"
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
                    :items="getEmployerCity"
                    :search="search"
                    class="elevation-1">
                <template v-slot:item.actions="{item}">
                    <v-icon dark small v-on:click="editEmployerCity(item.city_id)">fa fa-edit</v-icon>
                    <v-icon dark small v-on:click="deleteEmployerCity(item.city_id)">fa fa-trash</v-icon>
                </template>


            </v-data-table>
        </v-col>

    </v-row>
</template>

<script>
    export default {
        data() {
            return {
                editModal: this.$store.state.jobs.editJobLevelModal,
                'status': [{'status': 'Pending', 'value': 'pending'}, {'status': 'Publish', 'value': 'publish'}],
                search: '',
                headers: [
                    {
                        text: 'City Name',
                        align: 'left',
                        sortable: false,
                        value: 'city_name'
                    },
                    {
                        text: 'Zip Code',
                        align: 'left',
                        sortable: false,
                        value: 'zip_code'
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
            this.$store.dispatch('employer/getEmployerCity');


        },
        computed: {
            getEmployerCity() {
                return this.$store.state.employer.employer_city.city;

            },
            getEditEmployerCity() {
                return this.$store.state.employer.editEmployerCity;
            }
        },
        methods: {
            close() {
                this.editModal = false;
            },
            deleteEmployerCity(id) {
                this.$dialog
                    .confirm('Are you Sure You want to Delete?').then(function () {
                    this.$store.dispatch('employer/deleteEmployerCity', id).then(function () {
                        setTimeout(() => {

                            this.$store.dispatch('employer/getEmployerCity');
                        }, 600)
                    }.bind(this));
                }.bind(this));

            },
            editEmployerCity(id) {
                this.editModal = true;
                this.$store.dispatch('employer/editEmployerCity', id).then(function () {
                    // setTimeout(() => {
                    //     this.editModal= this.$store.state.employer.editEmployerCityModal;
                    // },600)
                }.bind(this));
            },
            updateEmployerCity() {
                this.$store.dispatch('employer/updateEmployerCity', this.getEditEmployerCity).then(function () {
                    this.dialog = this.$store.state.employer.dialog;
                    // this.editModal = this.$store.state.jobs.editJobTypeModal;

                }.bind(this)).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.employer.dialog;
                        this.$store.dispatch('employer/getEmployerCity');
                        this.editModal = false;

                    }, 900)
                });
            }
        }

    }
</script>

<style scoped>

</style>