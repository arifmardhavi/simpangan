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
                              <h4 class="card-title">Ajuan</h4>
                              <?php if ($this->session->flashdata('danger_kelompok')) { ?>
                                <div class="alert text-white bg-danger" role="alert">
                                   <div class="iq-alert-icon">
                                      <small><i class="ri-alert-line"></i></small>
                                   </div>
                                   <div class="iq-alert-text"><?= $this->session->flashdata('danger_kelompok') ?></div>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <i class="ri-close-line"></i>
                                   </button>
                                </div>
                             <?php }else if($this->session->flashdata('success_kelompok')) { ?>
                                <div class="alert text-white bg-success" role="alert">
                                   <div class="iq-alert-text"><?= $this->session->flashdata('success_kelompok') ?></div>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <i class="ri-close-line"></i>
                                   </button>
                                </div>
                             <?php } ?>
                          </div>
                      </div>
                      <div class="card-body pt-0">
                          <div class="table-responsive">
                              <table class="table mb-0 table-borderless tbl-server-info">
                              <thead>
                                  <tr class="active">
                                      <th scope="col">NPM</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Tempat</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php if ($this->db->get_where('kelompok', array('npm1' => $this->session->userdata('no_induk')))->num_rows() <= 0) { 
                                  ?>
                                  <tr class="">
                                    <td colspan="5" class="text-center"><a href="<?= base_url
                                    ('pengajuan/daftar') ?>" class="btn btn-primary font-weight-bold"><i class="las la-plus iq-arrow-left"></i>Ajukan Kelompok PKL</a></td>
                                  </tr>
                                <?php }else{ foreach($this->db->get_where('kelompok', array('npm1' => $this->session->userdata('no_induk')))->result() as $data){
                                ?>
                                  <tr>
                                      <td><?= $data->npm1 ?></td>
                                      <td><?= $data->nama1 ?></td>
                                      <td><?= $data->judul_pkl ?></td>
                                      <td><?= $data->tempat_pkl ?></td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalview<?= $data->id_kelompok ?>"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="<?= base_url('pengajuan/edit/'.$data->id_kelompok) ?>"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modaldelete<?= $data->id_kelompok ?>"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>


                                  <!-- Modal view -->
                                  <div class="modal fade" id="modalview<?= $data->id_kelompok ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Detail Kelompok</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="container " >
                                            <div class="row" >
                                              <div class="col-2" >
                                                NPM 1
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->npm1 ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Nama 1
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->nama1 ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                NPM 2
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->npm2 ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Nama 2
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->nama2 ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                NPM 3
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->npm3 ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Nama 3
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->nama3 ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Judul PKL
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->judul_pkl ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Tempat PKL
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->tempat_pkl ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Tanggal mulai
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->mulai_pkl ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Tanggal selesai
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->selesai_pkl ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                PKL Terdahulu
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->pkl_terdahulu ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Pembimbing Terdahulu
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->pembimbing_terdahulu ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Tempat terdahulu
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <?= $data->tempat_terdahulu ?>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Usulan PKL
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <a href="<?= $data->usulan_pkl ?>" target="_blank" ><?= $data->usulan_pkl ?></a>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Transkrip PKL
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <a href="<?= $data->transkrip_pkl ?>" target="_blank" ><?= $data->transkrip_pkl ?></a>
                                              </div>
                                            </div>
                                            <div class="row" >
                                              <div class="col-2" >
                                                Surat Balasan
                                              </div>
                                              <div class="col-1 text-right" >
                                                :
                                              </div>
                                              <div class="col-9" >
                                                <a href="<?= $data->surat_balasan ?>" target="_blank" ><?= $data->surat_balasan ?></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="<?= base_url('pengajuan/edit/'.$data->id_kelompok) ?>" class="btn btn-warning">Edit</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Modal delete -->
                                  <div class="modal fade" id="modaldelete<?= $data->id_kelompok ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Delete Kelompok</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Apakah anda ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="<?= base_url('pengajuan/delete/'.$data->id_kelompok) ?>" class="btn btn-danger">Hapus</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php }} ?>
                              </tbody>
                              </table>
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