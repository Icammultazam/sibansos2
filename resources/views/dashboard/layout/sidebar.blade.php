<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/penerimabnpt') ? 'active' : '' }} " aria-current="page" href="/dashboard/penerimabnpt">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Penerima BNPT
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/agen') ? 'active' : '' }} " href="/dashboard/agen">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Daftar Agen
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kpmpost') ? 'active' : '' }} " href="/dashboard/kpmpost">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Daftar KPM
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/jadwal') ? 'active' : '' }} " href="/dashboard/jadwal">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Jadwal Penyaluran
          </a>
        </li>
      </ul>

     
    </div>
  </nav>