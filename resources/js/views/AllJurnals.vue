<template>
    <div class="mt-4">
        
    </div>
</template>

<script>
    export default {
        components: {
            
        },
        data() {
            return {
                jurnals: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/jurnals')
                .then(response => {
                    this.jurnals = response.data;
                }
            );
        }
    }
</script>