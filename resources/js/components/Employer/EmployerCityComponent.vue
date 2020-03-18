<template>
    <v-container>

        <v-row>
            <v-col cols="12" md="12">
                <v-form @submit.prevent="addEmployerCity">

                    <v-card>
                        <v-card-title>
                            Add Employer City
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" md="4">
                                        <v-text-field :counter="30" v-model="employerCityData.city_name"
                                                      label="City Name"
                                                      required></v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="4">
                                        <v-text-field :counter="5" v-model="employerCityData.zip_code"
                                                      label="Zip Code"
                                                      required></v-text-field>
                                    </v-col>

                                    <v-col cols="12" md="4">
                                        <v-select
                                                :items="status" name="status" v-model="employerCityData.status"
                                                item-text="status" item-value="value"
                                                label="Status"></v-select>
                                    </v-col>


                                </v-row>
                            </v-container>

                        </v-card-text>
                        <v-card-actions>
                            <v-btn type="submit">Add</v-btn>

                        </v-card-actions>
                    </v-card>
                </v-form>

            </v-col>

        </v-row>
        <employer-city-datatable></employer-city-datatable>
        <v-row>

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
        name: "EmployerCityComponent",

        data() {
            return {
                'status': [{'status': 'Pending', 'value': 'pending'}, {'status': 'Publish', 'value': 'publish'}],
                dialog: this.$store.state.employer.dialog,
                'employerCityData': {
                    'city_name': '',
                    'zip_code': '',
                    'status': ''
                }
            }
        },
        methods: {
            addEmployerCity() {
                this.$store.dispatch('employer/addEmployerCity', this.employerCityData).then(function () {
                    this.dialog = this.$store.state.employer.dialog;

                }.bind(this)).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.employer.dialog;
                        this.$store.dispatch('employer/getEmployerCity');

                    }, 500)
                });
            }
        }
    }
</script>

<style scoped>

</style>