<!-- loader Start -->
  <div id="loading">
        <div id="loading-center">
        </div>
  </div>
<!-- loader END -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <i class="ri-menu-line wrapper-menu"></i>
            <a href="index.html" class="header-logo">
                <!-- <img src="<?= base_url() ?>assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> -->
                <!-- <img src="<?= base_url() ?>assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo"> -->
                SIMPANGAN
            </a>
        </div>
            <div class="iq-search-bar device-search">
                
                <form>
                    <div class="input-prepend input-append">
                        <div class="btn-group">
                            <label class="dropdown-toggle searchbox" data-toggle="dropdown">
                            <input class="dropdown-toggle search-query text search-input" type="text"  placeholder="Type here to search..."><span class="search-replace"></span>
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <span class="caret"><!--icon--></span>
                            </label>
                            <ul class="dropdown-menu">
                                <li><a href="#"><div class="item"><i class="far fa-file-pdf bg-info"></i>PDFs</div></a></li>
                                <li><a href="#"><div class="item"><i class="far fa-file-alt bg-primary"></i>Documents</div></a></li>
                                <li><a href="#"><div class="item"><i class="far fa-file-excel bg-success"></i>Spreadsheet</div></a></li>
                                <li><a href="#"><div class="item"><i class="far fa-file-powerpoint bg-danger"></i>Presentation</div></a></li>
                                <li><a href="#"><div class="item"><i class="far fa-file-image bg-warning"></i>Photos & Images</div></a></li>
                                <li><a href="#"><div class="item"><i class="far fa-file-video bg-info"></i>Videos</div></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                    <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </a>
                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                            <form action="#" class="searchbox p-2">
                                <div class="form-group mb-0 position-relative">
                                <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                </div>
                            </form>
                        </div>
                    </li> 
                    <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-question-line"></i>
                        </a>
                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton01">
                            <div class="card shadow-none m-0">
                                <div class="card-body p-0 ">
                                    <div class="p-3">
                                        <a href="#" class="iq-sub-card pt-0"><i class="ri-questionnaire-line"></i>Help</a>
                                        <a href="#" class="iq-sub-card"><i class="ri-recycle-line"></i>Training</a>
                                        <a href="#" class="iq-sub-card"><i class="ri-refresh-line"></i>Updates</a>
                                        <a href="#" class="iq-sub-card"><i class="ri-service-line"></i>Terms and Policy</a>
                                        <a href="#" class="iq-sub-card"><i class="ri-feedback-line"></i>Send Feedback</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-icon dropdown"> 
                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        <i class="ri-settings-3-line"></i>
                        </a>
                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton02">
                            <div class="card shadow-none m-0">
                                <div class="card-body p-0 ">
                                    <div class="p-3">
                                        <a href="#" class="iq-sub-card pt-0"><i class="ri-settings-3-line"></i> Settings</a>
                                        <a href="#" class="iq-sub-card"><i class="ri-hard-drive-line"></i> Get Drive for desktop</a>
                                        <a href="#" class="iq-sub-card"><i class="ri-keyboard-line"></i> Keyboard Shortcuts</a>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-icon dropdown caption-content">
                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <div class="caption bg-primary line-height">P</div>
                        </a>
                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                            <div class="card mb-0">
                                <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                <div class="header-title">
                                    <h4 class="card-title mb-0">Profile</h4>
                                </div>
                                <div class="close-data text-right badge badge-primary cursor-pointer "><i class="ri-close-fill"></i></div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-header">
                                        <div class="cover-container text-center">
                                            <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                P                                                    
                                                <a href="">
                                                    
                                                </a>
                                            </div>
                                            <div class="profile-detail mt-3">
                                            <h5><a href="<?= base_url() ?>app/user-profile-edit.html">Panny Marco</a></h5>
                                            <p>pannymarco@gmail.com</p>
                                            </div>
                                            <a href="auth-sign-in.html" class="btn btn-primary">Sign Out</a>
                                        </div>
                                        <div class="profile-details mt-4 pt-4 border-top">
                                            <div class="media align-items-center mb-3">
                                                <div class="rounded-circle iq-card-icon-small bg-primary">
                                                    A
                                                </div>
                                                <div class="media-body ml-3">
                                                    <div class="media justify-content-between">
                                                        <h6 class="mb-0">Anna Mull</h6>
                                                        <p class="mb-0 font-size-12"><i>Signed Out</i></p>
                                                    </div>
                                                    <p class="mb-0 font-size-12">annamull@gmail.com</p>
                                                </div>                                                 
                                            </div>
                                            <div class="media align-items-center mb-3">
                                                <div class="rounded-circle iq-card-icon-small bg-success">
                                                    K
                                                </div>
                                                <div class="media-body ml-3">
                                                    <div class="media justify-content-between">
                                                        <h6 class="mb-0">King Poilin</h6>
                                                        <p class="mb-0 font-size-12"><i>Signed Out</i></p>
                                                    </div>
                                                    <p class="mb-0 font-size-12">kingpoilin@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="media align-items-center">
                                                <div class="rounded-circle iq-card-icon-small bg-danger">
                                                    D
                                                </div>
                                                <div class="media-body ml-3">
                                                    <div class="media justify-content-between">
                                                        <h6 class="mb-0">Devid Worner</h6>
                                                        <p class="mb-0 font-size-12"><i>Signed Out</i></p>
                                                    </div>
                                                    <p class="mb-0 font-size-12">devidworner@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>                     
                </div> 
            </div>
        </nav>
    </div>
</div>