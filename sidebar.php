<div class="col-lg-3">
  <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
        style="widht:250px">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home' || $_GET['x'] == '')) ? 'active link-light' : 'link-dark'; ?>"
                aria-current="page" href="index.php?x=home"><i class="bi bi-houses"></i>
                Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'wilayah') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=wilayah"><i class="bi bi-buildings"></i>
                Wilayah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'tps') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=tps"><i class="bi bi-boxes"></i> TPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pemilih') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=pemilih"><i class="bi bi-person-vcard"></i>
                Pemilih</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'kandidat') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=kandidat"><i class="bi bi-people"></i>
                Kandidat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'partai') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=partai"><i class="bi bi-flag"></i> Partai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pemungutan_suara') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=pemungutan_suara"><i class="bi bi-graph-up-arrow"></i>
                Pemungutan Suara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'hasil_pemilu') ? 'active link-light' : 'link-dark'; ?>"
                href="index.php?x=hasil_pemilu"><i class="bi bi-ui-checks"></i>
                Hasil
                Pemilu</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>