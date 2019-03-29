
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.events = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('search-bar', require('./components/SearchBar.vue'));
Vue.component('search-results', require('./components/SearchResults.vue'));
Vue.component('search-results-genres', require('./components/SearchResultGenres.vue'));
Vue.component('album-search-result', require('./components/AlbumSearchResult.vue'));

const app = new Vue({
    el: '#app'
});
