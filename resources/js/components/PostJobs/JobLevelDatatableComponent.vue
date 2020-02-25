<template>
    <v-data-table
            :headers="headers"
            :items="desserts"
            :search="search"
            class="elevation-1">
        <template v-slot:item.actions="{item}">
            <v-icon dark small v-on:click="">fa fa-edit</v-icon>
            <v-icon dark small v-on:click="">fa fa-trash</v-icon>
        </template>

    </v-data-table>
</template>

<script>
    export default {
        data() {
            return {
                search:'',
                headers: [

                    {
                        text: 'Job Level',
                        align: 'left',
                        sortable: false,
                        value: 'location'
                    },
                    {
                        text: 'Actions',
                        value: 'actions'
                    }
                ],
                desserts: [
                    {
                        value: false,
                        location: 'Frozen Yogurt',

                    },

                ]
            }
        }

    }
</script>

<style scoped>

</style>