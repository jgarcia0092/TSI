/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

// Pages - Main
Vue.component('home', require('./pages/home/home.vue').default);
Vue.component('about', require('./pages/about/about.vue').default);
Vue.component('news', require('./pages/news/news.vue').default);
Vue.component('testimonials', require('./pages/testimonials/testimonials.vue').default);
Vue.component('contact', require('./pages/contact/contact.vue').default);

// Pages - Services
Vue.component('internet-kit', require('./pages/services/internet-kit/internet-kit.vue').default);
Vue.component('bandwidth', require('./pages/services/bandwidth/bandwidth.vue').default);
Vue.component('satellite', require('./pages/services/satellite/satellite.vue').default);
Vue.component('point-to-point', require('./pages/services/point-to-point/point-to-point.vue').default);
Vue.component('fiber', require('./pages/services/fiber/fiber.vue').default);
Vue.component('event-wifi', require('./pages/services/event-wifi/event-wifi.vue').default);
Vue.component('venue-wifi', require('./pages/services/venue-wifi/venue-wifi.vue').default);
Vue.component('event-it', require('./pages/services/event-it/event-it.vue').default);
Vue.component('wifi-captive-portal', require('./pages/services/wifi-captive-portal/wifi-captive-portal.vue').default);

// Pages - Event Types
Vue.component('automotive-events', require('./pages/event-types/automotive-events/automotive-events.vue').default);
Vue.component('corporate-events', require('./pages/event-types/corporate-events/corporate-events.vue').default);
Vue.component('entertainment-events', require('./pages/event-types/entertainment-events/entertainment-events.vue').default);
Vue.component('gaming-events', require('./pages/event-types/gaming-events/gaming-events.vue').default);
Vue.component('exhibitors', require('./pages/event-types/exhibitors/exhibitors.vue').default);
Vue.component('marketing-events', require('./pages/event-types/marketing-events/marketing-events.vue').default);
Vue.component('fashion-shows', require('./pages/event-types/fashion-shows/fashion-shows.vue').default);
Vue.component('festivals', require('./pages/event-types/festivals/festivals.vue').default);
Vue.component('hackathons', require('./pages/event-types/hackathons/hackathons.vue').default);
Vue.component('meetings-conferences', require('./pages/event-types/meetings-conferences/meetings-conferences.vue').default);
Vue.component('concerts-tours', require('./pages/event-types/concerts-tours/concerts-tours.vue').default);
Vue.component('outdoor-events', require('./pages/event-types/outdoor-events/outdoor-events.vue').default);
Vue.component('sporting-events', require('./pages/event-types/sporting-events/sporting-events.vue').default);
Vue.component('trade-shows', require('./pages/event-types/trade-shows/trade-shows.vue').default);

// Pages - Customer Events
Vue.component('recent-events', require('./pages/recent-events/recent-events.vue').default);

// Pages - Resources
Vue.component('ballpark-estimator', require('./pages/resources/ballpark-estimator/ballpark-estimator.vue').default);
Vue.component('bandwidth-calculator', require('./pages/resources/bandwidth-calculator/bandwidth-calculator.vue').default);
Vue.component('white-papers', require('./pages/resources/white-papers/white-papers.vue').default);
Vue.component('consumer-rights', require('./pages/resources/consumer-rights/consumer-rights.vue').default);

// Pages - Help
Vue.component('faq', require('./pages/help/faq/faq.vue').default);

// Components
Vue.component('event-card', require('./components/event-card/event-card.vue').default);
Vue.component('number-input', require('./components/number-input/number-input.vue').default);
Vue.component('subscriber', require('./components/subscriber/subscriber.vue').default);
Vue.component('event-row', require('./components/event-row/event-row.vue').default);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var Events = new Vue({});
const _app = new Vue({
    el: '#app',
    data: {

    },
    mounted: function() {

    },
    methods: {

    }
});
