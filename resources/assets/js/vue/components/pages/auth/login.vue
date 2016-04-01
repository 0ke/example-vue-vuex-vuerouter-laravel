<template>

</template>

<script type="stylus">
	import * as actions from '../../../Vuex/actions'

	export default {
	    name: 'Login',
	    vuex: {
	      actions: actions
	    },
	    data: function() {
	        return {
	            user: {
	                email: null,
	                password: null
	            },
	            messages: []
	        }
	    },
	    methods: {
	    	getModel: function(){
	    		this.$http.post('auth/login', this.user ).then(function(response) {
	    		    this.userWasAuthenticated( response.data )
	    		});
	    	}
	    }
	}
</script>