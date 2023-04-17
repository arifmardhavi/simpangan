<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>CloudBOX | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="<?= base_url() ?>/assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>/assets/css/backend.css?v=1.0.0">
      
      <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
      
      <!-- Viewer Plugin -->
        <!--PDF-->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/doc-viewer/include/pdf/pdf.viewer.css">
        <!--Docs-->
        <!--PPTX-->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css">
        <!--All Spreadsheet -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css">
        <!--Image viewer-->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css">
        <!--officeToHtml-->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css">  </head>
  <body class=" ">
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container-fluid h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                        <img src="https://www.upnjatim.ac.id/wp-content/uploads/2022/11/logoupnblu-1.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                     <h2 class="mt-3 mb-3">Berhasil !</h2>
                     <p class="cnf-mail m-auto mb-1">Kode Verifikasi telah dikirim ke <?= $this->session->userdata('email') ?>. Silakan periksa email dan isi kode dibawah.</p>
                     <div class="d-inline-block w-100 mt-2">
                        <form method="post" action="<?= base_url('daftar/auth_verifikasi') ?>">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-label form-group">
                                    <input class="floating-input form-control" type="text" name="kode_verifikasi" placeholder=" ">
                                    <label>Masukkan Kode</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                        <!-- <a href="index.html" type="submit" class="btn btn-primary mt-3">Back to Home</a href="index.html"> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="<?= base_url() ?>/assets/js/backend-bundle.min.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url() ?>/assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url() ?>/assets/js/chart-custom.js"></script>
    
    <!--PDF-->
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/pdf/pdf.js"></script>
    <!--Docs-->
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/docx/jszip-utils.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js"></script>
    <!--PPTX-->
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js"></script>
    <!--All Spreadsheet -->
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js"></script>
    <!--Image viewer-->
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js"></script>
    <!--officeToHtml-->
    <script src="<?= base_url() ?>/assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js"></script>
    <script src="<?= base_url() ?>/assets/js/doc-viewer.js"></script>
    <!-- app JavaScript -->
    <script src="<?= base_url() ?>/assets/js/app.js"></script>
  </body>
</html>