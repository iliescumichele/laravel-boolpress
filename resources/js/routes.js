//tutte le istruzioni delle rotte vue

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

//importo i componenti delle rotte
import HomeComp from './components/pages/HomeComp';
import BlogComp from './components/pages/BlogComp';
import AboutComp from './components/pages/AboutComp';
import ContattiComp from './components/pages/ContattiComp';

//creazione router
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: 'HomeComp'
        },
        {
            path: '/about',
            name: 'about',
            component: 'AboutComp'
        },
        {
            path: '/contatti',
            name: 'contatti',
            component: 'ContattiComp'
        },
        {
            path: '/blog',
            name: 'blog',
            component: 'BlogComp'
        },
    ]
});

//esportazione router, per poi importarlo in front.js che inizializza vue
export default router;
