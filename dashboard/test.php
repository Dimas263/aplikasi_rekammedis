<?php
include_once('../_header.php');
require_once "../_config/config.php";
?>

  <div>
  <p class="pull-left"><h2>Hi, <b style="color: #ff0000"><?=$_SESSION['user'];?></b> <br/>Selamat Datang di Dimas Hospital<br/>Kesehatan Pasien Prioritas Dimas Hospital</h2></p><br/>
  </div>
  <a href="#menu-toggle" class="btn btn-danger" style="font-weight:bold" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i> Menu</a>
  <br/><br/>

<body oncontextmenu="return false;">
    <div>
        <div>
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <form class="navbar-form" method="POST" action="search">
                       <div >
                          <input type="text" value="" name="search" class="form-control" placeholder="Search...">
                          <button type="submit" name="submit" class="btn btn-danger btn-round btn-just-icon">
                              <i class="material-icons">search</i>
                          </button>
                       </div>
                    </form>
                  </li>
                  <li class="nav-item dropdown">
                      <?php
                      $query = "SELECT * FROM tb_rekammedis 
                    INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
                    INNER JOIN tb_dokter ON tb_rekammedis.id_dokter= tb_dokter.id_dokter
                    INNER JOIN tb_klinik ON tb_rekammedis.id_klinik= tb_klinik.id_klinik
                    order by nama_pasien asc";
                      $sql_rekammedis = mysqli_query($con, $query) or die (mysqli_error($con));
                      while ($data = mysqli_fetch_array($sql_rekammedis)){
                      ?>
                    <a class="nav-link" href="index " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons" style="color:#083d77;font-size: 38px;">notifications</i>
                      <span class="notification"><?=mysqli_num_rows($sql_rekammedis);?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="../rekammedis/data ">Rekam Medis Berhasil ditambahkan&nbsp; <b><?=$data['nama_pasien'] ?></b></a>
                    </div>
                          <?php
                      }
                      ?>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons" style="color:#083d77;font-size: 38px;">person</i>
                      <p class="d-lg-none d-md-block">
                        Account
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                      <a class="dropdown-item" href="../auth/logout ">Log out</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
        </div>
      <!-- End Navbar -->
      <div class="content container-fluid">
            
          <div class="row">
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-light card-header-icon">
                  <div class="card-icon" style="background-color:#083d77">
                    <i><img src="https://img.icons8.com/color/48/000000/doctor-male--v1.png"/></i>
                  </div>
                  <p class="card-category"><a href="<?=base_url('dokter/data ')?>" style="color: #808080;">Data Dokter</a></p>
                  <?php
                    // mengambil data dokter
                        $data_dokter = mysqli_query($con,"SELECT * FROM tb_dokter");
                    
                    // menghitung data dokter
                        $jumlah_dokter = mysqli_num_rows($data_dokter);
                    ?>
                  <h3 class="card-title"><?php echo $jumlah_dokter; ?>
                  <small> Dokter</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons" style="color: #808080;">date_range</i>
                    <a href="../dokter/data " style="color: #808080;">Lihat Data Dokter</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-light card-header-icon">
                  <div class="card-icon" style="background-color:#ebebd3">
                    <i><img src="https://img.icons8.com/color/48/000000/nurse-male.png"/></i>
                  </div>
                  <p class="card-category"><a href="<?=base_url('suster/data ')?>" style="color: #808080;">Data Suster</a></p>
                    <?php
                    // mengambil data suster
                      $data_suster = mysqli_query($con,"SELECT * FROM tb_suster");
                    
                    // menghitung data suster
                      $jumlah_suster = mysqli_num_rows($data_suster);
                    ?>
                  <h3 class="card-title"><?php echo $jumlah_suster; ?>
                    <small> Suster</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons" style="color: #808080;">baby_changing_station</i>
                    <a href="../suster/data " style="color: #808080;">Lihat Data Suster</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-light card-header-icon">
                  <div class="card-icon"style="background-color: #f4d35e;">
                    <i><img src="https://img.icons8.com/color/48/000000/hospital-room.png"/></i>
                  </div>
                  <p class="card-category"><a href="<?=base_url('klinik/data ')?>" style="color: #808080;">Data Poliklinik</a></p>
                  <?php
                    // mengambil data poliklinik
                        $data_klinik = mysqli_query($con,"SELECT * FROM tb_klinik");
                    
                    // menghitung data poliklinik
                        $jumlah_klinik = mysqli_num_rows($data_klinik);
                    ?>
                  <h3 class="card-title"><?php echo $jumlah_klinik; ?>
                  <small> Poliklinik</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons" style="color: #808080;">local_hospital</i> 
                    <a href="../klinik/data " style="color: #808080;">Lihat Data Poliklinik</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-light card-header-icon">
                  <div class="card-icon" style="background-color:#0fa3b1">
                    <i><img src="https://img.icons8.com/color/48/000000/thin-test-tube.png"/></i>
                  </div>
                  <p class="card-category"><a href="<?=base_url('obat/data ')?>" style="color: #808080;">Data Obat</a></p>
                  <?php
                    // mengambil data obat
                        $data_obat = mysqli_query($con,"SELECT * FROM tb_obat");
                    
                    // menghitung data obat
                        $jumlah_obat = mysqli_num_rows($data_obat);
                    ?>
                  <h3 class="card-title"><?php echo $jumlah_obat; ?>
                  <small> Obat</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons" style="color: #808080;">hourglass_bottom</i>
                    <a href="../obat/data " style="color: #808080;">Lihat Data Obat</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
              <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-light card-header-icon">
                  <div class="card-icon" style="background-color:#ee964b">
                    <i><img src="https://img.icons8.com/color/48/000000/therapy.png"/></i>
                  </div>
                  <p class="card-category"><a href="<?=base_url('pasien/data ')?>" style="color: #808080;">Data Pasien</a></p>
                    <?php
                    // mengambil data pasien
                        $data_pasien = mysqli_query($con,"SELECT * FROM tb_pasien");
                    
                    // menghitung data pasien
                        $jumlah_pasien = mysqli_num_rows($data_pasien);
                    ?>
                  <h3 class="card-title"><?php echo $jumlah_pasien; ?>
                    <small> Pasien</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons" style="color: #808080;">emoji_people</i>
                    <a href="../pasien/data " style="color: #808080;">Lihat Data Pasien</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
              <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-light card-header-icon">
                  <div class="card-icon" style="background-color:#f95738">
                    <i><img src="https://img.icons8.com/color/48/000000/physical-therapy.png"/></i>
                  </div>
                  <p class="card-category"><a href="<?=base_url('rekammedis/data ')?>" style="color: #808080;">Rekam Medis</a></p>
                  <?php
                    // mengambil data Rekam Medis
                        $data_rekammedis = mysqli_query($con,"SELECT * FROM tb_rekammedis");
                    
                    // menghitung data Rekam Medis
                        $jumlah_rekammedis = mysqli_num_rows($data_rekammedis);
                    ?>
                  <h3 class="card-title"><?php echo $jumlah_rekammedis; ?>
                  <small> Rekam Medis</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons" style="color: #808080;">menu_book</i>
                    <a href="../rekammedis/data " style="color: #808080;">Lihat Rekam Medis</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-7">
              <div class="card card-chart" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header">
                <div>
                	<script type="text/javascript" src="chartjs/Chart.js"></script>
                </div>
                <div>
                	<style type="text/css">
                		body{
                			font-family: roboto;
                		}
                	</style>
                
                	<div style="max-width: 1000px;">
                		<canvas id="grafikpasien"></canvas>
                	</div>
                
                	<script>
                		var ctx = document.getElementById("grafikpasien").getContext('2d');
                		var grafikpasien = new Chart(ctx, {
                			type: 'bar',
                			data: {
                				labels: ["Pribadi","Allianz","Prudential","Axa","Cigna","Manulife","BPJS"],
                				datasets: [{
                					label: '',
                					data: [
                					<?php 
                					$data_pribadi = mysqli_query($con,"select * from tb_pasien where jenis_pasien='Pribadi'");
                					$jumlah_pribadi= mysqli_num_rows($data_pribadi);
                					echo $jumlah_pribadi; ?>,
                					<?php 
                					$data_Allianz = mysqli_query($con,"select * from tb_pasien where jenis_pasien='Allianz'");
                					$jumlah_Allianz= mysqli_num_rows($data_Allianz);
                					echo $jumlah_Allianz; ?>,
                					<?php 
                					$data_prudential = mysqli_query($con,"select * from tb_pasien where jenis_pasien='Prudential'");
                					$jumlah_prudential= mysqli_num_rows($data_prudential);
                					echo $jumlah_prudential; ?>,
                					<?php 
                					$data_Axa = mysqli_query($con,"select * from tb_pasien where jenis_pasien='Axa'");
                					$jumlah_Axa= mysqli_num_rows($data_Axa);
                					echo $jumlah_Axa; ?>,
                					<?php 
                					$data_Cigna = mysqli_query($con,"select * from tb_pasien where jenis_pasien='Cigna'");
                					$jumlah_Cigna= mysqli_num_rows($data_Cigna);
                					echo $jumlah_Cigna; ?>,
                					<?php 
                					$data_Manulife = mysqli_query($con,"select * from tb_pasien where jenis_pasien='Manulife'");
                					$jumlah_Manulife= mysqli_num_rows($data_Manulife);
                					echo $jumlah_Manulife; ?>,
                					<?php 
                					$data_bpjs = mysqli_query($con,"select * from tb_pasien where jenis_pasien='BPJS'");
                					$jumlah_bpjs= mysqli_num_rows($data_bpjs);
                					echo $jumlah_bpjs; ?>
                					],
                					backgroundColor: [
                					'#083D77',
                					'#EBEBD3',
                					'#F4D35E',
                					'#0FA3B1',
                					'#EE964B',
                					'#F95738',
                					'#29B6F6'
                					],
                					borderColor: [
                					'#083D77',
                					'#EBEBD3',
                					'#F4D35E',
                					'#0FA3B1',
                					'#EE964B',
                					'#F95738',
                					'#29B6F6'
                					],
                					borderWidth: 1
                				}]
                			},
                			options: {
                                legend: {
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                		});
                	</script>
                </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Grafik Pasien</h4>
                    <p class="card-category">
                    <?php
                    // mengambil data poliklinik
                        $data_pasien = mysqli_query($con,"SELECT * FROM tb_pasien");
                    
                    // menghitung data dokter
                        $jumlah_pasien = mysqli_num_rows($data_pasien);
                    ?>
                    
                    <?php echo $jumlah_pasien; ?> pasien
                    </p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Diperbaharui 4 menit yang lalu
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-chart" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header">
                <div>
                	<script type="text/javascript" src="chartjs/Chart.js"></script>
                </div>
                <div>
                	<style type="text/css">
                		body{
                			font-family: roboto;
                		}
                	</style>
                
                	<div style="max-width: 1000px;">
                		<canvas id="grafikobat"></canvas>
                	</div>
                
                	<script>
                		var ctx = document.getElementById("grafikobat").getContext('2d');
                		var grafikobat = new Chart(ctx, {
                			type: 'bar',
                			data: {
                				labels: ["Tablet","Sirup","Injeksi"],
                				datasets: [{
                					label: '',
                					data: [
                					<?php 
                					$data_tablet = mysqli_query($con,"select * from tb_obat where jenis_obat='Tablet'");
                					$jumlah_tablet= mysqli_num_rows($data_tablet);
                					echo $jumlah_tablet; ?>,
                					<?php 
                					$data_sirup = mysqli_query($con,"select * from tb_obat where jenis_obat='Sirup'");
                					$jumlah_sirup= mysqli_num_rows($data_sirup);
                					echo $jumlah_sirup; ?>,
                					<?php 
                					$data_injeksi = mysqli_query($con,"select * from tb_obat where jenis_obat='Injeksi'");
                					$jumlah_injeksi= mysqli_num_rows($data_injeksi);
                					echo $jumlah_injeksi; ?>
                					],
                					backgroundColor: [
                					'#FFCA28',
                					'#F44336',
                					'#29B6F6'
                					],
                					borderColor: [
                					'#FFCA28',
                					'#F44336',
                					'#29B6F6'
                					],
                					borderWidth: 1
                				}]
                			},
                			options: {
                                legend: {
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                		});
                	</script>
                </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Grafik Penjualan Obat</h4>
                  <?php
                    // mengambil data poliklinik
                        $data_obat = mysqli_query($con,"SELECT * FROM tb_obat");
                    
                    // menghitung data dokter
                        $jumlah_obat = mysqli_num_rows($data_obat);
                    ?>
                    <?php echo $jumlah_obat; ?> Obat
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Dikirim 2 hari yang lalu
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-chart" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header">
                <div>
                	<script type="text/javascript" src="chartjs/Chart.js"></script>
                </div>
                <div>
                	<style type="text/css">
                		body{
                			font-family: roboto;
                		}
                	</style>
                
                	<div style="max-width: 1500px;">
                		<canvas id="grafikrekammedis"></canvas>
                	</div>
                
                	<script>
                		var ctx = document.getElementById("grafikrekammedis").getContext('2d');
                		var grafikrekammedis = new Chart(ctx, {
                			type: 'line',
                			data: {
                				labels: ["[2018]","[2019]","[2020]","[2021]","[2022]","[2023]","[2024]"],
                				datasets: [{
                					label: '',
                					data: [
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2018-01-01' and '2018-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>,
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2019-01-01' and '2019-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>,
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2020-01-01' and '2020-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>,
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2021-01-01' and '2021-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>,
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2022-01-01' and '2022-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>,
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2023-01-01' and '2023-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>,
                					<?php 
                					$data_medis = mysqli_query($con, "select tgl_periksa from tb_rekammedis where tgl_periksa between '2024-01-01' and '2024-12-31';");
                					$jumlah_medis= mysqli_num_rows($data_medis);
                					echo $jumlah_medis; ?>
                					],
                                    fill: false,
                                    borderColor: "#ff0000",
                                    backgroundColor: "#1E2425",
                                    pointBackgroundColor: "#ff00000",
                                    pointBorderColor: "#ff0000",
                                    pointHoverBackgroundColor: "#ff0000",
                                    pointHoverBorderColor: "#ff0000",
                					borderWidth: 1
                				}]
                			},
                			options: {
                                legend: {
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                		});
                	</script>
                </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Grafik Rekam Medis</h4>
                  <?php
                    // mengambil data poliklinik
                        $data_rekammedis = mysqli_query($con,"SELECT * FROM tb_rekammedis");
                    
                    // menghitung data dokter
                        $jumlah_rekammedis = mysqli_num_rows($data_rekammedis);
                    ?>
                    <?php echo $jumlah_rekammedis; ?> Rekam Medis
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Dikirim 2 hari yang lalu
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-chart" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-default" style="background-color:#f95738">
                    <div>
                        <!-- key 1 = AIzaSyB4QJ6poO7Te7xkZ7SUgE5_z1LWoEZHko0 , key 2 = AIzaSyCJCLoHzux5YZE8Lr7I6kZ9Q6U6-R1x-b4 -->
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJCLoHzux5YZE8Lr7I6kZ9Q6U6-R1x-b4&callback=initialize" async defer></script>
                        <div id="googleMap" style="color:#1e2425;width:100%;height:300px"></div>
                        <script type="text/javascript">   
                            var marker;
                            function initialize(){
                                // Variabel untuk menyimpan informasi lokasi
                                var infoWindow = new google.maps.InfoWindow;
                                //  Variabel berisi properti tipe peta
                                var mapOptions = {
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                } 
                                // Pembuatan peta
                                var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
                        		// Variabel untuk menyimpan batas kordinat
                                var bounds = new google.maps.LatLngBounds();
                                // Pengambilan data dari database MySQL
                                <?php
                        		    // Sesuaikan dengan konfigurasi koneksi Anda
                        			$host 	  = "localhost";
                        			$username = "root";
                        			$password = "";
                        			$Dbname   = "hospital";
                        			$db 	  = new mysqli($host,$username,$password,$Dbname);
                        			
                        			$query = $db->query("SELECT * FROM tb_lokasi ORDER BY nama_lokasi ASC");
                        			while ($row = $query->fetch_assoc()) {
                        				$nama = $row["nama_lokasi"];
                        				$lat  = $row["latitude"];
                        				$long = $row["longitude"];
                        				echo "addMarker($lat, $long, '$nama');\n";
                        			}
                                ?> 
                                // Proses membuat marker 
                                function addMarker(lat, lng, info){
                                    var lokasi = new google.maps.LatLng(lat, lng);
                                        bounds.extend(lokasi);
                                    var marker = new google.maps.Marker({
                                        map: peta,
                                        position: lokasi,
                                        url: "https://www.google.com/maps/search/?api=1&query=" + lokasi
                                    });       
                                    peta.fitBounds(bounds);
                                    bindInfoWindow(marker, peta, infoWindow, info);
                                 }
                                // Menampilkan informasi pada masing-masing marker yang diklik
                                function bindInfoWindow(marker, peta, infoWindow, html){
                                    google.maps.event.addListener(marker, 'click', function() {
                                    infoWindow.setContent(html);
                                    infoWindow.open(peta, marker);
                                    window.location.href = this.url;
                                  });
                                }
                            }
                        </script>
                    </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Lokasi Dimas Hospital</h4>
                </div>
                  <div class="card-body table-responsive">
                      <table class="table table-hover">
                          <thead style="color:#1e2425">
                              <th><h3>No.</h3></th>
                              <th><h3>Lokasi</h3></th>
                              <th><h3>Latitude</h3></th>
                              <th><h3>Longitude</h3></th>
                              <th class="text-center"><i class="glyphicon glyphicon-cog" style="font-size:18px"></i></th>
                          </thead>
                          <tbody>
                          <?php
                          $no = 1;
                          $sql_lokasi = mysqli_query($con, "SELECT * FROM tb_lokasi") or die (mysqli_error($con));
                          while($data = mysqli_fetch_array($sql_lokasi)) { ?>
                              <tr>
                                  <td><h3><?=$no++ ?>.</h3></td>
                                  <td><h3><?=$data['nama_lokasi'] ?></h3></td>
                                  <td><h3><?=$data['latitude'] ?></h3></td>
                                  <td><h3><?=$data['longitude'] ?></h3></td>
                                  <td class="text-center">
                                      <a href="edit_lokasi ?id=<?=$data['id_lokasi']?>" class="btn btn-light btn-xs" title="Edit" style="background-color: #00b300; color: white;"><i class="material-icons" style="font-size:18px">edit</i></a>
                                      <a href="delete_lokasi ?id=<?=$data['id_lokasi']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-light btn-xs " title="Hapus" style="background-color: #ff0000; color: white;"><i class="material-icons" style="font-size:18px">close</i></a>
                                  </td>
                              </tr>
                              <?php
                          }
                          ?>
                          </tbody>
                      </table>
                      <a href="add_lokasi " class="btn btn-light btn-xs pull-right" style="background-color:#f95738; color: #ffffff;margin:2px;font-size:18px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Lokasi</a>
                  </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Diperbaharui 4 hari yang lalu
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-header card-header-default" style="background-color:#f4d35e">
                        <i class="material-icons" style="color:#1e2425">schedule</i>
                        <h3 class="card-title" style="color:#1e2425">Jadwal & Pelayanan Kami</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead style="color:#1e2425">
                                <th><h3>No.</h3></th>
                                <th><h3>Jenis Pelayanan</h3></th>
                                <th><h3>Jadwal Buka</h3></th>
                                <th class="text-center"><i class="glyphicon glyphicon-cog" style="font-size:18px"></i></th>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $sql_jadwal = mysqli_query($con, "SELECT * FROM tb_jadwal") or die (mysqli_error($con));
                                while($data = mysqli_fetch_array($sql_jadwal)) { ?>
                                <tr>
                                    <td><h3><?=$no++ ?>.</h3></td>
                                    <td><h3><?=$data['nama'] ?></h3></td>
                                    <td><h3><?=$data['jam'] ?></h3></td>
                                    <td class="text-center">
                                       <a href="edit ?id=<?=$data['id_jadwal']?>" class="btn btn-light btn-xs" title="Edit" style="background-color: #00b300; color: white;"><i class="material-icons" style="font-size:18px">edit</i></a>
                                       <a href="delete ?id=<?=$data['id_jadwal']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-light btn-xs " title="Hapus" style="background-color: #ff0000; color: white;"><i class="material-icons" style="font-size:18px">close</i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        <a href="add " class="btn btn-light btn-xs pull-left" style="background-color: #f4d35e; color: #1e2425;margin:2px;font-size:18px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Jadwal & Pelayanan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-header card-header-tabs card-header-default" style="background-color:#0fa3b1">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">error_outline</i> <h3>Tata Tertib Pengunjung Pasien</h3>
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                    <?php
                    $no = 1;
                    $sql_tatatertib = mysqli_query($con, "SELECT * FROM tb_tatatertib") or die (mysqli_error($con));
                        while($data = mysqli_fetch_array($sql_tatatertib)) { ?>
                        <tr>
                            <td style="color: #1e2425"><h3><?=$no++ ?>.</h3></td>
                            <td style="color: #1e2425"><h3><?=$data['tata_tertib'] ?></h3></td>
                            <td class ="pull-right">
                               <a href="edit2 ?id=<?=$data['id_info']?>" class="btn btn-light btn-xs" title="Edit" style="background-color: #00b300; color: white;"><i class="material-icons" style="font-size:18px">edit</i></a>
                               <a href="delete2 ?id=<?=$data['id_info']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-light btn-xs " title="Hapus" style="background-color: #ff0000; color: white;"><i class="material-icons" style="font-size:18px">close</i></a>
                           </td>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                      </table>
                    </div>
                  </div>
                  <a href="add2 " class="btn btn-light btn-xs pull-right" style="background-color: #0fa3b1; color: #efeeee;margin:2px;font-size:18px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Tata Tertib Baru</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="../pasien/data ">
                Data Pasien
                </a>
              </li>
              <li>
                <a href="../dokter/data ">
                Dokter
                </a>
              </li>
              <li>
                <a href="../suster/data ">
                Suster
                </a>
              </li>
              <li>
                <a href="../klinik/data ">
                Poliklinik
                </a>
              </li>
              <li>
                <a href="../obat/data ">
                Data Obat
                </a>
              </li>
              <li>
                <a href="../rekammedis/data ">
                Rekam Medis
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
      <div class="fixed-plugin">

        <button class="open-button" onclick="openForm()">
            <i class="fa fa-user-plus fa-2x" style="color:#efeeee">
                <br/>
                <h4>Tambah Pasien Online Disini</h4>
            </i>
        </button>
            
        <div class="chat-popup" id="myForm">
            <form action="proses " method="post" class="form-container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fa fa-times fa-2x pull-right" style="color:#ff0000" onclick="closeForm()"></i>
                <h1 style="color:#1e2425">Daftar Pasien</h1>
                <img src="../_assets/img/05.jpeg" alt="">
                <div class="from-group">
                    <label for="nama" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Nama :</h3></label>
                    <input type="text" class="form-control" style="color:#1e2425" placeholder="Masukan nama anda" name="nama" id="nama" required>
                </div>
                <div class="from-group">
                    <label for="email" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>No.Telepon :</h3></label>
                    <input type="number" class="form-control" style="color:#1e2425" placeholder="Masukan nomor telepon anda" name="no_telp" id="no_telp" required>
                </div>
                <div class="from-group">
                    <label for="keluhan" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Keluhan :</h3></label>
                    <textarea class="form-control" style="color:#1e2425" placeholder="Ceritakan keluhan anda" name="keluhan" id="keluhan" required></textarea>
                </div>
                <div class="form-group" align="center">
                    <input type="reset" name="reset" value="Reset" class="btn btn-light" style="background-color : #efeeee;color : #1e2425;font-weight:bold;">
                    <input type="submit" name="daftar" value="Mendaftar" class="btn btn-light" style="background-color : #ff0000;color : #efeeee;font-weight:bold;">
                </div>
            </form>
        </div>
            
        <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
        </script>
      </div>
    </div>
  </div>

    <?php include_once('../_footer.php'); ?>

</body>

</html>