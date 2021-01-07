import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

import 'bootstrap/dist/css/bootstrap.min.css'
import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'

import HomeComponent from './components/pages/home/HomeComponent'
import PostComponent from './components/pages/post/PostComponent'

Vue.config.productionTip = false
Vue.use(VueRouter)

const routes = [
    {path: '/', name: 'home', component: HomeComponent},
    {path: '/post', name: 'post', component: PostComponent},
]

const router = new VueRouter({
    routes
})

new Vue({
    router,
    render: h => h(App),
}).$mount('#app')
