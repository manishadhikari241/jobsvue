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
                path: 'jobLevel',
                name: 'jobLevel',
                component: require('../components/PostJobs/JobLevel/JobLevelComponent').default
            },
            {
                path: 'jobTypes',
                name: 'jobTypes',
                component: require('../components/PostJobs/JobTypes/JobTypesComponent').default
            },
            {
                path: 'jobCurrency',
                name: 'jobCurrency',
                component: require('../components/PostJobs/JobCurrency/JobCurrencyComponent').default
            },
            {
                path: 'jobLocation',
                name: 'jobLocation',
                component: require('../components/PostJobs/JobLocation/JobLocationComponent').default
            },
            {
                path: 'postjobs',
                name: 'postjobs',
                component: require('../components/PostJobs/PostJobsComponent').default
            },
            {
                path: 'company_packages',
                name: 'company_packages',
                component: require('../components/Employer/CompanyPackagesComponent').default
            },
            {
                path: 'employer_cities',
                name: 'employer_cities',
                component: require('../components/Employer/EmployerCityComponent').default
            }

        ]
    },
    {
        path: '/login', component: require('../components/Login/LoginComponent').default,
    },


];

export default routes
