import Vue from 'vue'
import store from './vuex/store'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import { configRouter } from './route-config'
import { sync } from 'vuex-router-sync'


Vue.config.debug = true;
Vue.use(VueResource)
Vue.use(VueRouter)

const router = new VueRouter({
  //history: true,
  saveScrollPosition: true,
  transitionOnLoad: true
})
sync(store, router)
configRouter(router)

Vue.transition('googletransition', {
	enterClass: 'fadeInUp',
	leaveClass: 'fadeOutDown'
})
Vue.transition('googletransition2', {
	enterClass: 'fadeIn',
	leaveClass: 'fadeOut'
})

const App = Vue.extend(require('./app.vue'))
router.start(App,'#app')