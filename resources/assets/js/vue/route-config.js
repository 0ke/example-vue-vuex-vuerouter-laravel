export function configRouter(router) {

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
        '/tasks': {
            name: 'tasks',
            component: require('./components/pages/tasks/index.vue'),
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


}
