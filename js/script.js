const { createApp } = Vue;

createApp({
    data() {
        return {
            diskList: "",
        };
    },
    methods: {
        getDisks(){
            axios.get()
        },
    },
}).mount("#app");
