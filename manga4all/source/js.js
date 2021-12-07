Vue.createApp({
    data(){
        return{
           essai:"Merci de bien vouloir remplir tous les champs."
        }
    },
    methods:{
        popup(){            
            alert('Inscription réussie!!');
        }
    },
}).mount("#vue");