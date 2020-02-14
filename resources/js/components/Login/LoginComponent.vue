<template>
    <div>
        <div class="form-group">
            <label for="avatar" class="control-label">Avatar</label>
            <input type="file" v-on:change="fileChange" id="avatar">
            <div class="help-block">
                <router-link to="/admins/category">
                    Dashboard
                </router-link>
            </div>
        </div>

        <div class="col-md-6">
            <input type="hidden" name="avatar_id">
            <img class="avatar" title="Current avatar">
        </div>
    </div>


</template>

<script>
    export default {
        name: "LoginComponent"
    }
</script>

<style scoped>

</style>