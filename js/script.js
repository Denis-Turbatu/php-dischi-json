const { createApp } = Vue;

createApp({
    data() {
        return {
            diskList: "",
        };
    },
    created(){
        axios.get("http://localhost/boolean/php-dischi-json/server.php").then((resp) => {
            this.diskList = resp.data;
            // debug
            // console.log(this.diskList[0].title);
        });
    },
    methods: {
        
    },
}).mount("#app");
