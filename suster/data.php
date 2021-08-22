<?php include_once('../_header.php'); ?>

    <div id="loginbox" style="font-size: 14px;" class="mainbox col-lg-12">
        <div class="panel panel-light">
            <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-body">
                    <h1><div align="center" style="color: #1e2425;font-weight:bold">Data Suster</div></h1><br/><br/>
                    <div>
                        <p class="pull-left" style="color: #1e2425;"><h2>Hi, <b style="color: #ff0000"><?=$_SESSION['user'];?></b> <br/>Kesehatan Pasien Prioritas Dimas Hospital<br/>Silahkan cari data anda di tabel atau di menu pencarian </h2></p><br/>
                        <a href="#menu-toggle" class="btn btn-light" style="background-color: #083d77; color: #efeeee;font-weight:bold" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i> Menu</a>
                    </div>
                    <br/>
                    <br/>
                    <h4>
                        <div class="pull-right">
                            <a href="" class="btn btn-light btn-xs" style="background-color: #ebebd3; color: #1e2425;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-refresh" style="font-weight:bold"></i></a>
                            <a href="add " class="btn btn-light btn-xs" style="background-color: #f4d35e; color: #1e2425;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah suster</a>
                        </div>
                    </h4>
                    <br/><br/>
                    <h3><a style="color: #ff0000;font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;Cetak Tabel Data suster</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form method="post" name="proses">
                                <div class="table-responsive" style="border:none">
                                    <table class="table table-stiped w-auto bordered-table table-hover table-fixed stacktable small-only" id="sustertable" width="100%">
                                        <thead bgcolor="#083d77" style="color: #efeeee;font-weight:bold">
                                        <tr>
                                            <th><h3><b><center><input type="checkbox" id="select_all" value=""></center></th>
                                            <th><h3><b>No.</b></h3></th>
                                            <th><h3><b>Nama suster</b></h3></th>
                                            <th><h3><b>Alamat</b></h3></th>
                                            <th><h3><b>No.Telepon</b></h3></th>
                                            <th><h3><b>Email</b></h3></th>
                                            <th><h3><b>Jadwal Jaga</b></h3></th>
                                            <th><h3><b><i class="glyphicon glyphicon-cog"></i></b></h3></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_suster = mysqli_query($con, "SELECT * FROM tb_suster") or die (mysqli_error($con));
                                        while($data = mysqli_fetch_array($sql_suster)) { ?>
                                            <tr>
                                                <td bgcolor="#ebebd3" style="color: #1e2425" align="center"><h3><input type="checkbox" name="checked[]" class="check" value="<?=$data['id_perawat'] ?>"</center></h3></td>
                                                <td bgcolor="#f4d35e" style="color: #1e2425"><h3><?=$no++ ?>.</h3></td>
                                                <td bgcolor="#ffffff" style="color: #1e2425"><a href="details.php?id=<?=$data['id_perawat']?>" class="btn-link text-dark"><h3><?=$data['nama_suster'] ?></h3></a></td>
                                                <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['alamat'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['no_telp'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['email'] ?></h3></td>
                                                <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['jadwal_jaga'] ?></h3></td>
                                                <td bgcolor="#ffffff" class ="text-center">
                                                    <h3>
                                                        <a href="details ?id=<?=$data['id_perawat']?>" class="btn btn-light btn-xs" style="background-color: dodgerblue; color: white;"><i class="glyphicon glyphicon-eye-open" style="font-size: 15px;"></i></a>
                                                        <br>
                                                        <a href="edit ?id=<?=$data['id_perawat']?>" class="btn btn-success btn-xs" style="background-color: #00b300; color: white;"><i class="glyphicon glyphicon-edit" style="font-size: 15px;"></i></a>
                                                        <br>
                                                        <a href="single_delete ?id=<?=$data['id_perawat']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs " style="background-color: #ff0000; color: white;"><i class="glyphicon glyphicon-trash" style="font-size: 15px;"></i></a>
                                                    </h3>
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
                        <button class="btn btn-light" style="background-color: #ebebd3; color: #1e2425;font-weight:bold;" onclick="edit()"><i class="glyphicon glyphicon-edit"></i> Edit Semua</button>
                        <button class="btn btn-light" style="background-color: #f4d35e; color: #1e2425;font-weight:bold;" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus Semua</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
                $('#sustertable tfoot th').each( function (i) {
                    var title = $('#sustertable thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" placeholder="Search '+title+'" data-index="'+i+'" />' );
                } );
            // DataTable
                var table = $('#sustertable').DataTable( {
                    columnDefs:[
                        {
                            searchable : false,
                            orderable : false,
                            targets: [0,7]
                        }
                    ],
                            order : [1, 'asc'],
                            scrollCollapse: false,
                            paging:         false,
                            fixedColumns: false,
                            info: false,
                            ordering: false,
                            dom: 'Bfrtip',
                            buttons: [
                                { extend: 'excel', className: 'btn btn-success' },
                                { extend: 'pdfHtml5', orientation : 'potrait', pageSize: 'LEGAL', title : 'Data Suster Dimas Hospital', className: 'btn btn-danger' },
                                { extend: 'print', title : 'Data Suster Dimas Hospital', className: 'btn btn-info' },
                            ]
                });
                // Filter event handler
                $( table.table().container() ).on( 'keyup', 'tfoot input', function () {
                    table

                        .search( this.value )
                        .draw();
                } )
        } );
        
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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