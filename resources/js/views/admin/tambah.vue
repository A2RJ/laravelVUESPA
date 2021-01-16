<template>
    <div class="row container">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 offset-3">
                            <form class="mt-6">
                                <div class="form-group">
                                    <label for="a">Nama Lengkap</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="a">Username</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="a">Password</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="a">Konfirmasi Password</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="mt-3">
                                    <button
                                        type="submit"
                                        class="btn btn-md btn-outline-primary btn-rounded float-right"
                                    >
                                        Ubah
                                    </button>
                                </div>
                            </form>
                        </div>
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
