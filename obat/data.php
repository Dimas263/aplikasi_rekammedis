<?php include_once('../_header.php');?>
    <div id="loginbox" style="font-size: 14px;" class="mainbox col-lg-12">
        <div class="panel panel-light">
            <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-body">
                    <h1><div align="center" style="color: #1e2425;font-weight:bold">DATA OBAT</div></h1><br/><br/>
                    <p class="pull-left"><h2>Hi, <b style="color: #ff0000"><?=$_SESSION['user'];?></b> <br/>Kesehatan Pasien Prioritas Dimas Hospital<br/>Silahkan cari data obat di tabel atau di menu pencarian </h2></p><br/>
                    <div class="pull-left"><a href="#menu-toggle" class="btn btn-light" style="background-color: #083d77; color: #efeeee;font-weight:bold" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i> Menu</a></div><br/><br/><br/>
                    <br><br>

                    <div class="pull-right">
                        <a href="" class="btn btn-light btn-xs" style="background-color: #ebebd3; color: #1e2425;font-weight:bold"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="add " class="btn btn-light btn-xs" style="background-color: #f95738; color: #efeeee;font-weight:bold"><i class="glyphicon glyphicon-plus"></i>Tambah Obat</a>
                    </div>
                    <br/><br/><br/>
                    <div>
                        <form class="pull-right form-inline" action="" method="post" style="margin-top: 28px">
                            <input type="text" value="" class="form-control" name="pencarian" placeholder="Search...">
                            <button type="submit" class="btn btn-danger btn-round btn-just-icon pull-right">
                                <i name="search" class="material-icons">search</i>
                            </button>
                        </form>
                    </div>

                    <div class="box">
                        <h3><a style="color: #ff0000;font-weight:bold">&nbsp;&nbsp;&nbsp; Cetak Tabel Obat</a></h3>
                        <div class="table-responsive" style="border:none">
                            <table class="table table-striped w-auto bordered-table table-hover table-fixed stacktable small-only" id="obat" width="100%">
                                <thead bgcolor="#083d77" style="color: #efeeee;">
                                <tr>
                                    <th><h3><b>No.</b></h3></th>
                                    <th><h3><b>Kode Obat</b></h3></th>
                                    <th><h3><b>Nama Obat</b></h3></th>
                                    <th><h3><b>Keterangan</b></h3></th>
                                    <th><h3><b>Dosis</b></h3></th>
                                    <th><h3><b>Jenis</b></h3></th>
                                    <th><h3><b>Stok</b></h3></th>
                                    <th><h3><b>Tanggal Kadaluarsa</b></h3></th>
                                    <th><h3><b><i class="glyphicon glyphicon-cog"></i></b></h3></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $batas = 15;
                                $hal = @$_GET['hal'];
                                if(empty($hal)){
                                    $posisi = 0;
                                    $hal = 1;
                                } else {
                                    $posisi = ($hal - 1) * $batas;
                                }
                                $no = 1;
                                if($_SERVER['REQUEST_METHOD'] == "POST"){
                                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                                    if($pencarian != ''){
                                        $sql = "SELECT * FROM tb_obat WHERE nama_obat LIKE '%$pencarian%'";
                                        $query = $sql;
                                        $queryJml = $sql;
                                    } else {
                                        $query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
                                        $queryJml = "SELECT * FROM tb_obat";
                                        $no = $posisi + 1;
                                    }
                                } else {
                                    $query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
                                    $queryJml = "SELECT * FROM tb_obat";
                                    $no = $posisi + 1;
                                }
                                $sql_obat = mysqli_query($con, $query) or die (mysqli_error($con));
                                if(mysqli_num_rows($sql_obat) > 0){
                                    while($data = mysqli_fetch_array($sql_obat)){ ?>
                                        <tr>
                                            <td bgcolor="#f95738" style="color: white"><h3><?=$no++?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><h3><?=$data['kode_obat']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><a href="details.php?id=<?=$data['id_obat']?>" class="btn-link text-dark"><h3><?=$data['nama_obat']?></h3></a></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><h3><?=$data['ket_obat']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><h3><?=$data['dosis']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><h3><?=$data['jenis_obat']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><h3><?=$data['stock_obat']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425;"><h3><?=tgl_indo($data['tgl_kadaluarsa'])?></h3></td>
                                            <td bgcolor="#ebebd3" class ="text-center">
                                                <a href="details ?id=<?=$data['id_obat']?>" class="btn btn-light btn-xs" style="background-color: dodgerblue; color: white;"><i class="glyphicon glyphicon-eye-open" style="font-size: 15px;"></i></a>
                                                <br>
                                                <a href="edit ?id=<?=$data['id_obat']?>" class="btn btn-success btn-xs" style="background-color: #00b300; color: white;"><i class="glyphicon glyphicon-edit" style="font-size: 15px;"></i></a>
                                                <br>
                                                <a href="delete ?id=<?=$data['id_obat']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs " style="background-color: #ff0000; color: white;"><i class="glyphicon glyphicon-trash" style="font-size: 15px;"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<tr><td colspan=\"9\" style=\"background-color:#ffffff;color:#1e2425;font-weight:bold\" align=\"center\">Data tidak ditemukan</td></tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        require_once "../_config/config.php";
                        $pencarian = @$_POST['pencarian'];
                        if($pencarian == ''){ ?>
                            <div style="float:left;">
                                <?php
                                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                                echo "<p><font style=\"color:#1e2425;font-weight:bold\">Jumlah Data : <b>$jml</b></font></p>";
                                ?>
                            </div>
                            <div style = "float:right;">
                                <ul class = "pagination" style="margin:0;">
                                    <li class="page-item active">
                                        <?php
                                        $jml_hal = ceil($jml / $batas);
                                        for ($i=1; $i <= $jml_hal; $i++){
                                            if($i != $hal){
                                                echo "<li><a href=\"?hal=$i\">$i</a></li>";
                                            }else {
                                                echo "<li class=\"active\"><a>$i</a></li>";
                                            }
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <?php
                        } else {
                            echo "<div style = \"float:left;color:white;\">";
                            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                            echo "<p><font style=\"color:#1e2425;font-weight:bold\">Data Hasil Pencarian : <b>$jml</b></font></p>";
                            echo "</div>";
                        }
                        ?>

                    </div>
            </div>
        </div>
    </div>

  <script>
      $(document).ready(function(){
          $(document).ready(function() {
              // Setup - add a text input to each footer cell
              $('#obat tfoot th').each( function (i) {
                  var title = $('#obat thead th').eq( $(this).index() ).text();
                  $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
              } );
              // DataTable
              var table = $('#obat').DataTable( {
                  columnDefs:[
                      {
                          searchable : false,
                          orderable : false,

                      }
                  ],
                  searching:      false,
                  scrollCollapse: false,
                  paging:         false,
                  info:           false,
                  fixedColumns: false,
                  ordering: false,
                  dom: 'Bfrtip',
                  buttons: [
                      { extend: 'excel', className: 'btn btn-success' },
                      { extend: 'pdfHtml5', orientation : 'potrait', pageSize: 'LEGAL', title : 'Data Obat Dimas Hospital', className: 'btn btn-danger' },
                      { extend: 'print', title : 'Data Obat Dimas Hospital', className: 'btn btn-info' }
                  ]
              });
              // Filter event handler
              $( table.table().container() ).on( 'keyup', 'tfoot input', function () {
                  table

                      .search( this.value )
                      .draw();
              } )
          } );
            $("#select_all").on('click', function() {
                if(this.checked){
                    $('.check').each(function(){
                        this.checked = true;
                    })
                } else {
                    $('.check').each(function(){
                        this.checked = false;
                    })
                }
            });
            
            $('.check').on('click', function(){
               if($('.check:checked').length == $('.check').length){
                   $('#select_all').prop('checked', true)
               } else {
                   $('#select_all').prop('checked', false)
               } 
            });
        });

    </script>

        <script>
            document.onkeydown = function(e) {
                    if (e.ctrlKey && 
                        (e.keyCode === 67 || 
                         e.keyCode === 86 || 
                         e.keyCode === 85 || 
                         e.keyCode === 117)) {
                        return false;
                    } else {
                        return true;
                    }
            };
            $(document).keypress("u",function(e) {
              if(e.ctrlKey)
              {
            return false;
            }
            else
            {
            return true;
            }
            });
       </script>
    </div>
<?php include_once('../_footer.php');?>