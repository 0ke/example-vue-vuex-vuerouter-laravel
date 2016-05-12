<template>

    <!-- Page Content -->
   <div class="container">

   <!-- Page Header -->

   <!-- /.row -->
   <div class="row">
       <div class="col-lg-12">

           <div class="row">
               <div class="col-lg-6">
                    <h1 class="page-header">Home
                       <small>{{ text | locale 'title' }}!</small>
                    </h1>

                   <blockquote>
                       <p> {{ text | locale 'sometext' }} </p>
                   </blockquote>

                   <pre>{{ $data | json }}</pre>
                   <pre>{{ longlocale | json }}</pre>
                   <pre>{{ shortlocale | json }}</pre>
               </div>

                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#official-resources">Official Resources</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#external-resources">External Resources</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#community">Community</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#podcasts">Podcasts</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#official-examples">Official Examples</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#tutorials">Tutorials</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#development-tools">Development Tools</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#syntax-highlighting">Syntax Highlighting</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#snippets">Snippets</a></li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#libraries--plugins">Libraries &amp; Plugins</a>
                            <ul>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#routing">Routing</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#ajaxdata">Ajax/Data</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#state-management">State Management</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#validation">Validation</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#ui-components">UI Components</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#i18n">i18n</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#examples">Examples</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#boilerplates">Boilerplates</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#scaffolding">Scaffolding</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#integrations">Integrations</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#general-pluginsdirectives">General Plugins/Directives</a></li>
                            </ul>
                        </li>
                        <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#projects-using-vuejs">Projects Using Vue.js</a>
                            <ul>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#open-source">Open Source</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#appswebsites">Apps/Websites</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#interactive-experiences">Interactive Experiences</a></li>
                                <li><a target="_newtab" href="https://github.com/vuejs/awesome-vue#enterprise-usage">Enterprise Usage</a></li>
                            </ul>
                        </li>
                        <h3><a id="user-content-official-resources" class="anchor" href="https://github.com/vuejs/awesome-vue#official-resources" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Official Resources</h3>
                        <ul>
                            <li><a target="_newtab" href="http://vuejs.org/guide/">Official Guide</a></li>
                            <li><a target="_newtab" href="http://vuejs.org/api/">API Reference</a></li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue">GitHub Repo</a></li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue/releases">Release Notes</a></li>
                        </ul>
                        <h3><a id="user-content-external-resources" class="anchor" href="https://github.com/vuejs/awesome-vue#external-resources" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>External Resources</h3>
                        <ul>
                            <li><a target="_newtab" href="https://gist.github.com/hashrock/f575928d0e109ace9ad0">Vue.js資料まとめ(for japanese)</a> by @hashrock</li>
                        </ul>
                        <h3><a id="user-content-community" class="anchor" href="https://github.com/vuejs/awesome-vue#community" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Community</h3>
                        <ul>
                            <li><a target="_newtab" href="https://twitter.com/vuejs">Twitter</a></li>
                            <li><a target="_newtab" href="https://gitter.im/vuejs/vue">Gitter Chat Room</a></li>
                            <li><a target="_newtab" href="http://forum.vuejs.org/">Official Forum</a></li>
                            <li><a target="_newtab" href="https://github.com/simplesmiler/vue-requests">vue-requests</a> - Request a Vue.js module you wish existed or get ideas for modules</li>
                        </ul>
                        <h3><a id="user-content-podcasts" class="anchor" href="https://github.com/vuejs/awesome-vue#podcasts" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Podcasts</h3>
                        <ul>
                            <li><a target="_newtab" href="http://www.fullstackradio.com/30">Full Stack Radio #30 (11-23-2015)</a></li>
                            <li><a target="_newtab" href="https://devchat.tv/js-jabber/187-jsj-vue-js-with-evan-you">JavaScript Jabber #187 (11-25-2015)</a></li>
                            <li><a target="_newtab" href="https://changelog.com/184/">Changelog #184 (11-27-2015)</a></li>
                            <li><a target="_newtab" href="http://softwareengineeringdaily.com/2015/12/29/front-end-javascript-with-evan-you/">Software Engineering Daily (12-29-2015)</a></li>
                            <li><a target="_newtab" href="https://javascriptair.com/episodes/2016-03-30/">Javascript Air 016 (03-30-2016)</a></li>
                        </ul>
                        <h3><a id="user-content-official-examples" class="anchor" href="https://github.com/vuejs/awesome-vue#official-examples" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Official Examples</h3>
                        <ul>
                            <li><a target="_newtab" href="http://vuejs.org/guide/">Basic Examples</a></li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue/tree/dev/examples/todomvc">Vue.js TodoMVC</a>
                                <ul>
                                    <li><a target="_newtab" href="https://github.com/anfelor/TodoMVC-CoffeeScript-and-Vue.js">CoffeeScript Version</a></li>
                                </ul>
                            </li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue-hackernews">Vue.js HackerNews Clone</a></li>
                        </ul>
                        <h3><a id="user-content-tutorials" class="anchor" href="https://github.com/vuejs/awesome-vue#tutorials" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Tutorials</h3>
                        <ul>
                            <li><a target="_newtab" href="https://laracasts.com/series/learning-vue-step-by-step">Vue.js screencasts</a> on Laracasts</li>
                            <li><a target="_newtab" href="http://www.sitepoint.com/whats-new-in-vue-js-1-0/">What's New in Vue.js 1.0</a> on Sitepoint</li>
                            <li><a target="_newtab" href="https://auth0.com/blog/2015/11/13/build-an-app-with-vuejs/">Build an App with Vue.js: From Authentication to Calling an API</a> on Auth0 blog</li>
                            <li><a target="_newtab" href="https://scotch.io/tutorials/create-a-github-file-explorer-using-vue-js">Create a GitHub File Explorer Using Vue.js</a> on Scotch.io</li>
                            <li><a target="_newtab" href="http://vegibit.com/vue-js-tutorial/">Vue.js Tutorial</a> on Vegibit</li>
                            <li><a target="_newtab" href="http://skyronic.com/2015/12/28/vue-project-scratch/">Vue.js build set-up from scratch with webpack, vue-loader and hot reload</a></li>
                            <li><a target="_newtab" href="http://skyronic.com/2016/01/03/vuex-basics-tutorial/">Vuex basics: Tutorial and explanation</a></li>
                            <li><a target="_newtab" href="https://www.youtube.com/watch?v=l1KHL-TX3qs">Vuex introduction video - James Browne from London Vue.js Meetup #1</a></li>
                            <li><a target="_newtab" href="https://laravist.com/series/vue-js-1-0-in-action-series">Vue.js 中文系列视频教程</a> on Laravist</li>
                            <li><a target="_newtab" href="http://coligo.io/vuejs-the-basics/">Vue.js: The Basics</a> on Coligo.io</li>
                            <li><a target="_newtab" href="http://coligo.io/vuejs-components">Practical Intro to Components in Vue.js</a> on Coligo.io</li>
                            <li><a target="_newtab" href="http://craigmckenna.com/develop-a-reactive-invoice-app-using-vue-js/">Develop a Reactive Invoice App using Vue.js</a> on craigmckenna.com</li>
                            <li><a target="_newtab" href="http://coligo.io/vuejs-filters/">Understanding Filters in Vue.js</a> on Coligo.io</li>
                            <li><a target="_newtab" href="https://www.youtube.com/watch?v=TGSJjDahlrQ">Hybrid App Example with Laravel and Vue.js in portuguese</a> by @vedovelli</li>
                            <li><a target="_newtab" href="http://coligo.io/markdown-editor-vuejs/">Creating a Markdown Editor with VueJs and GitHub's API</a> on Coligo.io</li>
                            <li><a target="_newtab" href="http://coligo.io/real-time-analytics-with-nodejs-socketio-vuejs/">Building a Real-Time Web Analytics Dashboard with NodeJs, Socket.io, and VueJs</a> on Coligo.io</li>
                            <li><a target="_newtab" href="http://oguzhan.in/vue-js-ile-uygulama-gelistirme/">Vue.js Introduction Turkish Language</a> on oguzhan.in</li>
                        </ul>
                        <h4><a id="user-content-012-and-earlier" class="anchor" href="https://github.com/vuejs/awesome-vue#012-and-earlier" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>0.12 and earlier</h4>
                        <ul>
                            <li><a target="_newtab" href="https://laracasts.com/series/learning-vuejs">Vue.js screencasts</a> on Laracasts <sup>0.12</sup></li>
                            <li><a target="_newtab" href="https://scotch.io/tutorials/build-an-app-with-vue-js-a-lightweight-alternative-to-angularjs">Build an App with Vue.js</a> on Scotch.io <sup>0.12</sup></li>
                            <li><a target="_newtab" href="http://www.sitepoint.com/getting-started-with-vue-js/">Getting Started with Vue.js</a> on Sitepoint <sup>0.12</sup></li>
                            <li><a target="_newtab" href="http://forum.vuejs.org/topic/49/vue-js-video-series-in-portuguese">Vue.js video series in portuguese</a> <sup>0.12</sup></li>
                            <li><a target="_newtab" href="http://ausite.ru/category/js/vue-js">Vue.js video series in russian</a> on Ausite <sup>0.12</sup></li>
                            <li><a target="_newtab" href="http://mattsparks.com/a-quick-introduction-to-vue-js/">A Quick Introduction to Vue.js</a> by Matt Sparks <sup>0.12</sup></li>
                            <li><a target="_newtab" href="https://www.youtube.com/watch?v=QN7l3ydXvx0">Getting Started with Vue.js + vue-router</a> by Michael Calkins <sup>0.12</sup></li>
                            <li><a target="_newtab" href="http://taha-sh.com/blog/many-js-frameworks-but-vuejs-is-different">Many JS Frameworks but Vue.js Is Different</a> by Taha Shashtari <sup>0.12</sup></li>
                            <li><a target="_newtab" href="http://fadeit.dk/blog/post/getting-started-with-vuejs-angularjs-perspective">Getting Started with Vue.js - AngularJS perspective</a> by Dan Mindru <sup>0.11</sup></li>
                        </ul>
                        <h3><a id="user-content-development-tools" class="anchor" href="https://github.com/vuejs/awesome-vue#development-tools" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Development Tools</h3>
                        <ul>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue-cli">vue-cli</a>: official CLI for scaffolding Vue.js projects.</li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue-loader">vue-loader</a> - Vue component loader for Webpack.
                                <ul>
                                    <li><a target="_newtab" href="https://github.com/vuejs/vue-loader-example">vue-loader-example</a></li>
                                </ul>
                            </li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vueify">vueify</a> - Vue component transform for Browserify.
                                <ul>
                                    <li><a target="_newtab" href="https://github.com/vuejs/vueify-example">vueify-example</a></li>
                                </ul>
                            </li>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue-devtools">vue-devtools</a> - Chrome devtools extension for debugging Vue applications.</li>
                            <li><a target="_newtab" href="https://github.com/SkewedAspect/grunt-vueify">grunt-vueify</a> - Translate <code>.vue</code> files to pure JavaScript, without using Browserify. (Useful for Electron apps)</li>
                            <li><a target="_newtab" href="https://github.com/paulpflug/vue-compiler">vue-compiler</a> - A simple CLI wrapper around vueify</li>
                            <li><a target="_newtab" href="https://atom.io/packages/vue-autocompile">vue-autocompile</a> - Atom.io package to compile <code>.vue</code> files on save.</li>
                            <li><a target="_newtab" href="https://github.com/paulpflug/vue-dev-server">vue-dev-server</a> - A small webpack-based development server for building standalone <code>vue</code> components</li>
                            <li><a target="_newtab" href="https://github.com/rodzzlessa24/vue-go-cli">vue-go-cli</a> - a CLI tool for scaffolding new projects generating components, services, and mixins.</li>
                            <li><a target="_newtab" href="https://github.com/nblackburn/vue-brunch">brunch-vue</a> - Adds support to Brunch for pre-compiling single file Vue components.</li>
                            <li><a target="_newtab" href="https://github.com/rawcreative/vueify-extract-css">vueify-extract-css</a> - Browserify plugin to extract css from Vueify-compiled single file components to a separate css file.</li>
                        </ul>
                        <h3><a id="user-content-syntax-highlighting" class="anchor" href="https://github.com/vuejs/awesome-vue#syntax-highlighting" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Syntax Highlighting</h3>
                        <ul>
                            <li><a target="_newtab" href="https://github.com/vuejs/vue-syntax-highlight">Sublime Text</a></li>
                            <li><a target="_newtab" href="https://atom.io/packages/language-vue">Atom</a> by @hedefalk</li>
                            <li><a target="_newtab" href="https://atom.io/packages/language-vue-component">Atom (2)</a> by @CYBAI</li>
                            <li><a target="_newtab" href="https://github.com/posva/vim-vue">Vim</a> by @darthmall and @posva</li>
                            <li><a target="_newtab" href="https://marketplace.visualstudio.com/items/liuji-jim.vue">Visual Studio Code</a> by Jim Liu</li>
                            <li><a target="_newtab" href="https://github.com/pandao/brackets-vue">Brackets</a> by @pandao</li>
                            <li><a target="_newtab" href="https://github.com/henjue/vue-for-idea">IntelliJ IDEA / WebStorm</a> by @henjue</li>
                        </ul>
                        <h3><a id="user-content-projects-using-vuejs" class="anchor" href="https://github.com/vuejs/awesome-vue#projects-using-vuejs" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Projects Using Vue.js</h3>
                        <ul>
                            <li>
                                <h4><a id="user-content-open-source" class="anchor" href="https://github.com/vuejs/awesome-vue#open-source" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Open Source</h4>
                                <ul>
                                    <li><a target="_newtab" href="http://pagekit.com/">PageKit</a> <sup><a target="_newtab" href="https://github.com/pagekit/pagekit">[Source]</a></sup></li>
                                    <li><a target="_newtab" href="https://github.com/laravel/spark">Laravel Spark</a></li>
                                    <li><a target="_newtab" href="http://p5js.org/download/">p5.js editor</a> <sup><a target="_newtab" href="https://github.com/processing/p5.js-editor">[Source]</a></sup></li>
                                    <li><a target="_newtab" href="https://python-china.org">Python China</a> <sup><a target="_newtab" href="https://github.com/zerqu/qingcheng">[Source]</a></sup></li>
                                    <li><a target="_newtab" href="http://npmcharts.com">npmcharts.com</a> <sup><a target="_newtab" href="https://github.com/cheapsteak/npmcharts.com">[Source]</a></sup></li>
                                    <li><a target="_newtab" href="https://github.com/jiyinyiyong/todolist">Todolist</a> by @jiyinyiyong</li>
                                    <li><a target="_newtab" href="https://github.com/thelinuxlich/vue-dashing-js">Dashboard framework</a> by @thelinuxlich</li>
                                    <li><a target="_newtab" href="https://github.com/sapjax/fewords">a simple notepad</a></li>
                                    <li><a target="_newtab" href="https://github.com/ilyashubin/FilterBlend">FilterBlend</a>: CSS blend modes and filters playground by @ilyashubin</li>
                                    <li><a target="_newtab" href="http://koel.phanan.net">Koel</a>: Music streaming server</li>
                                    <li><a target="_newtab" href="https://chrome.google.com/webstore/detail/ikhdkkncnoglghljlkmcimlnlhkeamad">Selection Translator</a> <sup><a target="_newtab" href="https://github.com/lmk123/crx-selection-translate">[Source]</a></sup> A Chrome Extension let browse any language websites has never been easier.</li>
                                    <li><a target="_newtab" href="https://oldj.github.io/SwitchHosts/">SwitchHosts</a> <sup><a target="_newtab" href="https://github.com/oldj/SwitchHosts">[Source]</a></sup> Switch hosts quickly.</li>
                                    <li><a target="_newtab" href="https://github.com/mrgodhani/rss-reader">RSS Reader</a> Simple RSS Reader made using atom electron and vue.js.</li>
                                    <li><a target="_newtab" href="https://github.com/Zhangdroid/Gokotta">Gokotta</a>: A simple music player built by electron and vue.</li>
                                    <li><a target="_newtab" href="https://github.com/Kocisov/coffeebreak">Coffeebreak</a> Tool for live editing CSS components</li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-appswebsites" class="anchor" href="https://github.com/vuejs/awesome-vue#appswebsites" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Apps/Websites</h4>
                                <ul>
                                    <li><a target="_newtab" href="https://www.formlets.com">Formlets</a></li>
                                    <li><a target="_newtab" href="https://laracasts.com">Laracasts</a></li>
                                    <li><a target="_newtab" href="https://register.sainsburysentertainment.co.uk/">Sainsbury's Entertainment onboarding platform</a></li>
                                    <li><a target="_newtab" href="https://cuusoo.com">CUUSOO</a></li>
                                    <li><a target="_newtab" href="https://esa.io/">esa.io</a></li>
                                    <li><a target="_newtab" href="http://n1.ru">N1.ru</a></li>
                                    <li><a target="_newtab" href="http://gold.xitu.io">稀土掘金</a></li>
                                    <li><a target="_newtab" href="http://www.prague-airport.com/">Prague Airport</a></li>
                                    <li><a target="_newtab" href="https://www.expressionery.com">Expressionery</a></li>
                                    <li><a target="_newtab" href="http://bt.workswell.com.au">BUYIT</a> by @<a target="_newtab" href="http://workswell.com.au">Workswell Australia</a></li>
                                    <li><a target="_newtab" href="http://corentinbac.com/">Portfolio Site</a> by Corentin Bac</li>
                                    <li><a target="_newtab" href="https://play.google.com/store/apps/details?id=uk.co.dixons.compareprices&amp;hl=en">Compare Prices by Currys &amp; PCWorld</a></li>
                                    <li><a target="_newtab" href="https://grammarly.com/">Grammarly</a> mistake-free writing service</li>
                                    <li><a target="_newtab" href="https://laravist.com/">Laravist</a></li>
                                    <li><a target="_newtab" href="https://atiiv.com">Atiiv</a> An app aimed for personal trainers and their clients.</li>
                                    <li><a target="_newtab" href="http://v2.statamic.com">Statamic</a></li>
                                    <li><a target="_newtab" href="http://embalses.azurewebsites.net/">Embalses!</a> A tool to report water dam level using the U.S. Geological Survey database.</li>
                                    <li><a target="_newtab" href="http://clem.travelmap.fr">TravelMap</a> A simple way for travellers to create a blog based on a Map</li>
                                    <li><a target="_newtab" href="http://movienote.org">movienote.org</a> A app which help users maintaining a list about what movie they have watched.</li>
                                    <li><a target="_newtab" href="https://propercloth.com/design-a-shirt">Proper Cloth Shirt Builder</a> Custom shirt builder</li>
                                    <li><a target="_newtab" href="https://github.com/julesbou/checkit">CheckIt</a></li>
                                    <li><a target="_newtab" href="https://github.com/Mati365/reddit-news">Reddit News</a> A browser extension which show notifications and news from reddit</li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-interactive-experiences" class="anchor" href="https://github.com/vuejs/awesome-vue#interactive-experiences" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Interactive Experiences</h4>
                                <ul>
                                    <li><a target="_newtab" href="https://newsfeed.fb.com/">Facebook NewsFeed</a></li>
                                    <li><a target="_newtab" href="https://adblitz.withyoutube.com/#!/advertisers">YouTube AdBlitz 2016</a></li>
                                    <li><a target="_newtab" href="http://bloodsweatandtools.discovery.ca/gamebench/">Blood, Sweat and Tools</a> - by Jam3, led by @cheapsteak</li>
                                    <li><a target="_newtab" href="http://omnisense.net">Omnisense Experience</a> - <em>Awwwards &amp; FWA SOTD, FWA Cutting Edge. Awwwards SOTM nominee.</em></li>
                                    <li><a target="_newtab" href="https://danslapeaudelours.canalplus.fr/en/">Being the Bear</a> - <em>Awwwards &amp; FWA SOTD, FWA Cutting Edge, Awwwards SOTM nominee.</em></li>
                                    <li><a target="_newtab" href="http://www.starexperience.fr/">Heineken Star Experience</a> - <em>FWA SOTD.</em></li>
                                    <li><a target="_newtab" href="http://louisansa.com">Louis Ansa Website (portfolio)</a> - <em>Awwwards SOTD, FWA nominee.</em></li>
                                    <li><a target="_newtab" href="http://www.digitalforallnow.com/en/experience">Digital For All</a></li>
                                    <li><a target="_newtab" href="http://www.djeco.com/en">Djeco.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-enterprise-usage" class="anchor" href="https://github.com/vuejs/awesome-vue#enterprise-usage" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Enterprise Usage</h4>
                                <ul>
                                    <li>Alibaba</li>
                                    <li>Baidu</li>
                                    <li>Sina Weibo</li>
                                    <li>Xiaomi</li>
                                    <li>Ele.me</li>
                                    <li>Optimizely</li>
                                    <li>Expedia</li>
                                    <li>UCWeb</li>
                                    <li>Line</li>
                                    <li>Nintendo</li>
                                    <li>Celtra</li>
                                    <li>Sainsbury's</li>
                                    <li><a target="_newtab" href="https://arex.io/">AREX</a></li>
                                </ul>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>

                        <h3><a id="user-content-libraries--plugins" class="anchor" href="#libraries--plugins" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Libraries &amp; Plugins</h3>
                        <ul>
                            <li>
                                <h4><a id="user-content-routing" class="anchor" href="#routing" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Routing</h4>
                                <ul>
                                    <li><a href="https://github.com/vuejs/vue-router">vue-router</a> - Official router for building SPAs. <sup>1.0 compatible</sup></li>
                                    <li><a href="https://github.com/molforp/vue-view">Vue view</a>, ui-router inspired routes (with states), based on pagejs by @molforp</li>
                                    <li><a href="https://github.com/AlexToudic/vue-page">Vue page</a>, a routing system based on pagejs by @AlexToudic</li>
                                    <li><a href="https://github.com/bpierre/vue-lanes">Vue Lanes</a>, an event-based routing system for Vue by @bpierre</li>
                                    <li><a href="https://github.com/ayamflow/vue-route">Vue route</a>, ng-view inspired routes for Vue by @ayamflow</li>
                                    <li><a href="https://github.com/inca/voie">voie</a> — simple router / layout manager inspired by FSMs and ui-router by <a href="https://github.com/inca">Boris Okunskiy</a><sup>1.0</sup></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-ajaxdata" class="anchor" href="#ajaxdata" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Ajax/Data</h4>
                                <ul>
                                    <li><a href="https://github.com/vuejs/vue-resource">vue-resource</a> - AJAX/Resource plugin maintained by the <a href="http://pagekit.com/">PageKit</a> team. <sup>1.0 compatible</sup></li>
                                    <li><a href="https://github.com/vuejs/vue-async-data">vue-async-data</a> - Async data loading plugin <sup>1.0 compatible</sup></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-state-management" class="anchor" href="#state-management" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>State Management</h4>
                                <ul>
                                    <li><a href="https://github.com/vuejs/vuex">vuex</a> - Flux/Redux inspired application architecture for Vue.js.</li>
                                    <li><a href="https://github.com/egoist/revue">revue</a> - Redux binding for Vue by @egoist</li>
                                    <li><a href="https://github.com/yang-wei/vue-redux">vue-redux</a> - Redux binding for Vue by @yang-wei</li>
                                    <li><a href="https://github.com/BosNaufal/vue-freeze">vue-freeze</a> - Simple state management whitout bloating API and Concept for Vue by <a href="https://github.com/BosNaufal">@BosNaufal</a></li>
                                    <li><a href="https://github.com/BosNaufal/vue-simple-store">vue-simple-store</a> - Store Organizer To Simplify Your Stores for Vue By <a href="https://github.com/BosNaufal">@BosNaufal</a></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-validation" class="anchor" href="#validation" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Validation</h4>
                                <ul>
                                    <li><a href="https://github.com/vuejs/vue-validator">vue-validator</a> - Form validation plugin maintained by @kazupon <sup>1.0 compatible</sup></li>
                                    <li><a href="https://github.com/xrado/vue-validator">Vue validator</a> by @xrado</li>
                                    <li><a href="https://github.com/fergaldoyle/vue-form">vue-form</a> by @fergaldoyle <sup>1.0 compatible</sup></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-ui-components" class="anchor" href="#ui-components" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>UI Components</h4>
                                <ul>
                                    <li><a href="http://yuche.github.io/vue-strap/">VueStrap</a>, Bootstrap components built with pure Vue.js by @yuche <sup>1.0</sup></li>
                                    <li><a href="http://morgul.github.io/vueboot/">VueBoot</a>, Bootstrap v4 components by @Morgul <sup>1.0</sup></li>
                                    <li><a href="https://github.com/posva/vue-mdl">vue-mdl</a>: Reusable Vue.js components using Material Design Lite. By <a href="https://github.com/posva">@posva</a></li>
                                    <li><a href="https://github.com/samcrosoft/vue-countup">vue-countup</a>: A Vue.js component for the very interesting <a href="https://inorganik.github.io/countUp.js/">CountUp.js</a> plugin. <sup>1.0 compatible</sup></li>
                                    <li><a href="https://github.com/hnakamur/vue.tag-editor.js">Vue Tag Editor Component</a> by @hnakamur</li>
                                    <li><a href="http://pespantelis.github.io/vue-crop/">Vue Crop</a></li>
                                    <li><a href="http://pespantelis.github.io/vue-typeahead/">Vue Typeahead</a></li>
                                    <li><a href="https://github.com/dgerber/vue-select-js">Typed select component</a> by @dgerber</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-select">vue-select</a>: A Vue.js component implementing the select control with the <a href="https://github.com/select2/select2">jQuery select2 plugin</a>. By @Haixing-Hu</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-html-editor">vue-html-editor</a>: A Vue.js component implementing the HTML editor with the <a href="https://github.com/summernote/summernote">jQuery summernote plugin</a>. By @Haixing-Hu</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-datetime-picker">vue-datetime-picker</a>: A Vue.js component implementing the datetime picker control using the <a href="https://github.com/Eonasdan/bootstrap-datetimepicker">Eonasdan's bootstrap datetime picker plugin</a>. By @Haixing-Hu</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-country-select">vue-country-select</a>: A Vue.js component implementing the select control used to select countries. It depends on <a href="https://github.com/Haixing-Hu/vue-select">vue-select</a> and <a href="https://github.com/Haixing-Hu/vue-i18n">vue-i18n</a>. By @Haixing-Hu</li>
                                    <li><a href="https://github.com/dgerber/vue-formidable">Form generation from JSON Schema</a> by @dgerber</li>
                                    <li><a href="https://github.com/ericmcdaniel/vue-panel">vue-panel</a>: A suite of Vue.js components for building Flexbox layouts by @ericmcdaniel</li>
                                    <li><a href="https://github.com/GuillaumeLeclerc/vue-google-maps/">vue-google-maps</a>: A suite of Vue.js components to build reactive Google Maps Applications by @GuillaumeLeclerc</li>
                                    <li><a href="https://github.com/Twiknight/vue-transition">vue-transition</a>: A component to trigger a CSS transition at any time by @Twiknight</li>
                                    <li><a href="http://kzima.github.io/vuestrap-icons/#/icons">SVG icons</a>, SVG sprites in form of a simple <code>&lt;icon&gt;</code> component, by @kzima <sup>1.0</sup></li>
                                    <li><a href="http://gritcode.github.io/gritcode-components/#/toast">Extra Vuestrap components</a>, more components built with just B4 and Vue.js, by @kzima <sup>1.0</sup></li>
                                    <li><a href="http://kzima.github.io/vuestrap-base-components/#/accordion">VueStrap Base Components</a>, A complete set of Bootstrap 4 web components built with pure Vue.js, by @kzima <sup>1.0</sup></li>
                                    <li><a href="https://github.com/kaorun343/vue-youtube-embed">Vue YouTube Embed</a>: a directive for Vue.js and YouTube by @kaorun343</li>
                                    <li><a href="https://github.com/hilongjw/vue-datepicker">Vue datepicker</a>: calendar and datepicker component with material design for Vue.js by @hilongjw</li>
                                    <li><a href="https://github.com/Bubblings/vue-date-picker">vue-date-picker</a>: A simple datepicker component for Vue.js by @Bubblings</li>
                                    <li><a href="https://github.com/greyby/vue-spinner">vue-spinner</a>: A collection of loading spinners with Vue.js.</li>
                                    <li><a href="https://github.com/eduardostuart/vue-image-loader">vue-image-loader</a>: Async image loader for Vue.js by @eduardostuart</li>
                                    <li><a href="https://github.com/hilongjw/vue-progressbar">Vue-progressbar</a>: A lightweight progress bar for Vue.js by @hilongjw</li>
                                    <li><a href="https://github.com/paulpflug/vue-clusterize">vue-clusterize</a>: Invisible pagination / clusterize in vue</li>
                                    <li><a href="https://github.com/irwansyahwii/Famous-Vue">Famous-Vue</a>: Declarative Famous using Vue</li>
                                    <li><a href="https://github.com/MopTym/vue-waterfall">vue-waterfall</a>: A waterfall layout component for Vue.js by @MopTym</li>
                                    <li><a href="https://github.com/haydenbbickerton/vue-charts">vue-charts</a>: A Google Charts plugin for Vue.js by <a href="https://github.com/haydenbbickerton">@haydenbbickerton</a></li>
                                    <li><a href="https://github.com/paulpflug/vue-resize-handle">vue-resize-handle</a>: Resize elements by dragging / uni and bidirectional</li>
                                    <li><a href="https://github.com/airyland/vux">vux</a>: Mobile web UI Components based on Vue and WeUI</li>
                                    <li><a href="https://github.com/sagalbot/vue-select">vue-select</a>: Simple component that implements Select2/Chosen style dropdowns with no dependencies<sup>1.0</sup></li>
                                    <li><a href="https://github.com/hilongjw/vue-slide">Vue-slide</a>: A lightweight slide component for Vue.js by @hilongjw</li>
                                    <li><a href="https://github.com/CroudSupport/vue-quill">Vue-quill</a>: A Vue component implementing the <a href="https://github.com/quilljs/quill.git">Quill</a> text editor by @brockreece</li>
                                    <li><a href="https://github.com/zxdong262/vue-pagenav">vue-pagenav</a>: A vue pagenav plugin by <a href="https://github.com/zxdong262">@zxdong262</a></li>
                                    <li><a href="https://github.com/cucygh/vue-calendar">Vue-calendar</a>: A vue calendar component with less code by cucygh</li>
                                    <li><a href="http://appcomponents.org/material-components/">Vue Material Components</a>: Vue.js UI components using <a href="http://materializecss.com/">materializecss.com</a> by mjanys</li>
                                    <li><a href="https://github.com/BosNaufal/vue-autocomplete">vue-autocomplete</a> Autocomplete Component for Vue by <a href="https://github.com/BosNaufal">@BosNaufal</a></li>
                                    <li><a href="https://github.com/BosNaufal/vue-loading-bar">vue-loading-bar</a> Youtube Like Loading Bar Component for Vue by <a href="https://github.com/BosNaufal">@BosNaufal</a></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-i18n" class="anchor" href="#i18n" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>i18n</h4>
                                <ul>
                                    <li><a href="https://github.com/kazupon/vue-i18n">vue-i18n</a>: Internationalization plugin.</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-i18n">vue-i18n</a>: A plugin providing a global interface used to localize internationalized messages used in the</li>
                                    <li><a href="https://github.com/sebastian-software/vue-locale">vue-locale</a>: Advanced localization support for VueJS</li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-examples" class="anchor" href="#examples" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Examples</h4>
                                <ul>
                                    <li><a href="http://forum.vuejs.org/topic/39/starter-application-with-jwt-auth-sample-backend-api">Starter Application with JWT Auth + sample backend API in Laravel</a></li>
                                    <li><a href="https://github.com/brandonjpierce/node-webkit-boilerplate">Node Webkit + Vue example</a> by @brandonjpierce</li>
                                    <li><a href="https://github.com/superlloyd/VueSamples">Vue Samples</a> by @superlloyd</li>
                                    <li><a href="https://github.com/kazupon/vue-router-hackernews">HackerNews clone with vue.js + vue-router</a> by @kazupon</li>
                                    <li><a href="https://github.com/bradstewart/electron-boilerplate-vue">Electron + Vue example</a> by @bradstewart</li>
                                    <li><a href="https://github.com/inca/voie-example">Single page application example (Vue + Voie)</a> by <a href="https://github.com/inca">Boris Okunskiy</a></li>
                                    <li><a href="https://github.com/rajabishek/begin">Begin - Task Manager SPA written in Vue + Lumen</a> by <a href="https://github.com/rajabishek">Raj Abishek</a></li>
                                    <li><a href="https://github.com/BosNaufal/vue-mini-shop">Vue Mini Shop</a> by <a href="https://github.com/BosNaufal">BosNaufal</a></li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-boilerplates" class="anchor" href="#boilerplates" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Boilerplates</h4>
                                <ul>
                                    <li><a href="https://github.com/kazupon/vue-plugin-boilerplate">Boilerplate for Vue.js plugin </a> by @kazupon</li>
                                    <li><a href="https://github.com/rodzzlessa24/vue-electron">Boilerplate for Vue.js &amp; Atom Electron </a> by @rodzzlessa24</li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-scaffolding" class="anchor" href="#scaffolding" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Scaffolding</h4>
                                <ul>
                                    <li><a href="https://github.com/vuejs/vue-cli">vue-cli</a>: official CLI for scaffolding Vue.js projects.</li>
                                    <li><a href="https://github.com/BirdEggegg/generator-vue">Vue generator</a>: a simple yeoman generator for Vue by @BirdEggegg</li>
                                    <li><a href="https://github.com/jfelsinger/generator-venm">VENM stack yeoman generator</a> by @jfelsinger</li>
                                    <li><a href="https://github.com/mustardamus/generator-grail">Grail Yeoman Generator</a>: a advanced yeoman generator for a modern modular one page web app, extendable with Vue.js alongside other nice tools</li>
                                    <li><a href="https://github.com/egoist/vuepack">VuePack</a>: A modern starter for Vue and Webpack by @egoist</li>
                                    <li><a href="https://github.com/rodzzlessa24/vue-webgulp">VueWebgulp</a>: A skeleton app using Vuejs, Gulp, and Webpack by @rodzzlessa24</li>
                                    <li><a href="https://github.com/scottbedard/oc-vuetober-theme">Vuetober</a>: SPA scaffolding for October CMS</li>
                                    <li><a href="https://github.com/rodzzlessa24/vue-go-cli">vue-go-cli</a> - a CLI tool for scaffolding new projects generating components, services, and mixins.</li>
                                    <li><a href="https://github.com/nblackburn/brunch-with-vue">Brunch with Vue</a> - A skeleton application utilizing vue, vuex, vue-resource and vue-router.</li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-integrations" class="anchor" href="#integrations" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>Integrations</h4>
                                <ul>
                                    <li><a href="https://github.com/zhouzhuojie/meteor-vue">Vue for Meteor</a> by @zhouzhuojie</li>
                                    <li><a href="https://github.com/fancellu/scalajs-vue">ScalaJS bindings for Vue.js</a> by @fancellu</li>
                                    <li><a href="https://github.com/Socketize/vue.js-plugin">Socketize Backend</a>: Sync your model data to Socketize backend automatically. By <a href="https://github.com/Socketize">@Socketize</a></li>
                                    <li><a href="https://github.com/Grottolabs/vue-meteor-data">Vue-Meteor-Data</a> Two-way-reactivity mixin for Vue and Meteor by @JakobRosenberg</li>
                                    <li><a href="https://github.com/kaorun343/vue-property-decorator">Vue Proerty Decorator</a>: Property Decorators for Vue.js by @kaorun343</li>
                                </ul>
                            </li>
                            <li>
                                <h4><a id="user-content-general-pluginsdirectives" class="anchor" href="#general-pluginsdirectives" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg></a>General Plugins/Directives</h4>
                                <ul>
                                    <li><a href="https://github.com/vuejs/vue-element">vue-element</a>: Register real custom elements with Vue.</li>
                                    <li><a href="https://github.com/vuejs/vue-touch">vue-touch</a>: Hammer.js wrapper directives for touch gestures. (Updated for 1.0!)</li>
                                    <li><a href="https://github.com/vuejs/vue-animated-list">vue-animated-list</a>: A Vue.js plugin for easily animating <code>v-for</code> rendered lists.</li>
                                    <li><a href="https://github.com/lithiumjake/vue-placeholders">Vue placeholder directives</a> by @lithiumjake</li>
                                    <li><a href="https://github.com/holic/vue-viewport">Vue in viewport detection directive</a> by @holic</li>
                                    <li><a href="https://github.com/kewah/vue-once">Vue once directive</a> by @kewah</li>
                                    <li><a href="https://github.com/KyleRoss/vue-modified">Vue Modified Directive</a> by @KyleRoss</li>
                                    <li><a href="https://github.com/mark-hahn/vue-keep-scroll">Maintain scroll position on page changes</a> by @mark-hahn</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-titlecase">vue-titlecase</a>: A plugin providing a global filter and an instance method used to titlecase (different from capitalize) strings. By @Haixing-Hu</li>
                                    <li><a href="https://github.com/Haixing-Hu/vue-format">vue-format</a>: A plugin providing a global filter and an instance method used to format messages with arguments. By @Haixing-Hu application. By @Haixing-Hu</li>
                                    <li><a href="https://github.com/simplesmiler/vue-clickaway">vue-clickaway</a>: Assign a method to be called whenever user clicks away from the element. By @simplesmiler</li>
                                    <li><a href="https://github.com/simplesmiler/vue-focus">vue-focus</a>: Manage input focus in the MVVM-friendly way. By @simplesmiler</li>
                                    <li><a href="https://github.com/rhyzx/vue-transfer-dom">vue-transfer-dom</a>: Transfer DOM to another location. by @rhyzx</li>
                                    <li><a href="https://github.com/hilongjw/vue-lazyload">vue-lazyload</a>: lazyloading images. by @hilongjw</li>
                                    <li><a href="https://github.com/didierfranc/v-touch">v-touch</a>: The easiest way to use Hammer.js with Vue.js and use touch gestures. by <a href="https://github.com/didierfranc">@didierfranc</a> <sup>Vue.js 1.x</sup></li>
                                    <li><a href="https://github.com/paulpflug/vue-mixins">vue-mixins</a> A collection of mixins aimed to replace some jQuery functionality</li>
                                    <li><a href="https://github.com/paulpflug/vue-filters">vue-filters</a> A collection of filters</li>
                                    <li><a href="https://github.com/rascada/vue-round-filter">vue-round-filter</a> filter for rounding with whichever decimal accuracy</li>
                                    <li><a href="https://github.com/TahaSh/vue-paginate">vue-paginate</a> A simple plugin to use pagination in vue.js. by @TahaSh</li>
                                    <li><a href="https://github.com/rpkilby/vue-super">vue-super</a> A simple plugin to call methods on parent components.</li>
                                    <li><a href="https://github.com/arexio/vue-deepstream">vue-deepstream</a> Plugin to simplify event subscription and event trigger when using <a href="https://deepstream.io/">deepstream.io</a></li>
                                    <li><a href="https://github.com/Coffcer/vue-plain">vue-plain</a> Plugin to get plain object from vue getter/setter object.</li>
                                    <li><a href="https://github.com/BosNaufal/vue-calc-input">vue-calc-input</a> Vue directive to make a calculator input behavior by <a href="https://github.com/BosNaufal">@BosNaufal</a></li>
                                    <li><a href="https://github.com/BosNaufal/vue-move-dom">vue-move-dom</a> Vue Directive to move the DOM without losing all the VM data, event, etc. by <a href="https://github.com/BosNaufal">@BosNaufal</a></li>
                                </ul>
                            </li>
                        </ul>

                    </ul>
                </div>
            </div>
       </div>
   </div>


   </div>
   <!-- /.container -->



</template>

<script type="stylus">
export default {
    name: 'Home_page',
    vuex: {
        getters: {
            shortlocale: state => state.shortlocale,
            longlocale: state => state.longlocale
        }
    },
    data() {
        return {
            text : {
                title : {
                    nl : 'Hallo KdGCamp',
                    en : 'Hello KdGCamp!'
                },
                sometext : {
                    nl : 'Een curator lijst van geweldige dingen met betrekking tot Vue.js',
                    en : 'A curated list of awesome things related to Vue.js'
                }
            }
        }
    },
    filters: {
        locale: function(value, attribute) {

            switch (attribute) {
                case 'title':
                    return (this.shortlocale == 'nl') ? value.title.nl : value.title.en;
                break;
                case 'sometext':
                    return (this.shortlocale == 'nl') ? value.sometext.nl : value.sometext.en;
                break;
            }
        }
    }
}
</script>
