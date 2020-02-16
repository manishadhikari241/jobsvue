<template>
    <!-- Content Header (Page header) -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add New</h5>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="form" role="form" @submit.prevent="addCategories"
                                          enctype="multipart/form-data">


                                        <!-- general form elements -->
                                        <div class="box">
                                            <div class="box-header with-border">

                                            </div>
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="category_name">Category Name</label>

                                                    <input id="category_name" class="form-control" placeholder="Name"
                                                           name="category_name"
                                                           type="text">

                                                </div>

                                                <div class="form-group mb-none">
                                                    <label for="parent">Parent Category</label>

                                                    <select name="parent_id" id="parent" class="form-control select2">
                                                        <option value="0">Select Parent Category</option>
                                                        <option v-for="list in lists" v-bind:value="list.id">
                                                            {{list.category_name}}

                                                        </option>


                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="0">InActive</option>

                                                    </select>
                                                </div>


                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <input class="btn btn-danger btn-xs pull-right" type="submit"
                                                       value="Save">
                                            </div>
                                        </div>
                                        <!-- /.box -->                </form>
                                </div>

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Categories</h5>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <section class="content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header">

                                        </div>
                                        <div class="box-body">
                                            <loading :active.sync="isLoading"
                                                     :can-cancel="true"
                                                     :on-cancel="onCancel"
                                                     :is-full-page="fullPage"></loading>
                                            <table id="example" class="table table-bordered table-striped datatable"
                                                   ref="formContainer">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Parent</th>
                                                    <th>Created at</th>
                                                    <th>Status</th>
                                                    <th class="sorting-false">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr v-for="list,sn in lists">
                                                    <td>{{++sn}}</td>
                                                    <td>{{list.category_name}}</td>
                                                    <td>{{list.parent_id}}</td>
                                                    <td>{{list.created_at}}</td>
                                                    <td v-if="list.status==0">
                                                        <button class="btn btn-danger btn btn-xs "><i
                                                                class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                    <td v-else>
                                                        <button class="btn btn-success btn btn-xs "><i
                                                                class="fa fa-check"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button v-on:click="deleteCategories(list.id)"
                                                                    class="btn btn-xs btn btn-danger" type="submit">
                                                                <i
                                                                        class="fa fa-times"></i></button>
                                                            <button class="btn btn-xs btn btn-primary"
                                                                    v-on:click="editCategoryModal(list.id)"
                                                                    data-toggle="modal" data-target="#modalEdit">
                                                                <i class="fa fa-edit"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>

                                                <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th class="sorting-false">Parent</th>
                                                    <th>Created at</th>
                                                    <th>Status</th>
                                                    <th class="sorting-false">Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>

                        <!-- Modal -->
                        <!-- Modal -->
                        <!-- ./card-body -->

                        <CategoryEditModal v-if="showEdit" v-bind:info="info"/>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
            <!-- /.col -->
        </div>


    </div>


</template>

<script>

    import CategoryEditModal from './CategoryEditModal';

    import Loading from 'vue-loading-overlay';
    // Import stylesheet
    import 'vue-loading-overlay/dist/vue-loading.css';


    export default {


        components: {
            CategoryEditModal, Loading

        },

        data() {
            return {
                isLoading: false,
                fullPage: true,
                showEdit: false,
                'lists': [],
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
        mounted() {
            Event.$on('CategoryUpdated', function () {
                this.getCategories();

            }.bind(this));

        },

        methods: {
            addCategories() {
                this.isLoading = true;

                var form = document.getElementById('form');
                var formData = new FormData(form);

                axios.post('/admins/category', formData)

                    .then(function (response) {
                        // console.log(this.getCategories());
                        Event.$emit('taskCreated');

                        toastr.success(response.data.message);


                    }).catch(error => {
                    if (error.response.status == 422) {
                        this.isLoading = false;

                        console.log(error.response.data.errors);
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

                // simulate AJAX
                axios.get('/admins/category',).then(function (response) {


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
                    axios.get('/admins/category').then(function (response) {
                        this.lists = response.data.category;
                        this.isLoading=false

                    }.bind(this));
                }.bind(this))) ;
                return true;

            },

            deleteCategories(id) {
                this.$dialog
                    .confirm('Are you Sure You want to Delete, Deleting Category will cause you to delete all the posts')
                    .then(function (dialog) {
                        axios.delete('/admins/category/' + id).then(function (response) {
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
                axios.get(`/admins/category/${id}/edit`).then(function (response) {
                    this.info.category_name = response.data.category.category_name;
                    this.info.parent_categories = response.data.categories;
                    this.info.parent_category = response.data.parent_category;
                    this.info.status = response.data.category.status;
                    this.info.category = response.data.category;
                }.bind(this));
                this.showEdit = true;


            },


        }
    }
</script>

<style scoped>

</style>