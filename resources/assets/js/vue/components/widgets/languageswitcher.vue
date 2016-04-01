<template>

<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ shortlocale | uppercase }} <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a @click="toggleLocale">{{ longlocale | uppercase }}</a></li>
        </ul>
    </li>
</ul>

</template>

<script>
import * as actions from '../../vuex/actions'

export default {
  vuex: {
    getters: {
      shortlocale: state => state.shortlocale,
      longlocale: state => state.longlocale
    },
    actions: actions
  }
}
</script>
