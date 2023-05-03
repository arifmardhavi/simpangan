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
                              <h4 class="card-title">Dosen</h4>
                              <?php if ($this->session->flashdata('danger_dosen')) { ?>
                                <div class="alert text-white bg-danger" role="alert">
                                   <div class="iq-alert-icon">
                                      <small><i class="ri-alert-line"></i></small>
                                   </div>
                                   <div class="iq-alert-text"><?= $this->session->flashdata('danger_dosen') ?></div>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <i class="ri-close-line"></i>
                                   </button>
                                </div>
                             <?php }else if($this->session->flashdata('success_dosen')) { ?>
                                <div class="alert text-white bg-success" role="alert">
                                   <div class="iq-alert-text"><?= $this->session->flashdata('success_dosen') ?></div>
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <i class="ri-close-line"></i>
                                   </button>
                                </div>
                             <?php } ?>
                          </div>
                          <div class="card-header-toolbar d-flex align-items-center">
                              <a href="#" class=" view-more font-weight-bold" data-toggle="modal" data-target="#exampleModalCenter"><i class="las la-plus iq-arrow-left"></i>Tambah Data Dosen</a>
                          </div>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <form method="post" action="<?= base_url('users/dosen') ?>">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Dosen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">NIP</label>
                                    <input type="number" class="form-control" name="nip" id="inputEmail4" placeholder="ex : 195908281990111001">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="inputEmail4" placeholder="ex : Dr. Basuki Rahmat, S.Si, MT.">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="ex : basukirahmat.if@upnjatim.ac.id">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Masukkan Password">
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Dosen</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                          <div class="table-responsive">
                              <table class="table mb-0 table-borderless tbl-server-info">
                              <thead>
                                  <tr class="active">
                                      <th scope="col">No</th>
                                      <th scope="col">NIP</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1; foreach($this->db->get_where('users', array('status' => 2))->result() as $data){ ?>
                                  <tr>
                                      <td>
                                          <?= $no++; ?>
                                      </td>
                                      <td><?= $data->no_induk ?></td>
                                      <td><?= $data->nama ?></td>
                                      <td><?= $data->email ?></td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                  <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modaldelete<?= $data->id_user ?>"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>

                                  <!-- Modal -->
                                  <div class="modal fade" id="modaldelete<?= $data->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Delete Dosen</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Apakah anda ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="<?= base_url('users/delete_dosen/'.$data->id_user) ?>" class="btn btn-danger">Hapus</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php } ?>
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