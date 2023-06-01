export default {
    props: {
        value: Number
    },
    data: function () {
        return {
            inputValue: this.value
        };
    },
    mounted: function () {

    },
    watch: {

    },
    methods: {
        increase: function() {
            this.inputValue += 1;
        },
        decrease: function() {
            if (this.inputValue > 0) {
                this.inputValue -= 1;
            }
        }
    }
}
