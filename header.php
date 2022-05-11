<?php session_start(); ?>
<header>
  <div class="container-fluid">
    <img class="img-fluid" 
         src="./assets/img/ppdbheader.png" 
         alt="Header PPDB">
  </div>
</header>  
<nav class="navbar navbar-expand-xl navbar-dark bg-primary fw-bold">
  <div class="container">
    <img class="navbar-brand d-none d-sm-block" src="./assets/img/logo.png">
    <button class="navbar-toggler" 
            type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./alur.php">Alur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./jadwal.php">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./persyaratan.php">Persyaratan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./biaya_masuk.php">Biaya Masuk</a>
        </li>
        <?php if(empty($_SESSION['username'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="./register.php">Pendaftaran</a>
          </li>
        </ul>
      
				<ul class="navbar-nav navbar-right mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#faq">FAQ</a>
					</li>
					<li class="nav-item"> 
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="./semuaPeserta.php">List Peserta</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-right mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a>
					</li>
					<li class="nav-item">
            <a class="nav-link"href="logout.php">Logout</a>
          </li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>