
 

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
      <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <div class="navbar">
      <ul class ="nav navbar-nav navbar-right">
       
      </ul>
      </div>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
      <!-- K E R A N J A N G  B E L A N J A -->
      <li class="nav-item ml-5">
        <i class="fas fa-shopping-cart"></i>
          <?php
          $keranjang = ': '.$this->cart->total_items().' items'?>

          <?php echo  anchor('Dashboard/detail_keranjang' ,$keranjang) ?>
           <?php if($this->session->userdata('username')){?>
          <li class="nav-item ml-5"><div>Selamat Datang  <?php echo $this->session->userdata('username')?></div></li>
        </li>
      </ul>
      
      <div class="topbar-divider d-none d-sm-block"></div>
      <ul class="na navbar-nav navbar-right">
       
          <button type="button" class="btn btn- ml-4 mr-2"><?php echo anchor('auth/logout','Logout');?></button>

        <?php }else{?>
          <li class="nav-item ml-3">
        <?php echo anchor('auth/login','Login');?></li>
          
        <?php }?>
       

      </ul>
  </div>
  </nav>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
     
      <span class="brand-text font-weight-light ml-0">
        
        <i class="fas fa-store"></i> | Hit's Pizza</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">

          <a href="#" class="d-block"><div class="ml-2"><i class="fas fa-user ml-2"></i>    Halo <?php echo $this->session->userdata('username')?></div></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('index.php/Dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
        

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <p>
                KATEGORI
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/kategori/pizza');?>" class="nav-link">
                  <i class=""></i>
                  <p>Pizza</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/kategori/pasta');?>" class="nav-link">
                  <i class=""></i>
                  <p>Pasta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/kategori/minuman');?>" class="nav-link">
                 <i class=""></i>
                  <p>Minuman</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              
              <p>
               Lainnya
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('auth/login'); ?>" class="nav-link">
                  <i class="fas fa-sign-in-alt"></i>
                  <p>Login</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo base_url('auth/logout','Logout'); ?>" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
              
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>