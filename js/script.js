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
        toggleLike(index){
            // salvataggio dati da mandare al server
            const updateData = {
                index_like: index,
                update_like: !this.diskList[index].like,
            }
            
            // chiamata POST
            axios.post(
                "http://localhost/boolean/php-dischi-json/server.php", updateData, 
                    {headers: {"Content-type": "application/json"}}).then(
                    (resp) => {
                        this.diskList = resp.data;
                    })
        }
    },
}).mount("#app");
