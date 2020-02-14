<template>
    <div>
        <div class="modal fade" id="modalEdit">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header bg-primary">
                        <h6 class="modal-title text-white font-weight-bold">Edit</h6>
                        <div class="cursor-pointer" data-dismiss="modal" title="Close">
                            <i class="fas fa-times text-white"></i>
                        </div>
                    </div>

                    <div class="modal-body">
                        <form id="edit_category" enctype="multipart/form-data" role="form"
                              @submit.prevent="updateCategories">
                            <div class="form-group">
                                <label for="category_name">Category Name </label>

                                <input id="category_name" class="form-control" placeholder="Name"
                                       v-bind:value=category.category_name
                                       name="category_name" type="text">

                            </div>

                            <div class="form-group mb-none">
                                <label for="parent">Parent Category</label>

                                <select name="parent_id" id="parent" class="form-control select2">
                                    <option value="0">Select Parent Category</option>
                                    <option v-for="parent in parent_categories"
                                            v-bind:value="parent.id" v-bind:selected="parent.id == parent_category.id">
                                        {{parent.category_name}}
                                    </option>


                                </select>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Status</label>
                                <select name="status" id="exampleInputFile" class="form-control">
                                    <option :selected="status==1" :value="1">Active</option>
                                    <option :selected="status==0" :value="0">InActive</option>

                                </select>
                            </div>
                            <div class="box-footer">
                                <input class="btn btn-danger btn-xs pull-right" type="submit"
                                       value="Save">
                                <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "CategoryEditModal",

        data() {
            return {
                lists: [],
            }
        },
        props: {
            info: {
                type: Object,

            }
        },
        created() {
            this.getCategories();
        },

        computed: {
            category() {
                return this.info.category
            },
            parent_categories() {
                return this.info.parent_categories
            },
            parent_category() {
                if (this.info.parent_category == null) {
                    return {
                        id: 0
                    }
                }
                return this.info.parent_category

            },
            status() {
                return this.info.status
            },


        },
        methods: {
            getCategories() {
                axios.get('/admins/category').then(function (response) {
                    this.lists = response.data.category;

                }.bind(this))
                    .catch(error => {
                        console.log(error);
                    });

                if (Event.$on('taskCreated', function () {
                    axios.get('/admins/category').then(function (response) {
                        this.lists = response.data.category;

                    }.bind(this));
                }.bind(this))) ;
                return true;

            },
            updateCategories() {

                var form = document.getElementById('edit_category');
                var formData = new FormData(form);
                formData.append("_method", "put");

                axios({
                    method: "POST",
                    data: formData,
                    url: `/admins/category/${this.category.id}`
                }).then(function (response) {
                    toastr.success(response.data.message);

                    Event.$emit('CategoryUpdated');

                });
            },

        }


    }
</script>

<style scoped>

</style>