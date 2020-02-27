<template>
    <v-container>

        <v-row>
            <v-col cols="12" md="6">
                <v-form @submit.prevent="addJobLevel">

                    <v-card>
                        <v-card-title>
                            Add Job Level
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" md="6">
                                        <v-text-field v-model="jobLevelData.jobLevelName" :counter="20"
                                                      :rules="jobLevelRules" label="Job Level"
                                                      required></v-text-field>
                                    </v-col>

                                    <v-col cols="12" md="6">
                                        <v-select v-model="jobLevelData.status" :rules="jobLevelStatusRules"
                                                  :items="status" name="status"
                                                  item-text="status" item-value="id"
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
        <jobs-level-datatable></jobs-level-datatable>

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
    import JobLevelDatatableComponent from "./JobLevelDatatableComponent";

    export default {
        components: {JobLevelDatatableComponent},
        data() {
            return {
                jobLevelRules: [
                    v => !!v || 'Job Level Name Required'
                ],
                jobLevelStatusRules: [
                    v => !!v || 'Please choose Status'
                ],
                dialog: this.$store.state.jobs.dialog,
                'status': [{'id': 1, 'status': 'Active'}, {'id': 0, 'status': 'Inactive'}],
                jobLevelData: {
                    jobLevelName: '',
                    status: '',

                }

            }
        },
        methods: {
            getJobLevel() {

            },
            addJobLevel() {
                this.$store.dispatch('jobs/addJobLevel', this.jobLevelData).then(() => {
                    this.dialog = this.$store.state.jobs.dialog;
                }).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.jobs.dialog;
                        this.$store.dispatch('jobs/getJobLevel');
                    }, 600)
                });
            }
        },

    }
</script>

<style scoped>

</style>