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
                                        <v-text-field
                                                label="Job Level"
                                                required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                            cols="12"
                                            md="6"
                                    >
                                        <v-select :items="status" name="status" item-text="status" item-value="id"
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
        <v-row>
            <v-col col="12">
                <jobs-level-datatable></jobs-level-datatable>
            </v-col>

        </v-row>
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
                dialog: false,
                'status': [{'id': 1, 'status': 'Active'}, {'id': 0, 'status': 'Inactive'}],

            }
        },
        methods: {
            addJobLevel() {
                this.$store.dispatch('jobs/addJobLevel').then(() => {
                    this.dialog = this.$store.state.jobs.dialog;
                });
            }
        },
        name: "LocationsComponent"
    }
</script>

<style scoped>

</style>