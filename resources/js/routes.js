import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Dashboard from "./components/projects/DashboardComponent";
import Home from "./components/projects/HomeComponent";
import Users from "./components/admin/UsersComponent";
import Projects from './components/projects/ProjectsComponent.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            name: '',
            path: '/',
            component: Dashboard
        },
        {
            name: 'home',
            path: '/home',
            component: Home
        },
        {
            name: 'dashboard',
            path: '/dashboard',
            component: Dashboard
        },
        {
            name: 'project-list',
            path: '/projects',
            component: Projects
        },
        {
            name: 'user-list',
            path: '/admin/users',
            component: Users
        }
    ]
});

export default router;
