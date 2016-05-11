import Vue from 'vue'
import store from './vuex/store'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import { configRouter } from './route-config'
import { sync } from 'vuex-router-sync'


Vue.config.debug = true;
Vue.use(VueResource)
Vue.use(VueRouter)

Vue.transition('googletransition',{
	enterClass: 'fadeIn',
	leaveClass: 'fadeOut'
})

const router = new VueRouter({
  //history: true,
  saveScrollPosition: true,
  transitionOnLoad: true
})
sync(store, router)
configRouter(router)



const App = Vue.extend(require('./app.vue'))
router.start(App,'#app')