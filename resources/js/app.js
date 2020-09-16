/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './components/projects/HomeComponent.vue';
import Dashboard from './components/ExampleComponent.vue';
import Projects from './components/projects/ProjectsComponent.vue';

//
// let routes = [
//     { path: '/home', component: require('./components/projects/HomeComponent.vue').default },
//     { path: '/dashboard', component: require('./components/ExampleComponent.vue').default },
//     { path: '/projects', component: require('./components/projects/ProjectsComponent.vue').default }
// ]

const routes = [
    {
        name: '',
        path: '/',
        component: Home
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
        name: 'projects',
        path: '/projects',
        component: Projects
    }
];

// Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    mode:'history',
    routes // short for `routes: routes`
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('projects-list-component', require('./components/projects/ProjectsComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
