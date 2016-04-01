<script>
import store from './vuex/store'
import resizeMixin from 'vue-resize-mixin'
import * as actions from './Vuex/actions'

export default {

  components : {
    languageswitcher : require('./components/widgets/languageswitcher.vue'),
    menu : require('./components/partials/menu.vue'),
  },

  data: function() {
      return {}
  },

  methods: {
      onResize: function(event) {
        console.log( event.width )
        console.log( event.height )

      }
  },
  mixins: [resizeMixin],

  events: {
      'resize': 'onResize'
  },

  ready: function() {},

  store,
  
  vuex: {
    actions: actions
  },
}
</script>