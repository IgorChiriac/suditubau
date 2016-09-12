/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { Slider, SliderItem } from 'vue-easy-slider'
import GalleryItem from './components/Gallery-Item.vue';
import Masonry from 'masonry-layout'
import Vue from 'vue'
import { FormHelpers } from 'vue-laravel-forms'

Vue.use(FormHelpers);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('about', require('./components/About.vue'));
Vue.component('contact-form', require('./components/Contact-Form.vue'));



const app = new Vue({
    el: 'body',
    components: {
        Slider,
        SliderItem,
        GalleryItem
    }
});

Vue.http.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;


$(document).ready(function() {
    $("a.grouped_elements").fancybox();
    new Masonry( '.masonryContainer', {
        itemSelector: '.grid-item',
        filtersGroupSelector: '.filters',
        columnWidth: 170,
        percentPosition: false,
        gutter: 5
    });
});

