<template>
    <v-app id="inspire">
        <v-navigation-drawer v-model="drawer" app clipped>
            <v-list dense>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-view-dashboard</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>
                            <router-link to="/admins/dashboard">
                                Dashboard
                            </router-link>
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-settings</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>
                            <router-link to="/admins/category"> Category/Industries</router-link>

                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-group no-action>
                    <template v-slot:activator>
                        <v-list-item-action>
                            <v-icon>mdi-settings</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Manage Jobs</v-list-item-title>
                        </v-list-item-content>
                    </template>

                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                <router-link to="/admins/locations">Add Locations</router-link>
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                <router-link to="/admins/jobTypes">Job Types</router-link>
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                <router-link to="/admins/postjobs">Post Jobs</router-link>
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>

                </v-list-group>
                <v-list-group no-action>
                    <template v-slot:activator>
                        <v-list-item-action>
                            <v-icon>mdi-settings</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Employer Zone</v-list-item-title>
                        </v-list-item-content>
                    </template>

                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                Employer Requests
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                Employer Jobs Requests
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>

                </v-list-group>
                <v-list-group no-action>
                    <template v-slot:activator>
                        <v-list-item-action>
                            <v-icon>mdi-settings</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Candidate Zone</v-list-item-title>
                        </v-list-item-content>
                    </template>

                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                Candidate Hire Requests
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                asd
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>

                </v-list-group>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-settings</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>
                            Users
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-settings</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>
                            <router-link to="/admins/settings">Settings</router-link>
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-settings</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>
                            Job Requests
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-settings</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>
                            Location SLides
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-group no-action>
                    <template v-slot:activator>
                        <v-list-item-action>
                            <v-icon>mdi-settings</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Admin</v-list-item-title>
                        </v-list-item-content>
                    </template>

                    <v-list-item link>

                        <v-list-item-content>
                            <v-list-item-title>
                                Location SLides
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>

                </v-list-group>

            </v-list>

        </v-navigation-drawer>
        <v-app-bar app clipped-left>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"/>
            <v-toolbar-title>Free Jobs Portal</v-toolbar-title>
        </v-app-bar>
        <v-content>
            <router-view></router-view>
        </v-content>

        <v-footer app>
            <span>Next Nepal&copy; 2019</span>
        </v-footer>
    </v-app>
</template>

<script>
    export default {
        props: {
            source: String,
        },
        data: () => ({
            drawer: null,
        }),
        created() {
            this.$vuetify.theme.dark = true
        },
    }
</script>