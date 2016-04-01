import { 
          TOGGLESCHEME, 
          TOGGLELOCALE,
          USERAUTHENTICATED,
          ISUSERAUTHENTICATED,
          USERPLAYLIST,
          RANDOMPLAYLIST
} from './mutation-types'

export default {
  [TOGGLESCHEME] (state){
    state.scheme = !state.scheme
  },
  [TOGGLELOCALE] (state){
    state.shortlocale = ( state.shortlocale == 'nl' )? 'en':'nl'
    state.longlocale = ( state.longlocale == 'english' )? 'nederlands':'english'
  },

  [USERAUTHENTICATED] (state, response){
    //console.log( state )
    state.auth.user = response.user
    state.auth.user.isLoggedIn = true
    state.auth.user.roles = response.roles
    localStorage.setItem( 'auth', JSON.stringify(state.auth) )
  },

  [ISUSERAUTHENTICATED] (state){
    if( localStorage.getItem("auth") !== null ){
      state.auth = JSON.parse(localStorage.getItem('auth'))
    }
  },

  [USERPLAYLIST] (state){
    if( localStorage.getItem("queue") !== null ){
      state.music.queue.songs = JSON.parse(localStorage.getItem('queue'))
    }
  },
  [RANDOMPLAYLIST] (state, queue){
    //console.log( state )
    state.music.queue.songs = queue
    localStorage.setItem( 'queue', JSON.stringify(state.music.queue.songs) )
  },
}