import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

import PostComponent from './components/pages/post/PostComponent'
import PostListComponent from './components/pages/post-list/PostListComponent'

Vue.config.productionTip = false
Vue.use(VueRouter)

const routes = [
  { path: '/', name: 'post list', component: PostListComponent },
  { path: '/post', name: 'post', component: PostComponent },
]

const router = new VueRouter({
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
