{{-- <script>
    $(function() {
        const cashTransactionStatisticURL =
            "{{ route('dashboard.trans.statistics') }}";
        const cashAmountStatisticURL =
            "{{ route('dashboard.sum.statistics') }}";
        const cashTargetYearStatisticURL =
            "{{ route('dashboard.percentage.targets') }}";

        function initCashTransactionsChartByYear(data) {
            const cashTransactionsChartByYear = {
                chart: {
                    type: "bar",
                    height: 250,
                },
                series: [{
                    name: "Total Transaksi",
                    data: [
                        data.data.jan,
                        data.data.feb,
                        data.data.mar,
                        data.data.apr,
                        data.data.mei,
                        data.data.jun,
                        data.data.jul,
                        data.data.agu,
                        data.data.sep,
                        data.data.okt,
                        data.data.nov,
                        data.data.des,
                    ],
                }, ],
                colors: ["#435ebe"],
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return value.toFixed(0);
                        }
                    }
                },
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "Mei",
                        "Jun",
                        "Jul",
                        "Agu",
                        "Sep",
                        "Okt",
                        "Nov",
                        "Des",
                    ],
                },
            };

            chart = new ApexCharts(
                document.querySelector("#chart-cash-transactions-by-year"),
                cashTransactionsChartByYear
            );
            chart.render();
        }

        function initCashTransactionsChartAmountByYear(data) {
            const options = {
                series: [{
                    name: "Jumlah Transaksi",
                    data: Object.values(data.data),
                }, ],
                chart: {
                    height: 250,
                    type: "line",
                    zoom: {
                        enabled: false,
                    },
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return 'Rp ' + val.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                    }
                },
                stroke: {
                    curve: "straight",
                },
                grid: {
                    row: {
                        colors: ["#f3f3f3",
                            "transparent"
                        ], 
                        opacity: 0.5,
                    },
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return 'Rp ' + value.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                        }
                    }
                },
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "Mei",
                        "Jun",
                        "Jul",
                        "Agu",
                        "Sep",
                        "Okt",
                        "Nov",
                        "Des",
                    ],
                },
            };

            new ApexCharts(
                document.querySelector("#chart-cash-amount-by-year"),
                options
            ).render();
        }

        function initTargetTahunan(data) {
            let sudahArray = data.map(item => item.sudah);
            let belumArray = data.map(item => item.belum);
            var options = {
                series: [{
                    name: 'Tercapai',
                    data: sudahArray
                }, {
                    name: 'Belum Tercapai',
                    data: belumArray
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded',
                        dataLabels: {
                            position: 'top',
                        },
                    },
                },
                colors: ['#00E396', '#E91E63'],
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val.toFixed(1) + "%";
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ["Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "Mei",
                        "Jun",
                        "Jul",
                        "Agu",
                        "Sep",
                        "Okt",
                        "Nov",
                        "Des",
                    ],
                },
                yaxis: {
                    title: {
                        text: 'Pencapaian (%)'
                    },
                    labels: {
                        formatter: function(val) {
                            return val.toFixed(0);
                        }
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val.toFixed(1) + " %"
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#target-tahunan"), options);
            chart.render();
        }

        function initCharts() {
            $.ajax({
                url: cashTransactionStatisticURL,
                data: {
                    year: new Date().getFullYear(),
                },
                success: function(res) {
                    initCashTransactionsChartByYear(res);
                },
            });
            $.ajax({
                url: cashAmountStatisticURL,
                data: {
                    amount: new Date().getFullYear(),
                },
                success: function(res) {
                    initCashTransactionsChartAmountByYear(res);
                },
            });
            $.ajax({
                url: cashTargetYearStatisticURL,
                data: {
                    amount: new Date().getFullYear(),
                },
                success: function(res) {
                    initTargetTahunan(Object.values(res.data));
                },
            });

        }
        initCharts();
    });
</script> --}}
