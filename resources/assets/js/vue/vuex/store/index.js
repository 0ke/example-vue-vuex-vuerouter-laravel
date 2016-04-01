import Vue from 'vue'
import Vuex from 'vuex'
import mutations from '../mutations'

Vue.use(Vuex)

const state = {
  history: [],
  scheme : false,
  shortlocale : 'nl',
  longlocale : 'english',
  auth : { user : { isLoggedIn: false } },
  music : {
    queue: {
      songs: [],
      current: null
    },
    song: {},
    prefs: {
      volume: 7,
      notify: true,
      repeatMode: 'NO_REPEAT',
      showExtraPanel: true,
      confirmClosing: false,
      equalizer: {
          preamp: 0,
          gains: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
      }
    }
  }
}

const store = new Vuex.Store({
  state,
  mutations
})

if (module.hot) {
  module.hot.accept(['../mutations'], () => {
    const mutations = require('../mutations').default
    store.hotUpdate({
      mutations
    })
  })
}

export default store