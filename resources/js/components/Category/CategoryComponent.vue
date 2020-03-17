<template>

    <v-container>

        <v-row>
            <v-col md="4">
                <v-card>
                    <v-card-title>Add Categories</v-card-title>
                    <v-form id="form" @submit.prevent="addCategories">
                        <v-text-field name="category_name" label="Name"
                                      required></v-text-field>
                        <v-select v-model="parent_selected" :items="lists" name="parent_id" item-value="id"
                                  item-text="category_name"
                                  label="Select Parent Category">
                        </v-select>
                        <v-select :items="status" name="status" item-text="status" item-value="id"
                                  label="Status"></v-select>
                        <v-btn type="submit" small color="primary">Save</v-btn>
                    </v-form>
                </v-card>
            </v-col>
            <v-col md="8">
                <!--<v-progress-linear-->
                <!--:active="isLoading"-->
                <!--:indeterminate="true"-->
                <!--class="ma-0"-->
                <!--height="50"-->
                <!--style="top: -2px;"-->
                <!--&gt;Loading...-->
                <!--</v-progress-linear>-->
                <v-text-field
                        v-model="search"
                        label="Search"
                        single-line
                        hide-details
                ></v-text-field>
                <v-data-table
                        :headers="headers"
                        :items="lists"
                        :items-per-page="5"
                        class="elevation-1"
                        :search="search"
                        :loading="isLoading"
                        :sort-desc="[false, true]">
                    <template v-slot:item.action="{ item }">
                        <v-icon dark small v-on:click="editCategoryModal(item.id)">fa fa-edit</v-icon>
                        <v-icon dark small v-on:click="deleteCategories(item.id)">fa fa-trash</v-icon>
                    </template>
                    <template v-slot:item.status="{item}">
                        <v-icon v-if="item.status==1" dark small>fa fa-check</v-icon>
                        <v-icon v-else>fa fa-times</v-icon>
                    </template>

                </v-data-table>
            </v-col>
        </v-row>
        <v-dialog v-model="dialog" max-width="500px">
            <v-form id="edit_category" @submit.prevent="updateCategories">

                <v-card>
                    <v-card-title>
                        <span class="headline"></span>
                    </v-card-title>

                    <v-card-text>
                        <v-container>
                            <v-text-field v-model="info.category_name" name="category_name" label="Name"
                                          required></v-text-field>
                            <v-select dense v-model="info.parent_category == null? '':info.parent_category.id"
                                      :items="info.parent_categories"
                                      name="parent_id" item-value="id"
                                      item-text="category_name"
                                      label="Select Parent Category">

                            </v-select>
                            <v-select v-model="info.status" :items="status" name="status" item-text="status"
                                      item-value="id"
                                      label="Status"></v-select>

                        </v-container>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn text color="blue darken-1" @click="close">Cancel</v-btn>
                        <v-btn color="blue darken-1" type="submit" text>Save</v-btn>
                    </v-card-actions>
                </v-card>
            </v-form>

        </v-dialog>
    </v-container>


</template>

<script>
    import Loading from 'vue-loading-overlay';
    // Import stylesheet
    import 'vue-loading-overlay/dist/vue-loading.css';


    export default {


        components: {
            Loading

        },

        data() {
            return {

                isLoading: false,
                fullPage: true,
                dialog: false,
                'lists': [],
                'parent_selected': '',
                'status': [{'id': 1, 'status': 'Active'}, {'id': 0, 'status': 'Inactive'}],
                search: '',

                headers: [
                    {text: 'Category Name', align: 'left', sortable: true, value: 'category_name',},
                    {text: 'Parent Category', value: 'parent_id'},
                    {text: 'Status', value: 'status'},
                    {text: 'Actions', value: 'action', sortable: false}

                ],
                info: {
                    category_name: '',
                    status: '',
                    parent_categories: [],
                    parent_category: '',
                    category: ''
                },


            }
        },

        created() {
            this.getCategories();
        },
        updated() {

        },
        mounted() {
            Event.$on('CategoryUpdated', function () {
                this.getCategories();
                this.dialog = false;


            }.bind(this));
            Event.$on('taskCreated', function () {
                this.getCategories();

            }.bind(this));
        },

        methods: {

            close() {
                this.dialog = false

            },
            addCategories() {
                this.isLoading = true;

                var form = document.getElementById('form');
                var formData = new FormData(form);
                console.log(formData);
                axios.post('/admin/category', formData)

                    .then(function (response) {
                        Event.$emit('taskCreated');

                        toastr.success(response.data.message);


                    }).catch(error => {

                    if (error.response.status == 422) {
                        this.isLoading = false;

                        $.each(error.response.data.errors, function (key, value) {
                            toastr.warning(value);

                        });

                    }
                }).finally(function () {


                });
            },
            // getCategories() {
            //     axios.get('/admins/category').then(response => this.lists = response.data.category)
            //         .catch(error => {
            //             console.log(error);
            //         });
            //     return true;
            // }
            getCategories() {
                // let loader = this.$loading.show({
                //     // Optional parameters
                //     container: this.fullPage ? null : this.$refs.formContainer,
                //     canCancel: true,
                //     onCancel: this.onCancel,
                // });
                this.isLoading = true;

                axios.get('/admin/category').then(function (response) {
                    this.isLoading = false;
                    this.lists = response.data.category;


                }.bind(this))
                    .catch(error => {
                        console.log(error);
                    });

                // if (Event.$on('taskCreated', () => {
                //     axios.get('/admins/category').then(function (response) {
                //         this.lists = response.data.category;
                //
                //     }.bind(this));
                // })) ;
                if (Event.$on('taskCreated', function () {
                    axios.get('/admin/category').then(function (response) {
                        this.lists = response.data.category;
                        this.isLoading = false

                    }.bind(this));
                }.bind(this))) ;
                return true;

            },

            deleteCategories(id) {
                this.$dialog
                    .confirm('Are you Sure You want to Delete, Deleting Category will cause you to delete all the posts')
                    .then(function () {
                        axios.delete('/admin/category/' + id).then(function (response) {
                            Event.$emit('taskCreated');
                            if (response.data.status == 'success') {

                                toastr.success(response.data.message);
                            }

                        }).catch(error => {
                            if (error.response.status == 422) {
                                console.log(error.response.data.errors);
                                $.each(error.response.data.errors, function (key, value) {
                                    toastr.warning(value);

                                });
                            }
                            if (error.response.status == 403) {
                                toastr.error(error.response.data.message);
                            }

                        });
                    });


            },

            editCategoryModal(id) {
                axios.get(`/admin/category/${id}/edit`).then(function (response) {
                    this.info.category_name = response.data.category.category_name;
                    this.info.parent_categories = response.data.categories;
                    this.info.parent_category = response.data.parent_category;
                    this.info.status = response.data.category.status;
                    this.info.category = response.data.category;
                }.bind(this));
                this.dialog = true;
            },


            updateCategories() {

                var form = document.getElementById('edit_category');
                var formData = new FormData(form);
                formData.append("_method", "put");

                axios({
                    method: "POST",
                    data: formData,
                    url: `/admin/category/${this.info.category.id}`
                }).then(function (response) {
                    toastr.success(response.data.message);

                    Event.$emit('CategoryUpdated');

                }).catch(error => {
                    if (error.response.status == 422) {
                        this.isLoading = false;

                        $.each(error.response.data.errors, function (key, value) {
                            toastr.warning(value);

                        });

                    }
                }).finally(function () {


                });
            },
        }
    }
</script>

<style scoped>

</style>