import GoTop from '@inotom/vue-go-top';

export default {
    components: {
        GoTop
    },
    props:[],
    data: function () {
        return {
            cards: [
                { id: 1, imageUrl: "images/events/trade-shows.png", title: "TRADE SHOW", desc: "We offer a high-performance connectivity for your booth or stand." },
                { id: 2, imageUrl: "images/events/experimental-marketing.png", title: "EXPERIENTIAL MARKETING", desc: "We provide a reliable event WiFi network to delight your participants." },
                { id: 3, imageUrl: "images/events/corporate.png", title: "CORPORATE EVENT", desc: "We deliver world-class Internet connectivity for your attendees." },
                { id: 4, imageUrl: "images/events/hackathons.png", title: "HACKATHON", desc: "Temporary Internet and WiFi solutions for hackathons." },
                { id: 5, imageUrl: "images/events/outdoor.png", title: "OUTDOOR EVENT", desc: "We provide Internet bandwidth wired network and WiFi connectivity." },
                { id: 6, imageUrl: "images/events/fashion-shows.png", title: "FASHION SHOW", desc: "We ensure runway translates into frictionless tweets, and live video." },
                { id: 7, imageUrl: "images/events/festivals.png", title: "FESTIVAL", desc: "Ability to share photos and videos in real time on social media." },
                { id: 8, imageUrl: "images/events/meetings-conferences.png", title: "MEETINGS & CONFERENCES", desc: "Internet is expected to be working perfectly for the duration of the event." },
                { id: 9, imageUrl: "images/events/automative.png", title: "AUTOMOTIVE EVENT", desc: "We build custom networks, supported on-site throughout your event" },
                { id: 10, imageUrl: "images/events/exhibits.png", title: "EXHIBIT", desc: "Provide reliable event Internet service in high-density environments." },
                { id: 11, imageUrl: "images/events/game.png", title: "GAME EVENT", desc: "Secutying internet to multi-player live tournaments." },
                { id: 12, imageUrl: "images/events/sport.png", title: "SPORTING EVENT", desc: "We draft our expert network engineers to join your team." },
            ]
        };
    },
    mounted: function () {

    },
    watch: {

    },
    methods: {

    }
}
