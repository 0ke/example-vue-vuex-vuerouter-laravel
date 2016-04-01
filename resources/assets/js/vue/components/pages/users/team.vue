<template>
	<!-- Page Title
	============================================= -->
	<section id="page-title" class="page-title-mini animated" transition="googletransition" v-show="animateThis">

		<div class="container clearfix">
			<h1>Team</h1>
		</div>
	</section><!-- #page-title end -->

	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix animated" transition="googletransition" v-show="animateThis">

				<div class="col-md-4" v-for="member in team" >

					<div class="team">
						<div class="team-image">
							<img v-bind:src="'img/users/'+ member.id +'/original.jpeg'" alt="John Doe">
						</div>
						<div class="team-desc">
							<div class="team-title"><h4>{{ member.first_name + ' ' + member.last_name }}</h4><span>CEO</span></div>
							<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section><!-- #content end -->

</template>

<script type="stylus">
	
export default {
	name : 'Team',
	
	data(){
		return {
			team:[],
			animateThis: false
		}
	},

	route: {
		data : function (transition) {
			this.$http.get( 'team' ).then(function (response) {
				transition.next(response.data)
				this.animateThis = true
			});
		},
		deactivate ({ next }) {
		  this.animateThis = false
		  setTimeout(function() {
		  	next()
		  }, 500)
		}
	}
};

</script>