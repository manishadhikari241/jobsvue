<template>
    <v-col cols="12">
        <v-card>
            <v-card-title>
                Post Jobs
            </v-card-title>

            <v-card-text>
                <v-form v-model="valid">
                    <v-container>
                        <v-row>
                            <v-col cols="12" md="4">
                                <v-text-field
                                        v-model="firstname"
                                        :rules="nameRules"
                                        :counter="10"
                                        label="Job Title"
                                        required
                                ></v-text-field>
                            </v-col>

                            <v-col cols="12" md="4">
                                <v-select
                                        :items="getlocation"
                                        v-model="setlocation"
                                        label="Select Location"
                                        class="input-group--focused"
                                        item-value="text"
                                ></v-select>
                            </v-col>

                            <v-col cols="12" md="4">
                                <v-select
                                        :items="getCategory"
                                        v-model="setCategory"
                                        label="Select Category/Industry"
                                        class="input-group--focused"
                                        item-value="text"
                                ></v-select>
                            </v-col>


                        </v-row>
                        <v-row>
                            <v-col cols="12" md="6">
                                <v-label>Job Short Description</v-label>
                                <rich-text-editor :height="100" v-model="savejobs.text"/>


                            </v-col>

                        </v-row>
                    </v-container>
                </v-form>

            </v-card-text>
        </v-card>

    </v-col>

</template>

<script>

    export default {

        data() {
            return {
                savejobs: {
                    text: '',
                },


                nameRules: [
                    v => !!v || 'Name is required',
                    // v => v.length <= 10 || 'Name must be less than 10 characters',
                    v => v.length < 15 || 'Location Cannot be greater than 15 words'
                ],
                emailRules: [
                    v => !!v || 'E-mail is required',
                    v => /.+@.+/.test(v) || 'E-mail must be valid',
                ],
                getlocation: [1, 2],
                setlocation: '',
                getCategory: ['jobs', 'kitchen'],
                setCategory: '',

            }
        },

        name: "LocationsComponent",

        methods: {}
    }
</script>

<style scoped>

</style>