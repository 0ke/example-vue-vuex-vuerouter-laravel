<template>
 <!-- Page Content -->
<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About <a @click="toggleRoute">Routing</a>, <a @click="toggleComponent">Components and Passing data</a>
            </h1>
            <h4>Strongly recommend:</h4>
            <h5>before or after watching this to look at the documentation since I'm not going to explain everything. <a href="http://vuejs.github.io/vue-router/en/index.html">http://vuejs.github.io/vue-router</a></h5>
            <h5>Install this <a target="_newtab" href="https://chrome.google.com/webstore/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd">chrome extension</a>, it's super useful. After installation open a project that has vue in it and debug on true, in your console you'll get a tab vue.js devtools, see screenshots at extension.</h5>

        </div>
    </div>
    <!-- /.row -->

    <div class="row" v-show="routing">
        <div class="col-lg-12">
            <h2 class="page-header">Routing</h2>
        </div>

        <div class="col-lg-5">
            <p></p>
            <p>(You can double click on an item to turn it into a folder. This navigation tree represents the folder structure of this small project currently.)</p>

            <!-- the demo root element -->
            <ul id="demo">
              <item
                class="item"
                :model="treeData">
              </item>
            </ul>
        </div>

        <div class="col-lg-7">

        <h3>Add this to any dom element you want</h3>
<pre>
1/ if not necessary to name your routes
v-link="'your-url'"

2/ but honestly naming routes makes it cleaner and maintainable if
you have like a lot of urls, sure it's more work
but you won't have to worry about wrong urls.
v-link="{ name : 'home' }"

3/ Parameters
v-link="{ name : 'subtype.index' , params : { type: 'news' , subtype : 'world' } }"
</pre>

        <h3>main.js</h3>
<pre
class="language-javascript"
data-jsonp="https://api.github.com/repos/leaverou/prism/contents/prism.js"
>
import Vue from 'vue'
import VueRouter from 'vue-router'
import { configRouter } from './route-config'
import { sync } from 'vuex-router-sync'

Vue.config.debug = true;
Vue.use(VueResource)
Vue.use(VueRouter)

const router = new VueRouter({
  //history: true,
  saveScrollPosition: true,
  transitionOnLoad: true
})
sync(store, router)
configRouter(router)

Vue.transition('googletransition', {
    enterClass: 'fadeInUp',
    leaveClass: 'fadeOutDown'
})

const App = Vue.extend(require('./app.vue'))
router.start(App,'#app')
</pre>

        <h3>route-config.js</h3>
<pre
class="language-javascript"
data-jsonp="https://api.github.com/repos/leaverou/prism/contents/prism.js"
>
// normal routes
router.map({
    '/': {
        name: 'home', // name route
        component: require('./components/pages/general/home.vue'),
        keepAlive: true
    },
    '/about': {
        name: 'about',
        component: require('./components/pages/general/about.vue'),
        keepAlive: true
    },
    '/team': {
        name: 'team',
        component: require('./components/pages/users/team.vue'),
        keepAlive: true
    },
    '/contact': {
        name: 'contact',
        component: require('./components/pages/contact/create.vue'),
        keepAlive: true
    },

    '/:type': {
        name: 'type.index', // give the route a name
        component: require('./components/pages/posts/index.vue'),
        subRoutes: {
            ':subtype': {
                name: 'subtype.index', // give the route a name
                component: require('./components/pages/posts/index.vue'),
                keepAlive: true
            }
        },
        keepAlive: true
    },
    '/article/:slug': {
        name: 'post.show',
        component: require('./components/pages/posts/show.vue'),
        keepAlive: true
    },


    // not found handler
    '*': {
        component: require('./components/pages/errors/404.vue')
    }
})

// redirect
router.redirect({
    '/info': '/about',
    '/hello/:userId': '/user/:userId'
})

// global before
// 3 options:
// 1. return a boolean
// 2. return a Promise that resolves to a boolean
// 3. call transition.next() or transition.abort()
router.beforeEach((transition) => {
    if (transition.to.path === '/forbidden') {
        router.app.authenticating = true
        setTimeout(() => {
            router.app.authenticating = false
            alert('this route is forbidden by a global before hook')
            transition.abort()
        }, 3000)
    } else {
        transition.next()
    }
})
</pre>
        </div>
    </div>
    <!-- /.row -->

    <div class="row" v-show="components">
        <div class="col-lg-12">
            <h2 class="page-header">Components</h2>
        </div>

        <div class="col-lg-7">
            <h4>So a Vue component</h4>
            <p> can only have three main tags </p>
            <ul>
                <li><code>template</code> - all html</li>
                <li><code>style</code> - less, sass, css code</li>
                <li><code>script</code> - purely vue code</li>
            </ul>
            <p>Off-topic but good to know: If i'm not mistaken a regular component can have data as object, a component loaded by vue-router however must be a function or it will you give you a vue warn. You can do this -> <code>data(): {}</code> if you're comfortable with ES6. <br> If not then use <code>data : function(){}</code>. </p>

<pre>
route: {
    data: function(<strong class="red">transition</strong>) {
        console.log('post route data');
        var getUrl = this.$route.params.type;
        if (this.$route.params.subtype !== undefined) {
            getUrl += '/' + this.$route.params.subtype
        }
        <strong>
        this.$http.get(getUrl).then(function(response) {
            if (!response.data.posts.length) { transition.abort() }
            <strong  class="red">transition.next(response.data)</strong>
            this.animateThis = true
        });
    },
    </strong>
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
</pre>

        </div>

        <div class="col-lg-5">
            <h4>Passing (route)data to your component</h4>
            <p>First of all you'll have to initialize your data before the route data comes.</p>
            <p>On the <a target="_newtab" href="http://koel.phanan.net/">Koel project</a> I saw the developer made use of 'stubs'. Great for usability and keeping your code in the component less bloated with data of objects having values that are empty. You don't need all of it, just the values you're going to parse in the html. If you're just going to loop objects this isn't really necessary, I found it to be necessary for a single post for example. Somehow it's already rendering without waiting for your server data, I know there are some variables avalaible <code>$waitingForData</code> and <code>$loadingRouteData</code></p>

            <p>Also make use of v-cloak attribute on the parent dom element where text is going to be loaded. If not you'll see very shortly but noticable the moustache braces with the variable. You can otherwise also make use of v-text="your variable".</p>

            <p>Secondly in your component you'll put a route option. Within this route option you can tap in on route transition hooks. This really is amazing for handling smoothless transition animations between pages. <a target="_newtab" href="http://vuejs.github.io/vue-router/en/pipeline/hooks.html">More information here</a>, it's better explained there. What I'm going to tell you is how to fetch and pass this server data from the data option hook to your initialized data.</p>

            <h5>What you see here is a route-component for a category and subcategory blogposts index page.</h5>
            <p>The timeouts at deactivate() and canreuse() are there to give my fadeOut animation the time to do it's thing. Without it would skip directly to the next page.</p>

            <p>As you can see I marked the most important thing red, without it your page won't load and give a vue-warn. Response.data in this case contains only <code>{ posts }</code> object that has an array of objects, it will seed <code>posts:[]</code> in my already initialized data function.</p>
        </div>

        <div class="col-lg-5">
            <h3>Vuex store state / Shared state</h3>
            <p>Vuex gives you the possibility to share data between components, at the time Phanan made Koel he made use of shared state files, I can pressume Vuex was unknown or still in development back then. React has redux, there's also flux and something else.</p>

            <p>Let me give you a practical example: I use this to store and share the selected language in the languageswitcher component, there I import the actions.js file, the function I call in actions.js dispatches to a mutator, the mutator controls changes to the store state. You could kind of compare it with laravel controllers. It's not really a thing of my own it's a design pattern apparently. Next I add <code>vuex: {
            getters: {
                shortlocale: state => state.shortlocale
            }
        },</code> which I then can access as a regular data object. I'm also using this for managing music with a queue. </p>

        <p>Be aware! when you refresh: the mutated data in Vuex store is not saved and won't be saved. I save it in (browser) local- or sessionStorage, for now. </p>

        <p>Last but not least: You do need to import vuex and the store/index.js In the App component that is an extension. Go and take a look there. If you're interested this goes deeper about how vuex and redux works and is designed.</p>

        <div class="embed-responsive embed-responsive-16by9">
        </div>
        </div>
    </div>

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

    var data =
    {
      name: 'resources/assets/js/vue',
      children: [
        { name: 'app.vue' },
        { name: 'main.js' },
        { name: 'route-config.js' },

        {
          name: 'vuex',
          children: [
            {
              name: 'store',
              children: [
                { name: 'index.js' },
              ]
            },
            { name: 'actions.js' },
            { name: 'getters.js' },
            { name: 'setters.js' },
            { name: 'mutations.js' },
            { name: 'mutation-types.js' },
          ]
        },
        {
            name: 'components',
            children: [
                {
                  name: 'pages',
                  children: [
                    {
                        name: 'general',
                        children: [
                          { name: 'home.vue' },
                          { name: 'about.vue' },
                        ]
                    },
                    {
                      name: 'auth',
                      children: [
                        { name: 'login.vue' },
                        { name: 'register.vue' },
                      ]
                    },
                    {
                      name: 'posts',
                      children: [
                        { name: 'index.vue' },
                        { name: 'show.vue' },
                      ]
                    },
                    {
                      name: 'users',
                      children: [
                        { name: 'index.vue' },
                        { name: 'posts.vue' },
                        { name: 'settings.vue' },
                        { name: 'show.vue' },
                        { name: 'team.vue' },
                      ]
                    },
                    {
                      name: 'contact',
                      children: [
                        { name: 'archive.vue' },
                        { name: 'create.vue' },
                        { name: 'index.vue' },
                        { name: 'show.vue' },
                      ]
                    },
                    {
                      name: 'errors',
                      children: [
                        { name: '404.vue' },
                      ]
                    }
                  ]
                },
                {
                  name: 'partials',
                  children: [
                    { name: 'menu.vue' },
                  ]
                },
                {
                  name: 'widgets',
                  children: [
                    { name: 'languageswitcher.vue' },
                    { name: 'navtree.vue' },
                  ]
                },
            ]
        }
      ]
    }

	export default {
		name: 'About',
        components : {
            item: require('../../widgets/navtree.vue')
        },
        data(){
            return {
                treeData: data,
                routing : true,
                components : true
            }
        },
        methods: {
            toggleRoute(){
                    this.components = false
                    this.passingData = false
                    this.routing = true
            },
            toggleComponent(){
                    this.passingData = false
                    this.routing = false
                    this.components = true
            }
        }
	};

</script>

<style>
    .item {
      cursor: pointer;
    }
    .bold {
      font-weight: bold;
      font-size: 110%;
    }
    .red {
        color:red;
    }
    ul {
      padding-left: 2em;
      line-height: 1.7em;
      list-style-type: dot;
    }
</style>
