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
                            User
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="tab-content pb-3" id="v-pills-tabContent">
                <div class="col-md-12">
                    <div class="card my-3 no-b">
                        <div class="card-header white m-3">
                            <h6>Data User</h6>
                        </div>
                        <div class="card-body">
                            <table id="datatables-button" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th><i class="icon icon-settings2"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                $sql_user = mysqli_query($con, "SELECT * FROM tb_user") or die (mysqli_error($con));
                                while($data = mysqli_fetch_array($sql_user)) { ?>
                                <tr>
                                    <td><?=$no++ ?>.</td>
                                    <td><?=$data['username']?></td>
                                    <td><?=$data['role']?></td>
                                    <td>
                                        <a href="delete.php?id=<?=$data['id_user']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="icon icon-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once('../_footer.php');
?>