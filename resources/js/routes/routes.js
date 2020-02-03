const routes = [
    {path: '/admin/dashboard', component: require('../components/DashboardComponent').default},
    {path: '/admin/categories', component: require('../components/CategoryComponent').default},
    {path: '/admin/settings', component: require('../components/Settings/SettingComponent').default}
];
export default routes
