<?php
include "../koneksi/koneksi.php";
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="row">
    <div class="col-md-12">
        <h5 class="text-center">Kategori Umur</h5>

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
                    ['Kategori', 'Umur'],
                    ['0-4 tahun',
                        <?php
                        $sql = "SELECT count(umur) as hasil_1 from penduduk WHERE umur >= '0' AND umur < '5'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_1'];
                        ?>
                    ],
                    ['5-9 tahun',
                        <?php
                        $sql = "SELECT count(umur) as hasil_2 from penduduk WHERE umur >= '5' AND umur < '10'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_2'];
                        ?>
                    ],
                    ['9-15 tahun',
                        <?php
                        $sql = "SELECT count(umur) as hasil_3 from penduduk WHERE umur >= '9' AND umur < '16'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_3'];
                        ?>
                    ],
                    ['16-25 tahun',
                        <?php
                        $sql = "SELECT count(umur) as hasil_4 from penduduk WHERE umur >= '16' AND umur < '26'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_4'];
                        ?>
                    ],
                    ['26-40 tahun',
                        <?php
                        $sql = "SELECT count(umur) as hasil_5 from penduduk WHERE umur >= '26' AND umur < '41'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_5'];
                        ?>
                    ],
                    ['41-55 tahun',
                        <?php
                        $sql = "SELECT count(umur) as hasil_6 from penduduk WHERE umur >= '41' AND umur < '56'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_6'];
                        ?>
                    ],
                    ['56 keatas',
                        <?php
                        $sql = "SELECT count(umur) as hasil_7 from penduduk WHERE umur > '55'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['hasil_7'];
                        ?>
                    ]
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': 'Statistik Umur Di Desa Singabangsa',
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