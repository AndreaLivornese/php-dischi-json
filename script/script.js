
const { createApp } = Vue;

  createApp({
    data() {
        return {

            dischi: [],

        }
    },
    mounted(){

        axios.get("server.php").then(res=>{
    
            console.log(res);

            this.dischi = res.data;

            console.log(this.dischi);
    
        });
    }
    
  }).mount('#app');