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
            axios.get('http://127.0.0.1:8000/api/alumnos')

        .then(function(response){
            console.log(response)
        })    
        }
}
</script>