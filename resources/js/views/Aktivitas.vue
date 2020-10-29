<template>
  <div class="row container d-flex justify-content-center">
    <div class="col-sm-12">
      <div class="mb-5 mt-5"></div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {};
  },
  mounted() {
    this.load();
  },
  methods: {
    load() {
      this.axios
        .get("/api/laporan/aktivitas")
        .then((res) => {
          console.log(res.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  computed: {
    apa: function () {
      // return parseFloat(this.aktivaabtt) + parseFloat(this.abtt);
    },
  },
};
</script>