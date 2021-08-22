<?php include_once('../_header.php'); ?>

    <div id="loginbox" style="font-size: 14px;" class="mainbox col-lg-12">
        <div class="panel panel-light">
            <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-body">
                    <h1><div align="center" style="color: #292826;font-weight:bold">Data Dokter</div></h1><br/><br/>
                    <div>
                        <p class="pull-left" style="color: #1e2425;"><h2>Hi, <b style="color: #ff0000"><?=$_SESSION['user'];?></b> <br/>Kesehatan Pasien Prioritas Dimas Hospital<br/>Silahkan cari data anda di tabel atau di menu pencarian </h2></p><br/>
                        <a href="#menu-toggle" class="btn btn-light" style="background-color: #083d77; color: #efeeee;font-weight:bold" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i> Menu</a>
                    </div>
                    <br/>
                    <br/>
                    <h4>
                        <div class="pull-right">
                            <a href="" class="btn btn-light btn-xs" style="background-color: #f4d35e; color: #1e2425;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-refresh" style="font-weight:bold"></i></a>
                            <a href="add " class="btn btn-light btn-xs" style="background-color: #0fa3b1; color: #efeeee;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Dokter</a>
                        </div>
                    </h4>
                    <br/><br/>
                    <h3><a style="color: #ff0000;font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cetak Tabel Data Dokter</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form method="post" name="proses">
                                <div class="table-responsive" style="border:none">
                                    <table class="table table-striped table-hover" id="doktertable" width="100%">
                                        <thead style="background-color: #f4d35e; color: #1e2425;font-weight:bold">
                                        <tr>
                                            <th><h3><b><center><input type="checkbox" id="select_all" value=""></center></b></h3></th>
                                            <th><h3><b>No.</b></h3></th>
                                            <th><h3><b>Nama Dokter</b></h3></th>
                                            <th><h3><b>Spesialis</b></h3></th>
                                            <th><h3><b>Alamat</b></h3></th>
                                            <th><h3><b>No.Telepon</b></h3></th>
                                            <th><h3><b>Email</b></h3></th>
                                            <th><h3><b>Mulai Praktek</b></h3></th>
                                            <th><h3><b>Jadwal Jaga</b></h3></th>
                                            <th><h3><b><i class="glyphicon glyphicon-cog"></i></b></h3></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter") or die (mysqli_error($con));
                                        while($data = mysqli_fetch_array($sql_dokter)) { ?>
                                            <tr>
                                                <td bgcolor="#0fa3b1" style="color: #efeeee" align="center"><h3><input type="checkbox" name="checked[]" class="check" value="<?=$data['id_dokter'] ?>"></h3></td>
                                                <td bgcolor="#083d77" style="color: #efeeee"><h3><?=$no++ ?>.</h3></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><a href="details.php?id=<?=$data['id_dokter']?>" class="btn-link text-dark"><h3><?=$data['nama_dokter'] ?></h3></a></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['spesialis'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['alamat'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['no_telp'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['email'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><h3><?=tgl_indo($data['mulai_praktek'])?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #292826"><h3><?=$data['jadwal_jaga'] ?></h3></td>
                                                <td bgcolor="#ffffff" class ="text-center">
                                                    <a href="details ?id=<?=$data['id_dokter']?>" class="btn btn-light btn-xs" style="background-color: dodgerblue; color: white;"><i class="glyphicon glyphicon-eye-open" style="font-size: 15px;"></i></a>
                                                    <br>
                                                    <a href="edit ?id=<?=$data['id_dokter']?>" class="btn btn-success btn-xs" style="background-color: #00b300; color: white;"><i class="glyphicon glyphicon-edit" style="font-size: 15px;"></i></a>
                                                    <br>
                                                    <a href="single_delete ?id=<?=$data['id_dokter']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs " style="background-color: #ff0000; color: white;"><i class="glyphicon glyphicon-trash" style="font-size: 15px;"></i></a>
                                                </td>

                                            </tr>
                                            <?php
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
                        <button class="btn btn-light" style="background-color: #f4d35e; color: #1e2425;font-weight:bold" onclick="edit()"><i class="glyphicon glyphicon-edit" ></i> Edit Semua</button>
                        <button class="btn btn-light" style="background-color: #0fa3b1; color: #efeeee;font-weight:bold" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus Semua</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <script>
        
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
                $('#doktertable tfoot th').each( function (i) {
                    var title = $('#doktertable thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
                } );
            // DataTable
                var table = $('#doktertable').DataTable( {
                    columnDefs:[
                        {
                            searchable : false,
                            orderable : false,
                            targets: [0,9]
                        }
                    ],
                            order : [1, 'asc'],
                            scrollX:true,
                            paging:         false,
                            info:           false,
                            fixedColumns: false,
                            ordering: false,
                            searching: true,
                            lengthChange: false,
                            dom: 'Bfrtip',
                            buttons: [
                                { extend: 'excel', className: 'btn btn-success' },
                                { extend: 'pdfHtml5', orientation : 'potrait', pageSize: 'LEGAL', title : 'Data Dokter Dimas Hospital', className: 'btn btn-danger' },
                                { extend: 'print', title : 'Data Dokter Dimas Hospital', className: 'btn btn-info' },
                            ]
                });
                // Filter event handler
                $( table.table().container() ).on( 'keyup', 'tfoot input', function () {
                    table

                        .search( this.value )
                        .draw();
                } )
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
            document.proses.action = 'multiple_edit ';
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