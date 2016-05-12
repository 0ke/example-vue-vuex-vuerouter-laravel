<template>

 <!-- Page Content -->
<div class="container animated" transition="googletransition" v-show="animateThis">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$route.params.type | uppercase }}
                <small v-if="$route.params.subtype">{{$route.params.subtype | uppercase }}</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row" v-for="post in posts" style="margin-bottom:15px;">
        <div class="col-md-4">
            <a v-link="{ name: 'post.show', params: { slug: post.seo[0].slug_nl }}">
                <img class="img-responsive" v-bind:src="'img/posts/'+ post.id +'/sizes/860.jpg'" alt="">
            </a>
        </div>
        <div class="col-md-8 portfolio-item">
            <h3>
                <a v-link="{ name: 'post.show', params: { slug: post.seo[0].slug_nl }}">{{ post | seo 'title' }}</a>
            </h3>
            <p>{{ post | seo 'short' }}</p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

</template>

<script type="stylus">
	export default {
	    name: 'Post_Index',
	    vuex: {
	        getters: {
	            shortlocale: state => state.shortlocale
	        }
	    },
	    data() {
	        return {
	            posts: {},
	            animateThis: false
	        }
	    },
	    route: {
	        data: function(transition) {
	            this.$http.get(this.$route.params.type).then(function(response) {
	                if (!response.data.posts.length) { 
	                	console.log('this category doesn\'t have any posts, go back.');
	                	transition.abort() 
	                }
	                transition.next(response.data)
	                this.animateThis = true
	            });
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
	            }, 100)
	        },
	        canReuse(transition) {
	            this.animateThis = false
	            setTimeout(function() {
	                return true
	            }, 100)
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
