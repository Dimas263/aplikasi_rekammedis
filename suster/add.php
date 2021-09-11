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
                        Tambah Suster Baru
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-8 center">
                    <div class="card shadow-sm">
                        <div class="card-body b-b">
                            <h4>Detail Suster</h4>
                            <form class="form-material" action="proses" method="post">
                                <!-- Input -->
                                <div class="body">
                                    <h6>Nama</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="nama_suster" id="nama_suster" class="form-control" placeholder="Nama Suster" autofocus required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Jenis Suster</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="jenis_suster" id="jenis_suster" class="form-control" placeholder="Jenis Suster" autofocus required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Alamat</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Email</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>No.Telepon</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="No.Telepon" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>Jadwal</h4>
                                <h6>Senin</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="senin_awal" id="senin_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="senin_akhir" id="senin_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Selasa</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="selasa_awal" id="selasa_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="selasa_akhir" id="selasa_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Rabu</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="rabu_awal" id="rabu_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="rabu_akhir" id="rabu_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Kamis</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="kamis_awal" id="kamis_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="kamis_akhir" id="kamis_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Jumat</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="jumat_awal" id="jumat_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="jumat_akhir" id="jumat_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Sabtu</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="sabtu_awal" id="sabtu_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="sabtu_akhir" id="sabtu_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Minggu</h6>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="minggu_awal" id="minggu_awal" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="minggu_akhir" id="minggu_akhir" class="form-control">
                                                    <option>00:00 WIB</option>
                                                    <option>01:00 WIB</option>
                                                    <option>02:00 WIB</option>
                                                    <option>03:00 WIB</option>
                                                    <option>04:00 WIB</option>
                                                    <option>05:00 WIB</option>
                                                    <option>06:00 WIB</option>
                                                    <option>07:00 WIB</option>
                                                    <option>08:00 WIB</option>
                                                    <option>09:00 WIB</option>
                                                    <option>10:00 WIB</option>
                                                    <option>11:00 WIB</option>
                                                    <option>12:00 WIB</option>
                                                    <option>13:00 WIB</option>
                                                    <option>14:00 WIB</option>
                                                    <option>15:00 WIB</option>
                                                    <option>16:00 WIB</option>
                                                    <option>17:00 WIB</option>
                                                    <option>18:00 WIB</option>
                                                    <option>19:00 WIB</option>
                                                    <option>20:00 WIB</option>
                                                    <option>21:00 WIB</option>
                                                    <option>22:00 WIB</option>
                                                    <option>23:00 WIB</option>
                                                    <option>24:00 WIB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row clearfix">
                                    <div class="center">
                                        <input type="submit" name="add" value="Simpan" class="btn btn-primary mt-2">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once('../_footer.php');?>
