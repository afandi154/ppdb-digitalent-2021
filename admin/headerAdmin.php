<?php session_start(); ?>
<header>
  <div class="container-fluid">
    <img class="img-fluid" 
         src="../assets/img/ppdbheader.png" 
         alt="Header PPDB">
  </div>
</header>  
<nav class="navbar navbar-expand-xl navbar-dark bg-dark fw-bold">
  <div class="container">
    <a class="navbar-brand d-none d-sm-block">Admin Page</a>
    <button class="navbar-toggler" 
            type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <a class="nav-link" href="./index.php">Setting Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./settingAlur.php">Setting Alur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./semuaPeserta.php">List Peserta</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" href="#"><?php echo $_SESSION['username']; ?></a>
				</li>
				<li class="nav-item">
          <a class="nav-link"href="./logoutAdmin.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>