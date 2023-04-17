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
                              <h4 class="card-title">Files</h4>
                          </div>
                          <div class="card-header-toolbar d-flex align-items-center">
                              <a href="./page-files.html" class=" view-more">View All</a>
                          </div>
                      </div>
                      <div class="card-body pt-0">
                          <div class="table-responsive">
                              <table class="table mb-0 table-borderless tbl-server-info">
                              <thead>
                                  <tr>
                                      <th scope="col">Name</th>
                                      <th scope="col">Members</th>
                                      <th scope="col">Last Edit</th>
                                      <th scope="col">Size</th>
                                      <th scope="col"></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="icon-small bg-danger rounded mr-3">
                                                  <i class="ri-file-excel-line"></i>
                                              </div>
                                              <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="Weekly-report.pdf" style="cursor: pointer;">Weekly-report.pdf</div>
                                          </div>
                                      </td>
                                      <td>Me</td>
                                      <td>jan 21, 2020 me</td>
                                      <td>02 MB</td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                  <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="active">
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="icon-small bg-primary rounded mr-3">
                                                  <i class="ri-file-download-line"></i>
                                              </div>
                                              <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="VueJs.pdf" style="cursor: pointer;">VueJs.pdf</div>
                                          </div>
                                      </td>
                                      <td>Poul Molive</td>
                                      <td>jan 25, 2020 Poul Molive</td>
                                      <td>64 MB</td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                                  <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="icon-small bg-info rounded mr-3">
                                                  <i class="ri-file-excel-line"></i>
                                              </div>
                                              <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="Milestone.docx" style="cursor: pointer;">Milestone.docx</div>
                                          </div>
                                      </td>
                                      <td>Me</td>
                                      <td>Mar 30, 2020 Gail Forcewind</td>
                                      <td>30 MB</td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton8" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8">
                                                  <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="icon-small bg-success rounded mr-3">
                                                  <i class="ri-file-excel-line"></i>
                                              </div>
                                              <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal" data-title="Training center.xlsx" style="cursor: pointer;">Training center.xlsx</div>
                                          </div>
                                      </td>
                                      <td>Me</td>
                                      <td>Mar 30, 2020 Gail Forcewind</td>
                                      <td>10 MB</td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton09" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                  <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div class="icon-small bg-warning rounded mr-3">
                                                  <i class="ri-file-excel-line"></i>
                                              </div>
                                              <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pptx" data-toggle="modal" data-target="#exampleModal" data-title="Flavour.pptx" style="cursor: pointer;">Flavour.pptx</div>
                                          </div>
                                      </td>
                                      <td>Me</td>
                                      <td>Mar 30, 2020 Gail Forcewind</td>
                                      <td>10 MB</td>
                                      <td>
                                          <div class="dropdown">
                                              <span class="dropdown-toggle" id="dropdownMenuButton9" data-toggle="dropdown">
                                                  <i class="ri-more-fill"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9">
                                                  <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
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