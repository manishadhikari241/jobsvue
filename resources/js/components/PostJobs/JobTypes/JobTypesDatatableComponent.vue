<template>

    <v-row>
        <v-dialog v-model="editModal" max-width="500px">
            <v-form @submit.prevent="updateJobType">

                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>

                    <v-card-text>
                        <v-container>
                            <v-text-field label="Job Type" v-model="getEditJobTypes.job_type_name"
                                          required></v-text-field>

                            <v-select v-model="getEditJobTypes.status" :items="status" item-text="status"
                                      item-value="id" label="Status"></v-select>

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
                    :items="getTypes"
                    :search="search"
                    :loading="isLoading"
                    class="elevation-1">
                <template v-slot:item.actions="{item}">
                    <v-icon dark small v-on:click="editJobTypes(item.job_type_id)">fa fa-edit</v-icon>
                    <v-icon dark small v-on:click=" deleteJobTypes(item.job_type_id)">fa fa-trash</v-icon>
                </template>
                <template v-slot:item.status="{item}">
                    <v-icon v-if="item.status==1" dark small>fa fa-check</v-icon>
                    <v-icon v-else>fa fa-times</v-icon>
                </template>

            </v-data-table>
        </v-col>

    </v-row>

</template>

<script>
    export default {
        data() {
            return {
                // getEditJobTypes:'',
                search: '',
                editModal: false,
                'status': [{'id': 1, 'status': 'Active'}, {'id': 0, 'status': 'Inactive'}],

                isLoading: false,
                headers: [
                    {
                        text: 'Job Level',
                        align: 'left',
                        sortable: false,
                        value: 'job_type_name'
                    },
                    {
                        text: 'Status',
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
            this.$store.dispatch('jobs/getJobTypes');
        },
        computed: {
            getTypes() {
                return this.$store.state.jobs.jobtypes.job_type;
            },
            getEditJobTypes() {
                return this.$store.state.jobs.editjobtypes;
            }
        },
        methods: {
            close() {
                this.editModal = false;
            },
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
            },
            updateJobType() {
                this.$store.dispatch('jobs/updateJobTypes', this.getEditJobTypes);
            }
        }
    }
</script>

<style scoped>

</style>