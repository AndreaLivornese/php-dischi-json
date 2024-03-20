
const { createApp } = Vue;

  createApp({
    data() {
        return {

            dischi: [],
            indexDiscSelected:null,

            selectedDisc:{},

        }
    },
    mounted(){

        axios.get("server.php").then(res=>{
    
            console.log(res);

            this.dischi = res.data;

            console.log(this.dischi);
    
        });
    },
    methods:{

        selctedDisc(index){
            this.indexDiscSelected = index;

            axios.get("server.php?discIndex="+index).then(rep=>{

                this.selectedDisc={...rep.data};
            });


        },


        hideOverview(){
            this.indexDiscSelected = null;
        }

    }
    
  }).mount('#app');