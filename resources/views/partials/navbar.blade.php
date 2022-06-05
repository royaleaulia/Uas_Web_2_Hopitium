<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Dokter") ? 'active' : '' }}"  href="/dokter">Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Perawat") ? 'active' : '' }}" href="/perawat">Perawat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Pasien") ? 'active' : '' }}" href="/pasien">Pasien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Kamar") ? 'active' : '' }}" href="/kamar">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Obat") ? 'active' : '' }}" href="/obat">Obat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Petugas Administrasi") ? 'active' : '' }}" href="/petugas_administrasi">Petugas Administrasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Detail
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/data_pemeriksaan">Data Pemeriksaan Dokter dan Pasien</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/data_administrasi">Data Administrasi Pasien</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/data_pembelian_obat">Data Pembelian Obat pada Pasien</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="data_rawat_inap">Data Rawat Inap</a></li>
            </ul>
          </li>
        </ul>
        <li class="navbar-nav ms-auto">
          <ul class="nav-item">
            <a href="/login" class="nav-link {{ ($title == "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </ul>
        </li>
      </div>
    </div>
  </nav>