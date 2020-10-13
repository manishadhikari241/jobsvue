<template>
    <v-col col="12">
        <v-row>
            <v-data-table
                    :headers="headers"
                    class="elevation-1">



            </v-data-table>
        </v-row>
    </v-col>
</template>

<script>
    export default {
        name: "EmployerJobRequest",

        data() {
            return {
                headers: [
                    {
                        text: 'City Name',
                        align: 'left',
                        sortable: false,
                        value: 'city_name'
                    },
                    {
                        text: 'Zip Code',
                        align: 'left',
                        sortable: false,
                        value: 'zip_code'
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
        }
    }
</script>

<style scoped>

</style>