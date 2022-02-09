Vue.createApp({
    data(){
        return{
           essai:"Merci de bien vouloir remplir tous les champs."
        }
    },
    methods:{
        popup(){            
            alert('Inscription réussie!!');
        },
        popup_connexion(){
        document.getElementById("popup").style.backgroundColor ="red";
        }
    },
}).mount("#vue");

