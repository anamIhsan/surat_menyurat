<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SURAT MENYURAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/avatar1.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->email }}</a>
          <span class="right badge badge-success">{{ Auth::user()->roles }}</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" 
              class="nav-link
              {{ (request()->is('dashboard')) ? 'active' : '' }}  
            ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          @if(Auth::user()->roles == "SUPER ADMIN")
            <li class="nav-item
              {{ (request()->is('master-surat/klasifikasi-surat')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/klasifikasi-surat/create')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/klasifikasi-surat/edit*')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/sifat-surat')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/sifat-surat/create')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/sifat-surat/edit*')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/master-harap')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/master-harap/create')) ? 'menu-open' : '' }}
              {{ (request()->is('master-surat/master-harap/edit*')) ? 'menu-open' : '' }}
            ">
              <a href="#" 
                class="nav-link
                {{ (request()->is('master-surat/klasifikasi-surat')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/klasifikasi-surat/create')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/klasifikasi-surat/edit*')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/sifat-surat')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/sifat-surat/create')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/sifat-surat/edit*')) ? 'active' : '' }} 
                {{ (request()->is('master-surat/master-harap')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/master-harap/create')) ? 'active' : '' }}  
                {{ (request()->is('master-surat/master-harap/edit*')) ? 'active' : '' }}   
              ">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                  Master Surat
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('master_surat-klasifikasi_surat') }}" 
                    class="nav-link
                    {{ (request()->is('master-surat/klasifikasi-surat')) ? 'active' : '' }}  
                    {{ (request()->is('master-surat/klasifikasi-surat/create')) ? 'active' : '' }}  
                    {{ (request()->is('master-surat/klasifikasi-surat/edit*')) ? 'active' : '' }}  
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Klasifikasi Surat</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('master_surat-sifat_surat') }}" 
                    class="nav-link
                    {{ (request()->is('master-surat/sifat-surat')) ? 'active' : '' }}  
                    {{ (request()->is('master-surat/sifat-surat/create')) ? 'active' : '' }}  
                    {{ (request()->is('master-surat/sifat-surat/edit*')) ? 'active' : '' }}  
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Sifat Surat</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('master_surat-master_harap') }}" 
                    class="nav-link
                    {{ (request()->is('master-surat/master-harap')) ? 'active' : '' }}  
                    {{ (request()->is('master-surat/master-harap/create')) ? 'active' : '' }}  
                    {{ (request()->is('master-surat/master-harap/edit*')) ? 'active' : '' }}  
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Master Harap</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          
          @if(Auth::user()->roles != "SUPER ADMIN" && Auth::user()->roles != "ADMIN")
            <li class="nav-item">
              <a href="{{ route('kelola_surat-surat_masuk') }}" 
                class="nav-link
                {{ (request()->is('kelola-surat/surat-masuk')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/create')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/edit*')) ? 'active' : '' }} 
                {{ (request()->is('kelola-surat/surat-masuk/disposisi*')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/disposisi/create')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/disposisi/edit*')) ? 'active' : '' }}  
              ">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Surat Masuk
                </p>
              </a>
            </li>
          @else
            <li class="nav-item
              @if(Auth::user()->roles != "SUPER ADMIN")
                menu-open
              @else
                {{ (request()->is('kelola-surat/surat-masuk')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-masuk/create')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-masuk/edit*')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-keluar')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-keluar/create')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-keluar/edit*')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-masuk/disposisi*')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-masuk/disposisi/create')) ? 'menu-open' : '' }}
                {{ (request()->is('kelola-surat/surat-masuk/disposisi/edit*')) ? 'menu-open' : '' }}
              @endif
            ">
              <a href="#" 
                class="nav-link
                {{ (request()->is('kelola-surat/surat-masuk')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/create')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/edit*')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-keluar')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-keluar/create')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-keluar/edit*')) ? 'active' : '' }} 
                {{ (request()->is('kelola-surat/surat-keluar/anggota*')) ? 'active' : '' }}
                {{ (request()->is('kelola-surat/surat-masuk/disposisi*')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/disposisi/create')) ? 'active' : '' }}  
                {{ (request()->is('kelola-surat/surat-masuk/disposisi/edit*')) ? 'active' : '' }}   
              ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Kelola Surat
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('kelola_surat-surat_masuk') }}" 
                    class="nav-link
                    {{ (request()->is('kelola-surat/surat-masuk')) ? 'active' : '' }}  
                    {{ (request()->is('kelola-surat/surat-masuk/create')) ? 'active' : '' }}  
                    {{ (request()->is('kelola-surat/surat-masuk/edit*')) ? 'active' : '' }}
                    {{ (request()->is('kelola-surat/surat-masuk/disposisi*')) ? 'active' : '' }}  
                    {{ (request()->is('kelola-surat/surat-masuk/disposisi/create')) ? 'active' : '' }}  
                    {{ (request()->is('kelola-surat/surat-masuk/disposisi/edit*')) ? 'active' : '' }}    
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Surat Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('kelola_surat-surat_keluar') }}" 
                    class="nav-link
                    {{ (request()->is('kelola-surat/surat-keluar')) ? 'active' : '' }}  
                    {{ (request()->is('kelola-surat/surat-keluar/create')) ? 'active' : '' }}  
                    {{ (request()->is('kelola-surat/surat-keluar/edit*')) ? 'active' : '' }}   
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Surat Keluar</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->roles != "PEGAWAI")
            <li class="nav-item
              @if(Auth::user()->roles != "SUPER ADMIN")
                menu-open
              @else
                {{ (request()->is('laporan-surat/surat-masuk')) ? 'menu-open' : '' }}
                {{ (request()->is('laporan-surat/surat-masuk/create')) ? 'menu-open' : '' }}
                {{ (request()->is('laporan-surat/surat-masuk/edit*')) ? 'menu-open' : '' }}
                {{ (request()->is('laporan-surat/surat-keluar')) ? 'menu-open' : '' }}
                {{ (request()->is('laporan-surat/surat-keluar/create')) ? 'menu-open' : '' }}
                {{ (request()->is('laporan-surat/surat-keluar/edit*')) ? 'menu-open' : '' }}
              @endif
            ">
              <a href="#" 
                class="nav-link
                {{ (request()->is('laporan-surat/surat-masuk')) ? 'active' : '' }}  
                {{ (request()->is('laporan-surat/surat-masuk/create')) ? 'active' : '' }}  
                {{ (request()->is('laporan-surat/surat-masuk/edit*')) ? 'active' : '' }}  
                {{ (request()->is('laporan-surat/surat-keluar')) ? 'active' : '' }}  
                {{ (request()->is('laporan-surat/surat-keluar/create')) ? 'active' : '' }}  
                {{ (request()->is('laporan-surat/surat-keluar/edit*')) ? 'active' : '' }} 
                {{ (request()->is('laporan-surat/surat-keluar/anggota*')) ? 'active' : '' }}  
              ">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                  Laporan Surat
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('laporan_surat-surat_masuk') }}" 
                    class="nav-link
                    {{ (request()->is('laporan-surat/surat-masuk')) ? 'active' : '' }}  
                    {{ (request()->is('laporan-surat/surat-masuk/create')) ? 'active' : '' }}  
                    {{ (request()->is('laporan-surat/surat-masuk/edit*')) ? 'active' : '' }}   
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Surat Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('laporan_surat-surat_keluar') }}" 
                    class="nav-link
                    {{ (request()->is('laporan-surat/surat-keluar')) ? 'active' : '' }}  
                    {{ (request()->is('laporan-surat/surat-keluar/create')) ? 'active' : '' }}  
                    {{ (request()->is('laporan-surat/surat-keluar/edit*')) ? 'active' : '' }}   
                  ">
                    <i class="far fa-circle text-danger nav-icon"></i>
                    <p>Surat Keluar</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif

          @if(Auth::user()->roles != "SUPER ADMIN")
            <li class="nav-header"><hr style="background: white;"></li>
          @endif

          @if(Auth::user()->roles == "SUPER ADMIN")
            <li class="nav-header">PENGATURAN</li>
            <li class="nav-item">
              <a href="{{ route('pengguna') }}" 
                class="nav-link
                {{ (request()->is('pengguna')) ? 'active' : '' }}  
                {{ (request()->is('pengguna/create')) ? 'active' : '' }}  
                {{ (request()->is('pengguna/edit*')) ? 'active' : '' }}  
              ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Pengguna Sistem
                </p>
              </a>
            </li>
          @endif
          
          <li class="nav-item">
              <a href="#logout"
                data-toggle="modal" 
                data-toggle="tooltip"
              >
                <button class="nav-link text-left bg-danger">
                  <i class="nav-icon fas fa-arrow-circle-right"></i>
                  <p>
                    Keluar
                  </p>
                </button>
              </a>
          </li>
        </ul>
      </nav>
    </div>
</aside>
{{-- Modal Logout --}}
<div id="logout" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <form class="d-inline-block" action="{{ route('logout') }}" method="POST">
            @csrf
            @method('POST')
            <div class="modal-header">						
              <h4 class="modal-title">Keluar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">					
              <p>Apakah Anda yakin ingin keluar ?</p>
              <p class="text-warning"><small>Tindakan ini tidak bisa dibatalkan.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
              <button type="submit" class="btn btn-danger btn-small">Ya, Yakin</button>
            </div>
          </form>
      </div>
  </div>
</div>