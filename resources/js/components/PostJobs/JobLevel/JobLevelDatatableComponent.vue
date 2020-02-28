<template>
    <v-row>
        <v-dialog v-model="editModal" max-width="500px">
            <v-form @submit.prevent="updateJobLevel">

                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>
                            <v-text-field label="Job Type" v-model="getEditJobLevel.job_level_name"
                                          required></v-text-field>

                            <v-select v-model="getEditJobLevel.status" :items="status" item-text="status"
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
                    :items="getJobLevel"
                    :search="search"
                    class="elevation-1">
                <template v-slot:item.actions="{item}">
                    <v-icon dark small v-on:click="editJobLevel(item.job_level_id)">fa fa-edit</v-icon>
                    <v-icon dark small v-on:click="deleteJobLevel(item.job_level_id)">fa fa-trash</v-icon>
                </template>
                <template v-slot:item.status="{item}">
                    <v-icon dark small v-if="item.status==1">fa fa-check</v-icon>
                    <v-icon dark small v-else>fa fa-times</v-icon>
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
                'status': [{'id': 1, 'status': 'Active'}, {'id': 0, 'status': 'Inactive'}],

                search: '',
                headers: [

                    {
                        text: 'Job Level',
                        align: 'left',
                        sortable: false,
                        value: 'job_level_name'
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
            this.$store.dispatch('jobs/getJobLevel');
        },
        computed: {
            getJobLevel() {

                // console.log(this.$store.state.jobs.jobLevel);
                return this.$store.state.jobs.jobLevel.job_level;
            },
            getEditJobLevel() {
                return this.$store.state.jobs.editJobLevel
            }
        },
        methods: {
            close() {
                this.editModal = false;
            },
            deleteJobLevel(id) {
                this.$dialog
                    .confirm('Are you Sure You want to Delete?').then(function () {
                    this.$store.dispatch('jobs/deleteJobLevel', id).then(function () {
                        setTimeout(() => {

                            this.$store.dispatch('jobs/getJobLevel');
                        }, 600)

                    }.bind(this));
                }.bind(this));

            },
            editJobLevel(id) {
                this.editModal = true;
                this.$store.dispatch('jobs/editJobLevel', id).then(function () {
                    // setTimeout(() => {
                    //     this.editModal= this.$store.state.jobs.editJobLevelModal;
                    //     ccnsole.log(this.editModal);
                    // },600)
                }.bind(this));
            },
            updateJobLevel() {
                this.$store.dispatch('jobs/updateJobLevel', this.getEditJobLevel).then(function () {
                    this.dialog = this.$store.state.jobs.dialog;
                    this.editModal = this.$store.state.jobs.editJobTypeModal;

                }.bind(this)).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.jobs.dialog;
                        this.$store.dispatch('jobs/getJobTypes');
                        this.editModal = this.$store.state.jobs.editJobTypeModal;

                    }, 600)
                });
            }
        }

    }
</script>

<style scoped>

</style>