<?php
include "../koneksi/koneksi.php";
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="row">
    <div class="col-md-12">
        <h5 class="text-center">Kategori Jenis Kelamin</h5>

        <div class="d-flex justify-content-center">
            <div id="piechart"></div>
        </div>

        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Kategori', 'Jenis Kelamin'],
                    ['laki-laki',
                        <?php
                        $sql = "SELECT count(jenkel) as hasil_lk from penduduk WHERE jenkel='laki-laki'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_lk'];
                        ?>
                    ],
                    ['perempuan',
                        <?php
                        $sql = "SELECT count(jenkel) as hasil_pr from penduduk WHERE jenkel='perempuan'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_pr'];
                        ?>
                    ]

                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': 'Statistik Jenis Kelamin Di Desa Singabangsa',
                    // 'width': 550,
                    // 'height': 400
                };

                // Display the chart inside the div element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </div>
</div>