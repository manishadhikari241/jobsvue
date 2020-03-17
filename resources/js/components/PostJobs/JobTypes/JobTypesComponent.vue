<template>
    <v-container>

        <v-row>
            <v-col cols="6">
                <v-card>
                    <v-form @submit.prevent="addJobTypes">

                        <v-card-title>
                            Add Job Types
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" md="6">
                                        <v-text-field
                                                :rules="JobTypesRules"
                                                :counter="20"
                                                label="Job Type"
                                                required
                                                v-model="jobData.jobTypeName"
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                            cols="12"
                                            md="6"
                                    >

                                        <v-select v-model="jobData.status" :items="status" item-text="status"
                                                  label="Status"
                                                  item-value="id"></v-select>
                                    </v-col>


                                </v-row>
                            </v-container>


                        </v-card-text>
                        <v-card-actions>
                            <v-btn type="submit">Add</v-btn>
                        </v-card-actions>
                    </v-form>

                </v-card>
            </v-col>

        </v-row>
        <job-type-datatable></job-type-datatable>


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

    import {mapState} from 'vuex'

    export default {
        data() {
            return {
                displayData: '',
                dialog: this.$store.state.jobs.dialog,
                jobData: {
                    jobTypeName: '',
                    status: ''
                },
                'status': [{'id': 1, 'status': 'Active'}, {'id': 0, 'status': 'Inactive'}],

                JobTypesRules: [
                    v => !!v || 'Name is required',
                    // v => v.length <= 10 || 'Name must be less than 10 characters',
                ],

            }
        },


        methods: {

            addJobTypes() {
                this.$store.dispatch('jobs/addJobTypes', this.jobData).then(function () {
                    this.dialog = this.$store.state.jobs.dialog;

                }.bind(this)).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.jobs.dialog;
                        this.$store.dispatch('jobs/getJobTypes');
                    }, 600)
                });
            }
        }
    }
</script>

<style scoped>

</style>