<template>

</template>

<script type="stylus">
import * as actions from '../../../Vuex/actions'
import { recentHistory } from '../../../Vuex/getters'

export default {
	vuex: {
	    getters: {
	      shortlocale: state => state.shortlocale
	    },
	    actions: actions
	},
	name: 'Post_Show',
	data : function() {
		return {
			post: {
				id: 1,
				concept: "",
				views: "",
				body_nl: "",
				body_en: "",
				embed: "",
				videourl: "",
				score: "",
				matchscore: "",
				pros_nl: "",
				cons_nl: "",
				pros_en: "",
				cons_en: "",
				deleted_at: "",
				created_at: "",
				seo: [
				{
				  title_nl: "",
				  title_en: "",
				  slug_nl: "",
				  slug_en: "",
				  description_nl: "",
				  description_en: ""
				}
				],
				type: {
					seo: [
						{
						  title: "",
						  slug: "",
						}
					]
				},
				subtype: {
					seo: [
							{
							  title: "",
							  slug: "",
							}
						],
					type: {
						seo: [
							{
							  title: "",
							  slug: "",
							}
						]
					}
				},
				tags: [],
				users: []
			},
			previous :{},
			next :{},
			related: {},
			locale: {},
			animateThis: false
		}
	},
	route: {
		data: function (transition) {
			return new Promise((resolve) => {
	  		    this.$http.get( 'article/' + transition.to.params.slug).then( function (response) {
	  		    	console.log(response.data.post);
	  	            transition.next(response.data)
	  	            this.animateThis = true
	            })
			})
		    
		},
		canActivate (transition) {
		  console.log('post canActivate?')
		  transition.next()
		},
		activate () {
		  console.log('activating post...')
		  return new Promise((resolve) => {
		    console.log('post activated.')
		    resolve()
		  })
		},
		deactivate ({ next }) {
		  this.animateThis = false
		  setTimeout(function() {
		  	next()
		  }, 200)
		},
		canReuse(transition){
			this.animateThis = false
			setTimeout(function() {
				return true
			}, 200)
		}
	},
	filters : {
		seo: function(value,attribute){
			var seo = value.seo[0];
			switch(attribute){
				case 'title':
				return (this.shortlocale == 'nl')? seo.title_nl : seo.title_en;
				break;
				case 'short':
				return (this.shortlocale == 'nl')? seo.description_nl : seo.description_en;
				break;
				case 'body':
				return (this.shortlocale == 'nl')? value.body_nl : value.body_en;
				break;
			}
		}
	}
}
</script>