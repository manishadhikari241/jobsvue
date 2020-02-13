<template>

    <v-col cols="12">


        <!--<v-form @submit.prevent="save_settings">-->
        <v-card>
            <v-card-title>
                <h1>Site Setting</h1>
            </v-card-title>
                <v-tabs color="cyan" dark slider-color="yellow">
                    <v-tab ripple>
                       General
                    </v-tab>
                    <v-tab ripple>
                        Home
                    </v-tab>
                    <v-tab>
                        About
                    </v-tab>
                    <v-tab-item>
                        <v-card flat>
                            <v-card-text>
                                {{settings}}
                                <v-text-field v-model="data.site_title" label="Site Title"></v-text-field>
                                <!--<v-text-field v-bind:value="settings.site_title" label="Site Description"></v-text-field>-->
                            </v-card-text>
                            <v-divider></v-divider>
                                             </v-card>
                    </v-tab-item>
                    <v-tab-item>
                        <v-card flat>
                            <v-card-text>Contents for Item 2 go here</v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item>
                        asd
                    </v-tab-item>
                </v-tabs>
            <v-card-actions>
                <v-btn @click="save_settings">Save</v-btn>
            </v-card-actions>

        </v-card>
        <!--</v-form>-->

        <div class="text-center">

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
        </div>

    </v-col>

</template>

<script>


    export default {

        name: "SettingComponent",
        data() {
            return {
                dialog: false,
                data: {
                    site_title: "",
                },
            }

        },
        created() {
            this.get_settings();
        },

        computed: {
            settings() {
                this.data.site_title = this.$store.state.settings.settings.site_title;
            }
        }
        ,

        methods: {
            save_settings() {
                this.$store.dispatch('settings/updateSettings', this.data).then(() => {

                    this.dialog = this.$store.state.settings.dialog;

                }).finally(() => {
                    setTimeout(() => {
                        this.dialog = this.$store.state.settings.dialog;

                    }, 900);
                })

            }
            ,
            get_settings() {
                this.$store.dispatch('settings/getSettings');

            }
        }
        ,


    }
</script>

<style scoped>

</style>