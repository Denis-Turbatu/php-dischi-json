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
            let update_like = null;
            let index_like = index;
            update_like = !this.diskList[index].like;

            // chiamata POST
            axios.post(
                "http://localhost/boolean/php-dischi-jsonserver.php", update_like, index_like, 
                    {headers: {"Content-type": "multipart/form-data"}}).then(
                    (resp) => {
                        this.diskList = resp.data;
                    })
        }
    },
}).mount("#app");
