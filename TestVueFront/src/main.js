import {createApp} from 'vue'
import App from './App.vue'

import './assets/main.css'
import {createPinia} from 'pinia'
import routes from "@/routers";
import axios from "axios";
import VueAxios from "vue-axios";
import {createRouter, createWebHashHistory} from 'vue-router';

const pinia = createPinia();

const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
})

createApp(App)
    .use(pinia)
    .use(VueAxios, axios)
    .use(router)
    .mount('#app')
