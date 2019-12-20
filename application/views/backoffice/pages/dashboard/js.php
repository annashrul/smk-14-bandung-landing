<script>
    $(document).ready(function(){
        get();
    })

    function get(){
        $.ajax({
            url: "<?=urls('home')?>",
            beforeSend: function(result){
                NProgress.start();HoldOn.open(optionsLoader);
            },
            success: function(data){
                NProgress.done();HoldOn.close();
                const res = JSON.parse(data);
                 Morris.Bar({
                    element: 'morris-pengunjung',
                    behaveLikeLine: true,
                    data: res.chart,
                    barColors: function (row, series, type) {
                        if (row.label == 'SENIN') {
                            return 'yellow';
                        }
                        if (row.label == 'SELASA') {
                            return 'green';
                        }
                        if (row.label == 'RABU') {
                            return '#ea65a2';
                        }
                        if (row.label == 'KAMIS') {
                            return '#fcb03b';
                        }
                        if (row.label == 'JUMAT') {
                            return 'red';
                        }
                        if (row.label == 'SABTU') {
                            return '#566FC9';
                        }
                        if (row.label == 'MINGGU') {
                            return 'blue';
                        }
                    },
                    xkey: 'x',
                    ykeys: ['y'],
                    labels: ['Penjualan']
                });
                Morris.Donut({
                    element: 'donut-morris-chart',
                    data: res.donut,
                    colors: [
                        '#fcb03b',
                        '#ea65a2',
                        '#566FC9'
                    ],
                    resize: true,
                    labelColor: '#2f2c2c',
                    formatter: function (x) { return x + "%"}
                });
                // id(result.)
            }
        });
    }

</script>