<template>
    <v-container>

        <v-row>
            <v-col cols="12" md="12">
                <v-form @submit.prevent="">

                    <v-card>
                        <v-card-title>
                            Add Job Currency
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" md="4">
                                        <v-text-field :counter="20"
                                                      :rules="currencyRules" label="Currency Name"
                                                      required></v-text-field>
                                    </v-col>
                                    <v-col cols="12" md="4">
                                        <v-text-field :counter="1"
                                                      :rules="jobLevelRules" label="Currency Symbol"
                                                      required></v-text-field>
                                    </v-col>

                                    <v-col cols="12" md="4">
                                        <v-select
                                                :items="status" name="status"
                                                item-text="status" item-value="value"
                                                label="Status"></v-select>
                                    </v-col>


                                </v-row>
                            </v-container>

                        </v-card-text>
                        <v-card-actions>
                            <v-btn type="submit">Add</v-btn>

                        </v-card-actions>
                    </v-card>
                </v-form>

            </v-col>

        </v-row>
        <jobs-level-datatable></jobs-level-datatable>

        <v-row>

        </v-row>
        <v-dialog v-model="dialog" hide-overlay persistent width="300">
            <v-card color="primary" dark>
                <v-card-text>
                    Please stand by
                    <v-progress-linear
                            indeterminate
                            color="white"
                            class="mb-0"
                    ></v-progress-linear>
                </v-card-text>
            </v-card>
        </v-dialog>

    </v-container>

</template>

<script>
    export default {
        name: "JobCurrencyComponent",

        data() {
            return {
                currencyRules: [
                    v => !!v || 'Please insert currency name'
                ],
                'status': [{'status': 'Pending', 'value': 'pending'}, {'status': 'Publish', 'value': 'publish'}],

            }
        },

    }
</script>

<style scoped>

</style>