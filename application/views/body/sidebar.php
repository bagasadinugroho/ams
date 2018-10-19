  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>" class="brand-link">
      <img src="<?php echo base_url()."assets/";?>img/logo.png" alt="AMS Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>A</b>MS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a>Hai, <?php echo $this->session->userdata("nama"); ?></a>
        </div>
        <!-- <div class="info">
          <a href="#" class="d-block">></a>
        </div> -->
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Asset
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('CList');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-success"></i>
                  <p>List All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CData');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-success"></i>
                  <p>Ready to Deploy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CDeployed');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-success"></i>
                  <p>Deployed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CBroken');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-success"></i>
                  <p>Broken</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CNew');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-success"></i>
                  <p>Create Asset</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Vendor
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('CDatavendor');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-danger"></i>
                  <p>List Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('CVendor');?>" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-danger"></i>
                  <p>Add Vendor</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

