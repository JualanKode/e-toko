  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= site_url('home') ?>" class="brand-link">
          <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">e-TOKO</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="<?= site_url('home') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-header">MASTER</li>
                  <li class="nav-item">
                      <a href="<?= site_url('kustomer') ?>" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Kustomer
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="pages/gallery.html" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Sales
                          </p>
                      </a>
                  </li>

                  <li class="nav-header">TRANSAKSI</li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/docs/3.0" class="nav-link">
                          <i class="nav-icon fas fa-file"></i>
                          <p>Penjualan</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="https://adminlte.io/docs/3.0" class="nav-link">
                          <i class="nav-icon fas fa-file"></i>
                          <p>Pembelian</p>
                      </a>
                  </li>
                  <li class="nav-header">LAPORAN</li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-circle nav-icon"></i>
                          <p>Laporan Penjualan</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                              Laporan Pembelian
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>