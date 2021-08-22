<?php include_once('../_header.php'); ?>

    <div id="loginbox" style="font-size: 14px;" class="mainbox col-lg-12">
        <div class="panel panel-light">
            <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-body">
                    <h1><div align="center" style="color: #1e2425;font-weight:bold">Data Poliklinik</div></h1><br/><br/>
                    <div>
                        <p class="pull-left" style="color: #1e2425;"><h2>Hi, <b style="color: #ff0000"><?=$_SESSION['user'];?></b> <br/>Kesehatan Pasien Prioritas Dimas Hospital<br/>Silahkan cari data poliklinik di tabel atau di menu pencarian </h2></p><br/>
                        <div pull-left ><a href="#menu-toggle" class="btn btn-light" style="background-color: #083d77; color: #efeeee;font-weight:bold" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i> Menu</a></div>
                    </div>
                    <br/>
                    <br/>
                    <h4>
                        <div class="pull-right">
                            <a href="" class="btn btn-light btn-xs" style="background-color: #f4d35e; color: #1e2425;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="generate " class="btn btn-light btn-xs" style="background-color: #0fa3b1; color: #efeeee;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Data</a>
                        </div>
                    </h4>
                    <br/><br/>
                    <h3><a style="color: #ff0000;font-weight:bold">&nbsp;&nbsp;&nbsp; Cetak Tabel Poliklinik</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form method="post" name="proses">
                                <div class="table-responsive" style="border:none">
                                    <table class="table table-striped w-auto bordered-table table-hover table-fixed stacktable small-only" id="klinik" width="100%">
                                        <thead style="background-color: #f4d35e; color: #1e2425;font-weight:bold">
                                        <tr>
                                            <th><h3><b>No.</b></h3></th>
                                            <th><h3><b>Nama Klinik</b></h3></th>
                                            <th><h3><b>Alamat</b></h3></th>
                                            <th><h3><b>Jam Operasi</b></h3></th>
                                            <th><h3><b><center><input type="checkbox" id="select_all" value=""></center></b></h3></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik") or die (mysqli_error($con));
                                        if(mysqli_num_rows($sql_klinik) > 0){
                                            while($data = mysqli_fetch_array($sql_klinik)) { ?>
                                                <tr>
                                                    <td bgcolor="#083d77" style="color: #efeeee"><h3><?=$no++ ?>.</h3></td>
                                                    <td bgcolor="#ffffff" style="color: #292826"><a href="details.php?id=<?=$data['id_klinik']?>" class="btn-link text-dark"><h3><?=$data['nama_klinik'] ?></h3></a></td>
                                                    <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['alamat_klinik'] ?></h3></td>
                                                    <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['jam_operasi'] ?></h3></td>
                                                    <td bgcolor="#ebebd3" style="color: #efeeee" align="center"><h3><input type="checkbox" name="checked[]" class="check" value="<?=$data['id_klinik'] ?>"></h3></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan=\"5\" align=\"center\"><h3>Data tidak ditemukan</td></tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br/>
                    <div class="box" align="center">
                        <a href="details ?id=<?=$data['id_klinik']?>" class="btn btn-light btn-xs" style="background-color: dodgerblue; color: white;"><i class="glyphicon glyphicon-eye-open" style="font-size: 15px;"></i></a>
                        <br>
                        <button class="btn btn-light" style="background-color: #f4d35e; color: #1e2425;font-weight:bold" onclick="edit()"><i class="glyphicon glyphicon-edit"></i> Edit Semua</button>
                        <br>
                        <button class="btn btn-light" style="background-color: #0fa3b1; color: #efeeee;font-weight:bold" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus Semua</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script>
        $(document).ready(function(){
            $(document).ready(function() {
            // Setup - add a text input to each footer cell
                $('#klinik tfoot th').each( function (i) {
                    var title = $('#klinik thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
                } );
            // DataTable
                var table = $('#klinik').DataTable( {
                            scrollCollapse: false,
                            paging:         false,
                            info:           false,
                            ordering:       false,
                            fixedColumns: false,
                            dom: 'Bfrtip',
                            buttons: [
                                { extend: 'excel', className: 'btn btn-success' },
                                { extend: 'pdfHtml5', orientation : 'potrait', pageSize: 'LEGAL', title : 'Data Poliklinik Dimas Hospital', className: 'btn btn-danger' },
                                { extend: 'print', title : 'Data Poliklinik Dimas Hospital', className: 'btn btn-info' }
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
        
        function edit() {
            document.proses.action = 'edit ';
            document.proses.submit();
        }
        function hapus() {
            var conf = confirm('Apakah kamu yakin ingin menghapus data?');
            if(conf){
                document.proses.action = 'delete ';
                document.proses.submit();
            }
        }
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
  
</body>

</html>

<?php include_once('../_footer.php'); ?>