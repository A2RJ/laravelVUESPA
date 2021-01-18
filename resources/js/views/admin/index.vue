<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <button class="mt-1 btn btn-info mb-4 btn-sm btn-rounded">Tambah Admin</button>
                    <h4 class="card-title">Daftar Admin</h4>
                    <!-- <h6 class="card-subtitle">
                        DataTables has most features enabled by default, so all
                        you need to do to use it with your own tables is to call
                        the construction function:<code> $().DataTable();</code
                        >. You can refer full documentation from here
                        <a href="https://datatables.net/">Datatables</a>
                    </h6> -->
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
                                <tr>
                                    <td>Tiger Nixon</td>
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
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
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
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
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
        return {};
    },
    mounted() {},
    methods: {}
};
</script>
