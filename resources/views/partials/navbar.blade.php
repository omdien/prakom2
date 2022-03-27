<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">PRAKOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($active === "data") ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/jenjangs">Jenjang Prakom</a></li>
              <li><a class="dropdown-item" href="/kategori1s">Unsur Kegiatan</a></li>
              <li><a class="dropdown-item" href="/kategori2s">Sub Unsur Kegiatan</a></li>
              <li><a class="dropdown-item" href="/butirs">Butir Kegiatan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "kegiatan") ? 'active' : '' }}" href="/giat">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right {{ ($active === "login") ? 'active' : '' }}"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>