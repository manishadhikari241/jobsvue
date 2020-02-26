const routes = [
    {
        path: '/admins', component: require('../components/app').default,
        children: [
            {
                path: 'category',
                name: 'categories',
                component: require('../components/Category/CategoryComponent').default
            },
            {
                path: 'dashboard',
                name: 'dashboard',
                component: require('../components/DashboardComponent').default
            },
            {
                path: 'settings',
                name: 'settings',
                component: require('../components/Settings/SettingComponent').default
            },
            {
                path:'locations',
                name:'locations',
                component:require('../components/PostJobs/JobLevelComponent').default
            },
            {
                path:'jobTypes',
                name:'jobTypes',
                component:require('../components/PostJobs/JobTypes/JobTypesComponent').default
            },
            {
                path: 'postjobs',
                name: 'postjobs',
                component: require('../components/PostJobs/PostJobsComponent').default
            }

        ]
    },
    {
        path: '/login', component: require('../components/Login/LoginComponent').default,

    },

];

export default routes
