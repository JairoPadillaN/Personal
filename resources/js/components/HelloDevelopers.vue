<template>
    <h2> Hola Desarrolladores, sean Bienvenidos </h2>    
</template>
<script>
    import axios from 'axios'
    export default{
        name:'Inicio',
        data(){
            return{
                posts:[]
            }
        },
        mounted(){
            axios.get('https://pokeapi.co/api/v2/pokemon/ditto')

        .then(function(response){
            console.log(response)
        })    
        }
}
</script>