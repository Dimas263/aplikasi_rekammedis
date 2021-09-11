<?php
require_once "../_config/config.php";
include_once('../_header.php');
?>
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            Home
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="tab-content pb-3" id="v-pills-tabContent">
                <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                    <div class="row my-3">
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <img src="https://img.icons8.com/color/48/000000/cast.png"/>
                                    </div>
                                    <div class="counter-title">Pasien</div>
                                    <?php
                                    // mengambil data pasien
                                    $data_pasien = mysqli_query($con,"SELECT * FROM tb_pasien");

                                    // menghitung data pasien
                                    $jumlah_pasien = mysqli_num_rows($data_pasien);
                                    ?>
                                    <h5 class="sc-counter mt-3"><?=$jumlah_pasien?></h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: <?=$jumlah_pasien?>%;" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <img src="https://img.icons8.com/color/48/000000/medical-doctor.png"/>
                                    </div>
                                    <div class="counter-title ">Dokter</div>
                                    <?php
                                    // mengambil data dokter
                                    $data_dokter = mysqli_query($con,"SELECT * FROM tb_dokter");

                                    // menghitung data dokter
                                    $jumlah_dokter = mysqli_num_rows($data_dokter);
                                    ?>
                                    <h5 class="sc-counter mt-3"><?=$jumlah_dokter?></h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: <?=$jumlah_dokter?>%;" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <img src="https://img.icons8.com/color/48/000000/doctor-female.png"/>
                                    </div>
                                    <div class="counter-title">Suster</div>
                                    <?php
                                    // mengambil data suster
                                    $data_suster = mysqli_query($con,"SELECT * FROM tb_suster");

                                    // menghitung data suster
                                    $jumlah_suster = mysqli_num_rows($data_suster);
                                    ?>
                                    <h5 class="sc-counter mt-3"><?=$jumlah_suster?></h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: <?=$jumlah_suster?>%;" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <img src="https://img.icons8.com/color/48/000000/pills.png"/>
                                    </div>
                                    <div class="counter-title">Obat</div>
                                    <?php
                                    // mengambil data obat
                                    $data_obat = mysqli_query($con,"SELECT * FROM tb_obat");

                                    // menghitung data obat
                                    $jumlah_obat = mysqli_num_rows($data_obat);
                                    ?>
                                    <h5 class="sc-counter mt-3"><?=$jumlah_obat?></h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: <?=$jumlah_obat?>%;" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white p-5 r-5">
                                <div class="card-title">
                                    <h5> Rekammedis</h5>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <div class="my-3 mt-4">
                                            <h5>Laporan Rekammedis Pasien</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-9" style="height: 350px">
                                        <canvas data-chart="line" data-dataset="[
                                                            [0, 15, 4, 15, 8, 1, 2],
                                                            [1, 7, 21, 4, 12, 5, 0],

                                                            ]" data-labels="['2016', '2017', '2018', '2019', '2020', '2021']"
                                                data-dataset-options="[
                                                            {   label:'Pasien Bedah',
                                                                fill: true,
                                                                backgroundColor: 'rgba(50,141,255,.2)',
                                                                borderColor: '#328dff',
                                                                pointBorderColor: '#328dff',
                                                                pointBackgroundColor: '#fff',
                                                                pointBorderWidth: 2,
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#328dff',
                                                                pointHoverBorderColor: '#328dff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,

                                                            },
                                                            {
                                                                label:'Pasien Umum',
                                                                fill: false,
                                                                borderDash: [5, 5],
                                                                backgroundColor: 'rgba(87,115,238,.3)',
                                                                borderColor: '#2979ff',
                                                                pointBorderColor: '#2979ff',
                                                                pointBackgroundColor: '#2979ff',
                                                                pointBorderWidth: 2,

                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#2979ff',
                                                                pointHoverBorderColor: '#fff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,

                                                            }
                                                            ]"
                                                data-options="{
                                                                    maintainAspectRatio: false,
                                                                    legend: {
                                                                        display: true
                                                                    },

                                                                    scales: {
                                                                        xAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',

                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }],
                                                                        yAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }]

                                                                    },
                                                                    elements: {
                                                                        line: {

                                                                            tension: 0.4,
                                                                            borderWidth: 1
                                                                        },
                                                                        point: {
                                                                            radius: 2,
                                                                            hitRadius: 10,
                                                                            hoverRadius: 6,
                                                                            borderWidth: 4
                                                                        }
                                                                    }
                                                                }">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once('../_footer.php');
?>