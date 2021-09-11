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
                            Tambah Pasien Baru
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
                                <h4>Detail Pasien</h4>
                                <form class="form-material" action="proses" method="post">
                                    <!-- Input -->
                                    <div class="body">
                                        <h6>Nama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" placeholder="Nama Pasien" autofocus required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.KTP</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="no_ktp" id="no_ktp" class="form-control" placeholder="No.KTP" autofocus required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Marga</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="marga" id="marga" class="form-control">
                                                            <option>jawa</option>
                                                            <option>batak</option>
                                                            <option>betawi</option>
                                                            <option>sunda</option>
                                                            <option>dayak</option>
                                                            <option>asmat</option>
                                                            <option>minahasa</option>
                                                            <option>melayu</option>
                                                            <option>madura</option>
                                                            <option>bugis</option>
                                                            <option>lainnya</option>
                                                        </select>
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
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="kelurahan" id="kelurahan" class="form-control" placeholder="Kelurahan" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Kecamatan" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Provinsi" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Kode Pos" required />
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
                                        <h6>No.Telepon Rumah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="no_telprumah" id="no_telprumah" class="form-control" placeholder="No.Telp Rumah" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Ponsel</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No.Ponsel" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Lahir</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="<?=date('Y-m-d')?>" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jenis Kelamin</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                            <option>pria</option>
                                                            <option>wanita</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Agama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="agama" id="agama" class="form-control">
                                                            <option>islam</option>
                                                            <option>kristen</option>
                                                            <option>budha</option>
                                                            <option>hindu</option>
                                                            <option>kongucu</option>
                                                            <option>lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Golongan Darah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="golongan_darah" id="golongan_darah" class="form-control">
                                                            <option>a</option>
                                                            <option>b</option>
                                                            <option>ab</option>
                                                            <option>o</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Status Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="status_pasien" id="status_pasien" class="form-control">
                                                            <option>menikah</option>
                                                            <option>belum menikah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jenis Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="jenis_pasien" id="jenis_pasien" class="form-control">
                                                            <option>pribadi</option>
                                                            <option>bpjs</option>
                                                            <option>allianz</option>
                                                            <option>cigna</option>
                                                            <option>prudential</option>
                                                            <option>cigna</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4>Kontak Darurat</h4>
                                        <h6>Nama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="nama_darurat" id="nama_darurat" class="form-control" placeholder="Nama Darurat" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat Darurat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="alamat_darurat" id="alamat_darurat" class="form-control" placeholder="Alamat Darurat" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Hubungan</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="hubungan_darurat" id="hubungan_darurat" class="form-control">
                                                            <option>orangtua</option>
                                                            <option>saudara</option>
                                                            <option>teman</option>
                                                            <option>sahabat</option>
                                                            <option>rekan kerja</option>
                                                            <option>atasan kerja</option>
                                                            <option>lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Telepon Rumah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="no_telprumah_darurat" id="no_telprumah_darurat" class="form-control" placeholder="No.Telp Rumah Darurat" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Ponsel</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="no_hp_darurat" id="no_hp_darurat" class="form-control" placeholder="No.Ponsel Darurat" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Sumber Informasi</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="sumber_informasi" id="sumber_informasi" class="form-control">
                                                            <option>internet</option>
                                                            <option>majalah</option>
                                                            <option>tv</option>
                                                            <option>koran</option>
                                                            <option>radio</option>
                                                            <option>spanduk</option>
                                                            <option>seminar</option>
                                                            <option>event</option>
                                                            <option>referensi teman</option>
                                                            <option>lainnya</option>
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
