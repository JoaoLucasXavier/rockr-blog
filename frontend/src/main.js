import Vue from 'vue'
import App from './App.vue'
import Vuerouter from 'vue-router'

Vue.config.productionTip = false
Vue.use(Vuerouter)

new Vue({
  render: h => h(App),
}).$mount('#app')
