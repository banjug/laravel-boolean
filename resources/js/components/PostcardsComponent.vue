<template>
    <div class="container">        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3" v-for="postcard, i in postcards" :key="i">
                    <div class="card-header">{{postcard.sender}}</div>

                    <div class="card-body">
                        {{postcard.address}}
                    </div>
                    <div class="card-body">
                        {{postcard.text}}
                    </div>
                    <div v-if="postcard.image" class="card-body">
                        {{postcard.image}}
                    </div>
                    <div v-else class="card-body">
                        No image.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                postcards: []
            }
        },
        mounted() {
            axios.get('/api/postcards/list')
                .then(r=>this.postcards=r.data)
                .catch(e=>console.error(e))
        }
    }
</script>
