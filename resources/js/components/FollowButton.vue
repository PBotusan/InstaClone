<template>
    <div>
       <button class="btn btn-primary" @click="followUser" >Follow</button>
    </div>
</template>

<script>
import { METHODS } from 'http';
    export default {

        props: ['userid'],

        mounted() {
            console.log('Component mounted.')
        },


        methods:
        {
            followUser()
            {
                axios.post('/follow/' + this.userid)
                .then(response => {
                    console.log(response.data);
                });
            }
        }

    }
</script>
