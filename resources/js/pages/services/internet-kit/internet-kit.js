import Lingallery from 'lingallery';
import VueFaqAccordion from 'vue-faq-accordion';
import { FunctionalCalendar } from 'vue-functional-calendar';

export default {
    components: {
        Lingallery,
        VueFaqAccordion,
        FunctionalCalendar
    },
    props:[],
    data: function () {
        return {
            slidingItems: [
                {
                    src: 'https://s3-us-west-2.amazonaws.com/com.tradeshowinternet/images/mega_kit_open_grey.png',
                    thumbnail: 'https://s3-us-west-2.amazonaws.com/com.tradeshowinternet/images/mega_kit_open_grey.png',
                },
                {
                    src: 'https://s3-us-west-2.amazonaws.com/com.tradeshowinternet/images/kit_case_grey.png',
                    thumbnail: 'https://s3-us-west-2.amazonaws.com/com.tradeshowinternet/images/kit_case_grey.png',
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
