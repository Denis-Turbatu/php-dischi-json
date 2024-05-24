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
        });
    },
    methods: {
        toggleLike(index){
            // salvataggio dati da mandare al server

            const data = {
                update_index: index,
                update_like: !this.diskList[index].like,
            };
            
            // chiamata POST
            axios.post("http://localhost/boolean/php-dischi-json/server.php",
            data,
            { headers: { 
                    "Content-type": "multipart/form-data",
                },
            })
            .then((resp) => {
                console.log(resp);
                // this.diskList = resp.data;
            })
        }
    },
}).mount("#app");
