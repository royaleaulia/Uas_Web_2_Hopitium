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
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>