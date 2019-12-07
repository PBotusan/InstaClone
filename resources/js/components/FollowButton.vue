<template>
    <div>
       <button class="btn btn-primary" @click="followUser" >Follow</button>
    </div>
</template>

<script>
import { METHODS } from 'http';
    export default {
        mounted() {
            console.log('Component mounted.')
        },


        methods:
        {
            followUser()
            {
                axios.post('/follow/1')
                .then(response => {
                    alert(response.data);
                });
            }
        }

    }
</script>
