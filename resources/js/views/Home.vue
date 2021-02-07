<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <vue-chart
                        v-if="debet"
                        type="line"
                        :data="chartData"
                    ></vue-chart>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            debet: false,
            kredit: [],
            chartData: {},
            options: {
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    ]
                }
            }
        };
    },
    mounted() {
        axios
            .get("api/dashboard")
            .then(
                response => (
                    (this.debet = response.data.debet),
                    (this.kredit = response.data.kredit),
                    (this.chartData = {
                        labels: [
                            "Januari",
                            "Februari",
                            "Maret",
                            "April",
                            "Mei",
                            "Juni",
                            "Juli",
                            "Agustus",
                            "September",
                            "Oktober",
                            "November",
                            "Desember"
                        ],
                        datasets: [
                            {
                                label: "Debet",
                                data: response.data.debet,
                                backgroundColor: [
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)",
                                    "rgba(0, 0, 0, 0)"
                                ],
                                borderColor: [
                                    "rgba(34, 193, 195, 100)",
                                    "rgba(54, 162, 235, 1)",
                                    "rgba(255, 206, 86, 1)",
                                    "rgba(75, 192, 192, 1)",
                                    "rgba(153, 102, 255, 1)",
                                    "rgba(255, 159, 64, 1)",
                                    "rgba(255, 99, 132, 1)",
                                    "rgba(54, 162, 235, 1)",
                                    "rgba(255, 206, 86, 1)",
                                    "rgba(75, 192, 192, 1)",
                                    "rgba(153, 102, 255, 1)",
                                    "rgba(255, 159, 64, 1)"
                                ],
                                borderWidth: 1
                            },
                            {
                                label: "Kredit",
                                data: response.data.kredit,
                                backgroundColor: [
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)",
                                    "rgba(0,0,0,0)"
                                ],
                                borderColor: [
                                    "rgba(255, 20, 25, 100)",
                                    "rgba(54, 162, 235, 1)",
                                    "rgba(255, 206, 86, 1)",
                                    "rgba(75, 192, 192, 1)",
                                    "rgba(153, 102, 255, 1)",
                                    "rgba(255, 159, 64, 1)",
                                    "rgba(255, 99, 132, 1)",
                                    "rgba(54, 162, 235, 1)",
                                    "rgba(255, 206, 86, 1)",
                                    "rgba(75, 192, 192, 1)",
                                    "rgba(153, 102, 255, 1)",
                                    "rgba(255, 159, 64, 1)"
                                ],
                                borderWidth: 1
                            }
                        ]
                    })
                )
            )
            .catch(error => console.log(error));
    },
    methods: {}
};
</script>
