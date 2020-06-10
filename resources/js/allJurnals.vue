<template>
    <div>
        <h3 class="text-center">All Books</h3><br/>
        {{ books }}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <!--  -->
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/jurnals')
                .then(response => {
                    this.books = response.data;                    
                });
        }
    }
</script>