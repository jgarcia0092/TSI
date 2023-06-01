import Lingallery from 'lingallery';
import VueFaqAccordion from 'vue-faq-accordion';

export default {
    components: {
        Lingallery,
        VueFaqAccordion
    },
    props:[],
    data: function () {
        return {
            slidingItems: [
                {
                    src: 'https://images.tradeshowinternet.com/venue-wifi-tradeshowinternet.png',
                    thumbnail: 'https://images.tradeshowinternet.com/venue-wifi-tradeshowinternet.png',
                }
            ],
            accordionItems: [
                {
                    title: 'FEATURES',
                    value: 'Trade Show Internet provides temporary Internet connectivity solutions for trade shows, conferences, corporate meetings and outdoor events. Our 4G Internet Kit contains everything you need to get up to 15 devices online at your event. The broadband WiFi hotspot produces ideal bandwidth for surfing the web, checking emails, and doing software.'
                },
                {
                    title: 'APPLICATION',
                    value: 'Trade Show Internet provides temporary Internet connectivity solutions for trade shows, conferences, corporate meetings and outdoor events. Our 4G Internet Kit contains everything you need to get up to 15 devices online at your event. The broadband WiFi hotspot produces ideal bandwidth for surfing the web, checking emails, and doing software.'
                },
                {
                    title: 'SPECIFICATIONS',
                    value: 'Trade Show Internet provides temporary Internet connectivity solutions for trade shows, conferences, corporate meetings and outdoor events. Our 4G Internet Kit contains everything you need to get up to 15 devices online at your event. The broadband WiFi hotspot produces ideal bandwidth for surfing the web, checking emails, and doing software.'
                },
                {
                    title: 'DOCUMENTS',
                    value: 'Trade Show Internet provides temporary Internet connectivity solutions for trade shows, conferences, corporate meetings and outdoor events. Our 4G Internet Kit contains everything you need to get up to 15 devices online at your event. The broadband WiFi hotspot produces ideal bandwidth for surfing the web, checking emails, and doing software.'
                }
            ],
            internetKit: "4g",
            quantity: 0
        };
    },
    mounted: function () {

    },
    watch: {

    },
    methods: {

    }
}
