<!Doctype html>
<html lang="en">
  <?php $this->load->view('modul/head') ?>
  <body class=" color-light ">
    <!-- Wrapper Start -->
    <div class="wrapper">
      <?php $this->load->view('modul/sidebar') ?>
      <?php $this->load->view('modul/header') ?>
      <div class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 col-xl-12"> 
                  <div class="card card-block card-stretch card-height files-table">                   
                      <div class="card-header d-flex justify-content-between">
                          <div class="header-title">
                              <h4 class="card-title">Pengajuan PKL</h4>
                              <small class="font-weight-bold">Form yang memiliki tanda (*) wajib diisi </small>
                          </div>
                      </div>
                      <?php if(isset($edit)) {?>
                        <div class="card-body pt-0">
                            <div class="new-user-info">
                               <form action="<?= base_url('pengajuan/update') ?>" method="post">
                                  <?php foreach($this->db->get_where('kelompok',array('id_kelompok' => $edit))->result() as $data) { ?>
                                    <div class="row">
                                      <input type="hidden" name="id_kelompok" value="<?= $edit ?>">
                                      <div class="form-group col-md-6">
                                        <label for="fname">NPM Mahasiswa 1 <small> (Ketua Kelompok)</small> <span class="text-red">*</span></label>
                                        <input type="number" class="form-control" name="npm1" placeholder="NPM Ketua Kelompok" value="<?= $data->npm1 ?>" readonly="true">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="lname">Nama Mahasiswa 1 <small> (Ketua Kelompok)</small> <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="nama1" placeholder="Nama Ketua Kelompok" value="<?= $data->nama1 ?>" readonly="true">
                                      </div>
                                     <div class="form-group col-md-6">
                                        <label for="add1">NPM Mahasiswa 2 </label>
                                        <input type="number" class="form-control" name="npm2" value="<?= $data->npm2 ?>" placeholder="NPM Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="add2">Nama Mahasiswa 2 </label>
                                        <input type="text" class="form-control" name="nama2" value="<?= $data->nama2 ?>" placeholder="Nama Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">NPM Mahasiswa 3 </label>
                                        <input type="number" class="form-control" name="npm3" value="<?= $data->npm3 ?>" placeholder="NPM Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">Nama Mahasiswa 3 </label>
                                        <input type="text" class="form-control" name="nama3" value="<?= $data->nama3 ?>" placeholder="Nama Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="cname">Judul Usulan PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p>Memuat aktivitas, Protipe/produk Perangkat Lunak/ QA/ UI UX , permasalahan/kasus, dan lokasi/instansi. </p>
                                        </small>
                                        <input type="text" class="form-control" name="judul_pkl" value="<?= $data->judul_pkl ?>" placeholder="Judul Usulan PKL" required>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="cname">Tempat PKL <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="tempat_pkl" value="<?= $data->tempat_pkl ?>" placeholder="Tempat atau Nama Instansi PKL" required>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">Tanggal Mulai PKL <span class="text-red">*</span></label>
                                        <input type="date" class="form-control" name="mulai_pkl" value="<?= $data->mulai_pkl ?>" required>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">Tanggal Selesai PKL <span class="text-red">*</span></label>
                                        <input type="date" class="form-control" name="selesai_pkl" value="<?= $data->mulai_pkl ?>" required>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label>Riwayat PKL <span class="text-red">*</span></label>
                                        <small>
                                          <p>Apakah Pernah PKL Sebelumnya ?</p>
                                        </small>
                                        <div class="d-flex">
                                          <div class="col-md-6 ">
                                            <input class="form-check-input" type="radio" name="pkl_terdahulu" value="belum" checked>
                                            <label class="form-check-label">
                                              Belum
                                            </label>
                                          </div>
                                          <div class="col-md-6">
                                            <input class="form-check-input" type="radio" name="pkl_terdahulu" value="pernah">
                                            <label class="form-check-label">
                                              Pernah
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label>Tempat PKL Terdahulu</label>
                                        <small>
                                          <p>Jika pernah, PKL sekarang melanjutkan sebelumnya atau di tempat baru? (jika belum pernah kosongi)</p>
                                        </small>
                                        <div class="d-flex">
                                          <div class="col-md-6 ">
                                            <input class="form-check-input" type="radio" name="tempat_terdahulu" value="melanjutkan">
                                            <label class="form-check-label">
                                              Melanjutkan
                                            </label>
                                          </div>
                                          <div class="col-md-6">
                                            <input class="form-check-input" type="radio" name="tempat_terdahulu" value="baru">
                                            <label class="form-check-label">
                                              Baru
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="cname">Dosen Pembimbing Terdahulu</label>
                                        <small> 
                                          <p>Jika pernah, Siapa dosen pembimbingnya? (jika belum pernah kosongi) </p>
                                        </small>
                                        <input type="text" class="form-control" name="pembimbing_terdahulu" value="<?= $data->pembimbing_terdahulu ?>" placeholder="Nama dosen Pembimbing PKL Terdahulu">
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="altconno">Link Usulan PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                        </small>
                                        <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini" name="usulan_pkl" value="<?= $data->usulan_pkl ?>" required>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="altconno">Link Transkrip PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                        </small>
                                        <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini" name="transkrip_pkl" value="<?= $data->transkrip_pkl ?>" required>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="altconno">Link Surat Balasan Instansi bahwa diterima PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                        </small>
                                        <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini" name="surat_balasan" value="<?= $data->surat_balasan ?>" required>
                                     </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Ajukan</button>
                                  <a href="<?= base_url('pengajuan') ?>" class="btn btn-danger">Batal</a>
                               </form>
                            </div>
                        </div>
                      <?php }}else{ ?>
                        <div class="card-body pt-0">
                            <div class="new-user-info">
                               <form action="<?= base_url('pengajuan/create') ?>" method="post">
                                  <div class="row">
                                    <?php foreach($this->db->get_where('users',array('id_user' => $this->session->userdata('id_user')))->result() as $user) { ?>
                                     <div class="form-group col-md-6">
                                        <label for="fname">NPM Mahasiswa 1 <small> (Ketua Kelompok)</small> <span class="text-red">*</span></label>
                                        <input type="number" class="form-control" name="npm1" placeholder="NPM Ketua Kelompok" value="<?= $user->no_induk ?>" readonly="true">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="lname">Nama Mahasiswa 1 <small> (Ketua Kelompok)</small> <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="nama1" placeholder="Nama Ketua Kelompok" value="<?= $user->nama ?>" readonly="true">
                                     </div>
                                   <?php } ?>
                                     <div class="form-group col-md-6">
                                        <label for="add1">NPM Mahasiswa 2 </label>
                                        <input type="number" class="form-control" name="npm2" placeholder="NPM Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="add2">Nama Mahasiswa 2 </label>
                                        <input type="text" class="form-control" name="nama2" placeholder="Nama Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">NPM Mahasiswa 3 </label>
                                        <input type="number" class="form-control" name="npm3" placeholder="NPM Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">Nama Mahasiswa 3 </label>
                                        <input type="text" class="form-control" name="nama3" placeholder="Nama Mahasiswa">
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="cname">Judul Usulan PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p>Memuat aktivitas, Protipe/produk Perangkat Lunak/ QA/ UI UX , permasalahan/kasus, dan lokasi/instansi. </p>
                                        </small>
                                        <input type="text" class="form-control" name="judul_pkl" placeholder="Judul Usulan PKL" required>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="cname">Tempat PKL <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="tempat_pkl" placeholder="Tempat atau Nama Instansi PKL" required>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">Tanggal Mulai PKL <span class="text-red">*</span></label>
                                        <input type="date" class="form-control" name="mulai_pkl" required>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label for="cname">Tanggal Selesai PKL <span class="text-red">*</span></label>
                                        <input type="date" class="form-control" name="selesai_pkl">
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label>Riwayat PKL <span class="text-red">*</span></label>
                                        <small>
                                          <p>Apakah Pernah PKL Sebelumnya ?</p>
                                        </small>
                                        <div class="d-flex">
                                          <div class="col-md-6 ">
                                            <input class="form-check-input" type="radio" name="pkl_terdahulu" value="belum" checked>
                                            <label class="form-check-label">
                                              Belum
                                            </label>
                                          </div>
                                          <div class="col-md-6">
                                            <input class="form-check-input" type="radio" name="pkl_terdahulu" value="pernah">
                                            <label class="form-check-label">
                                              Pernah
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                     <div class="form-group col-md-6">
                                        <label>Tempat PKL Terdahulu</label>
                                        <small>
                                          <p>Jika pernah, PKL sekarang melanjutkan sebelumnya atau di tempat baru? (jika belum pernah kosongi)</p>
                                        </small>
                                        <div class="d-flex">
                                          <div class="col-md-6 ">
                                            <input class="form-check-input" type="radio" name="tempat_terdahulu" value="melanjutkan">
                                            <label class="form-check-label">
                                              Melanjutkan
                                            </label>
                                          </div>
                                          <div class="col-md-6">
                                            <input class="form-check-input" type="radio" name="tempat_terdahulu" value="baru">
                                            <label class="form-check-label">
                                              Baru
                                            </label>
                                          </div>
                                        </div>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="cname">Dosen Pembimbing Terdahulu</label>
                                        <small> 
                                          <p>Jika pernah, Siapa dosen pembimbingnya? (jika belum pernah kosongi) </p>
                                        </small>
                                        <input type="text" class="form-control" name="pembimbing_terdahulu" placeholder="Nama dosen Pembimbing PKL Terdahulu">
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="altconno">Link Usulan PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                        </small>
                                        <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini" name="usulan_pkl" required>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="altconno">Link Transkrip PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                        </small>
                                        <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini" name="transkrip_pkl" required>
                                     </div>
                                     <div class="form-group col-md-12">
                                        <label for="altconno">Link Surat Balasan Instansi bahwa diterima PKL <span class="text-red">*</span></label>
                                        <small> 
                                          <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                        </small>
                                        <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini" name="surat_balasan" required>
                                     </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Ajukan</button>
                                  <a href="<?= base_url('pengajuan') ?>" class="btn btn-danger">Batal</a>
                               </form>
                            </div>
                        </div>
                      <?php } ?>
                  </div>
              </div>
           </div>
        </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <?php $this->load->view('modul/footer') ?>
  </body>
</html> 