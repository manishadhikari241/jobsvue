<template>

    <v-row>
        <v-dialog v-model="editModal" max-width="500px">
            <v-form @submit.prevent="">

                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>

                    <v-card-text>
                        <v-container>
                            <v-text-field label="Job Type"
                                          required></v-text-field>

                            <v-select
                                    label="Status"></v-select>

                        </v-container>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn text color="blue darken-1">Cancel</v-btn>
                        <v-btn color="blue darken-1" type="submit" text>Update</v-btn>
                    </v-card-actions>
                </v-card>
            </v-form>

        </v-dialog>

        <v-col col="12">
            <v-data-table
                    :headers="headers"
                    :items="getTypes"
                    :search="search"
                    :loading="isLoading"
                    class="elevation-1">
                <template v-slot:item.actions="{item}">
                    <v-icon dark small v-on:click="editJobTypes(item.job_type_id)">fa fa-edit</v-icon>
                    <v-icon dark small v-on:click=" deleteJobTypes(item.job_type_id)">fa fa-trash</v-icon>
                </template>

            </v-data-table>
        </v-col>

    </v-row>

</template>

<script>
    export default {
        data() {
            return {
                search: '',
                editModal: false,
                isLoading: false,
                headers: [
                    {
                        text: 'Job Level',
                        align: 'left',
                        sortable: false,
                        value: 'job_type_name'
                    },
                    {
                        text: 'Actions',
                        value: 'actions'
                    }
                ],

            }
        },
        mounted() {
            this.$store.dispatch('jobs/getJobTypes');
        },
        computed: {
            getTypes() {
                return this.$store.state.jobs.jobtypes.job_type;
            }
        },
        methods: {
            deleteJobTypes(id) {
                this.$dialog
                    .confirm('Are you Sure You want to Delete, Deleting Category will cause you to delete all the posts').then(function () {
                    this.$store.dispatch('jobs/deleteJobTypes', id).then(function () {
                        setTimeout(() => {
                            this.$store.dispatch('jobs/getJobTypes');
                        }, 600)
                    }.bind(this));
                }.bind(this));
            },
            editJobTypes(id) {
                this.editModal = true;
                this.$store.dispatch('jobs/editJobTypes', id);
            }
        }
    }
</script>

<style scoped>

</style>