//tutte le istruzioni delle rotte vue

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

//creazione router
const router = new VueRouter({
    mode: 'history'
});

//esportazione router, per poi importarlo in front.js che inizializza vue
export default router;
