<template>

<nav class="navbar navbar-inverse navbar-full" style="border-radius:0;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" v-link="{ name : 'home' }">Vue router + vuex</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li v-for="link in menu" v-link-active><a v-link="{ name : link , activeClass: 'active' }">{{ link | uppercase }}</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    	CATEGORIES <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li v-for="type in types"><a v-bind:class="{ 'tits' : type.subtypes }" v-link="{ name : 'type.index', params: { type : type.seo[0].slug } }">{{ type.title | uppercase }}</a></li>
                    </ul>
                </li>
            </ul>
            <languageswitcher></languageswitcher>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

</template>

<script>


export default {
	data(){
		return {
			menu : ['about','tasks'],
			types : []
		}
	},
	components : {
		languageswitcher : require('../widgets/languageswitcher.vue')
	},
	ready(){
		this.$http('categories-for-menu').then(function(response){
			this.$set('types',response.data.categories);
		})
	},
	filters : {
		checkForSubtypes(value){
			return !empty(value.subtypes);
		}
	}
}

</script>
