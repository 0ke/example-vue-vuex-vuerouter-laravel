<template>

 <!-- Page Content -->
<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Home
                <small>Secondary Text</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
    </div>

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
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
	            console.log('post route data');
	            var getUrl = this.$route.params.type;
	            if (this.$route.params.subtype !== undefined) {
	                getUrl += '/' + this.$route.params.subtype
	            }
	            this.$http.get(getUrl).then(function(response) {
	                if (!response.data.posts.length) { transition.abort() }
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
