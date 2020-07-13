<template>
    <div>
        <button class="btn btn-primary ml-4 pl-3 pr-3" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {

        props: ['user_id', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return{
                status: this.follows,
            }

        },

        methods: {
            followUser(){
                axios.post('/follow/'+ this.user_id)
                    .then(response => {
                        this.status = !this.status;
                })
                .catch(errors =>{
                  if(errors.response.status == 401){
                      window.location = '/login'
                  }
                });
            }
        },

        computed: {
            buttonText (){
                return (this.status) ? 'Unfollow': 'Follow';
            }
        }
    }
</script>
