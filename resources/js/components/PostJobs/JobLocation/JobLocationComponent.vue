<template>
    <v-container>

        <v-row>
            <v-col cols="6">
                <v-card>
                    <v-card-title>
                        Add Locations
                    </v-card-title>

                    <v-card-text>
                        <v-form>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" md="4">
                                        <v-text-field
                                                :rules="nameRules"
                                                :counter="10"
                                                label="Zone"
                                                required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                            cols="12"
                                            md="4"
                                    >
                                        <v-text-field
                                                :rules="nameRules"
                                                :counter="15"
                                                label="Last name"
                                                required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                            cols="12"
                                            md="4"
                                    >
                                        <v-text-field
                                                :rules="emailRules"
                                                label="E-mail"
                                                required
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-form>

                    </v-card-text>
                </v-card>
            </v-col>

        </v-row>
        <v-row>
            <v-col col="12">
                <location-datatable-component></location-datatable-component>
            </v-col>

        </v-row>
        <v-row>

        </v-row>


    </v-container>


</template>

<script>
    import LocationDatatableComponent from "../JobLevel/JobLevelDatatableComponent";

    export default {
        components: {LocationDatatableComponent},
        data() {
            return {
                nameRules: [
                    v => !!v || 'Name is required',
                    // v => v.length <= 10 || 'Name must be less than 10 characters',
                ],
                emailRules: [
                    v => !!v || 'E-mail is required',
                    v => /.+@.+/.test(v) || 'E-mail must be valid',
                ],
            }
        },
        name: "LocationsComponent"
    }
</script>

<style scoped>

</style>