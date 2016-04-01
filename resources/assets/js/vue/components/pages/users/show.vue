<template>
	<div></div>
</template>

<script type="stylus">
	export default {
	    name: 'User_Show',
	    vuex: {
	        getters: {
	            shortlocale: state => state.shortlocale
	        }
	    },
	    data() {
	        return {
	            user: {},
	            animateThis: false
	        }
	    },
	    route: {
	        data: function(transition) {
	            console.log('post route data');
	        },
	        canActivate(transition) {
	            console.log('post canActivate?')
	            transition.next()
	        },
	        activate() {
	            console.log('activating post...')
	            return new Promise((resolve) => {
	                console.log('post activated.')
	                resolve()
	            })
	        },
	        deactivate({ next }) {
	            this.animateThis = false
	            setTimeout(function() {
	                next()
	            }, 200)
	        },
	        canReuse(transition) {
	            this.animateThis = false
	            setTimeout(function() {
	                return true
	            }, 200)
	        }
	    },
	    filters: {
	        seo: function(value, attribute) {
	            var seo = value.seo[0];
	            switch (attribute) {
	                case 'title':
	                    return (this.shortlocale == 'nl') ? seo.title_nl : seo.title_en;
	                    break;
	                case 'short':
	                    return (this.shortlocale == 'nl') ? seo.description_nl : seo.description_en;
	                    break;
	            }
	        }
	    }
	}
</script>