<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <router-link to="/Tambah">
                    <button class="mt-1 btn btn-info mb-4 btn-sm btn-rounded">Tambah Admin</button>
                    </router-link>
                    <h4 class="card-title">Daftar Admin</h4>
                    <div class="table-responsive">
                        <table
                            id="zero_config"
                            class="table table-striped table-bordered no-wrap"
                        >
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  v-for="(admin,
                                                index) in admins.data"
                                                :key="index">
                                    <td>{{ admin.name }}</td>
                                    <td>System Architect</td>
                                    <td>
                                        <button
                                            class="mt-1 btn btn-outline-warning btn-sm btn-rounded"
                                        >
                                            Ubah
                                        </button>
                                        <button
                                            class="mt-1 btn btn-outline-danger btn-sm btn-rounded"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Opsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            admins: {}
        }
    },
    mounted() {
        axios
            .get("api/auth")
            .then(
                res => (this.admins = res.data)
            );
    },
    methods: {}
};
</script>
