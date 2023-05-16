<div class="iq-sidebar  sidebar-default ">
  <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
      <a href="index.html" class="header-logo">
          <!-- <img src="<?= base_url() ?>assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> -->
          SIMPANGAN
       </a>
      <div class="iq-menu-bt-sidebar">
          <i class="las la-bars wrapper-menu"></i>
      </div>
  </div>
  <div class="data-scrollbar" data-scroll="1">
      <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
               <li class=" <?php if($page == 'dashboard'){echo "active";}  ?>">
                      <a href="<?= base_url('dashboard') ?>" class="">
                          <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                      </a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  </ul>
               </li>
               <li class=" <?php if($page == 'pengajuan'){echo "active";}  ?> ">
                      <a href="<?= base_url('pengajuan') ?>" class="">
                          <i class="las la-plus iq-arrow-left"></i><span>Ajuan PKL</span>
                      </a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  </ul>
               </li>
               <li class="<?php if($page == 'mahasiswa'){echo "active";}  ?> ">
                      <a href="<?= base_url('mahasiswa') ?>" class="">
                          <i class="las la-users iq-arrow-left"></i><span>Mahasiswa</span>
                      </a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  </ul>
               </li>
               <li class="<?php if($page == 'dosen'){echo "active";}  ?>">
                      <a href="<?= base_url('dosen') ?>" class="">
                          <i class="las la-user-tie iq-arrow-left"></i><span>Dosen</span>
                      </a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  </ul>
               </li>
               <li class=" <?php if($page == 'berkas'){echo "active";}  ?>">
                      <a href="<?= base_url('berkas') ?>" class="">
                          <i class="lab la-wpforms iq-arrow-left"></i><span>Berkas</span>
                      </a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  </ul>
               </li>
               <li class="">
                      <a href="<?= base_url('users/logout') ?>" class="">
                          <i class="lab la-wpforms iq-arrow-left"></i><span>Logout</span>
                      </a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  </ul>
               </li>
          </ul>
      </nav>
      <div class="p-3"></div>
  </div>
</div>