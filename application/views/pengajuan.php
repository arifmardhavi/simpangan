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
                      <div class="card-body pt-0">
                          <div class="new-user-info">
                             <form>
                                <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="fname">NPM Mahasiswa 1 <small> (Ketua Kelompok)</small> <span class="text-red">*</span></label>
                                      <input type="text" class="form-control" id="fname" placeholder="NPM Ketua Kelompok" required>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="lname">Nama Mahasiswa 1 <small> (Ketua Kelompok)</small> <span class="text-red">*</span></label>
                                      <input type="text" class="form-control" id="lname" placeholder="Nama Ketua Kelompok">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="add1">NPM Mahasiswa 2 </label>
                                      <input type="text" class="form-control" id="add1" placeholder="NPM Mahasiswa">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="add2">Nama Mahasiswa 2 </label>
                                      <input type="text" class="form-control" id="add2" placeholder="Nama Mahasiswa">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="cname">NPM Mahasiswa 3 </label>
                                      <input type="text" class="form-control" id="cname" placeholder="NPM Mahasiswa">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="cname">Nama Mahasiswa 3 </label>
                                      <input type="text" class="form-control" id="cname" placeholder="Nama Mahasiswa">
                                   </div>
                                   <div class="form-group col-md-12">
                                      <label for="cname">Judul Usulan PKL <span class="text-red">*</span></label>
                                      <small> 
                                        <p>Memuat aktivitas, Protipe/produk Perangkat Lunak/ QA/ UI UX , permasalahan/kasus, dan lokasi/instansi. </p>
                                      </small>
                                      <input type="text" class="form-control" id="cname" placeholder="Judul Usulan PKL">
                                   </div>
                                   <div class="form-group col-md-12">
                                      <label for="cname">Tempat PKL <span class="text-red">*</span></label>
                                      <input type="text" class="form-control" id="cname" placeholder="Tempat atau Nama Instansi PKL">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="cname">Tanggal Mulai PKL <span class="text-red">*</span></label>
                                      <input type="date" class="form-control" id="cname">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="cname">Tanggal Selesai PKL <span class="text-red">*</span></label>
                                      <input type="date" class="form-control" id="cname">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="mobno">Riwayat PKL <span class="text-red">*</span></label>
                                      <small>
                                        <p>Apakah Pernah PKL Sebelumnya ?</p>
                                      </small>
                                      <div class="d-flex">
                                        <div class="col-md-6 ">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                          <label class="form-check-label" for="flexRadioDefault1">
                                            Belum
                                          </label>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Pernah
                                          </label>
                                        </div>
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="mobno">Tempat PKL Terdahulu</label>
                                      <small>
                                        <p>Jika pernah, PKL sekarang melanjutkan sebelumnya atau di tempat baru? (jika belum pernah kosongi)</p>
                                      </small>
                                      <div class="d-flex">
                                        <div class="col-md-6 ">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                            Melanjutkan
                                          </label>
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Baru
                                          </label>
                                        </div>
                                      </div>
                                   </div>
                                   <div class="form-group col-md-12">
                                      <label for="cname">Dosen Pembimbing Terdahulu <span class="text-red">*</span></label>
                                      <small> 
                                        <p>Jika pernah, Siapa dosen pembimbingnya? (jika belum pernah kosongi) </p>
                                      </small>
                                      <input type="text" class="form-control" id="cname" placeholder="Nama dosen Pembimbing PKL Terdahulu">
                                   </div>
                                   <div class="form-group col-md-12">
                                      <label for="altconno">Link Usulan PKL <span class="text-red">*</span></label>
                                      <small> 
                                        <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                      </small>
                                      <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini">
                                   </div>
                                   <div class="form-group col-md-12">
                                      <label for="altconno">Link Transkrip PKL <span class="text-red">*</span></label>
                                      <small> 
                                        <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                      </small>
                                      <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini">
                                   </div>
                                   <div class="form-group col-md-12">
                                      <label for="altconno">Link Surat Balasan Instansi bahwa diterima PKL <span class="text-red">*</span></label>
                                      <small> 
                                        <p class="text-red font-weight-bold">TIDAK BOLEH DI PRIVATE</p>
                                      </small>
                                      <input type="text" class="form-control" id="altconno" placeholder="Masukkan Link Google Drive disini">
                                   </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajukan</button>
                             </form>
                          </div>
                      </div>
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