<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    <?php include "../partial/navbar.php"?>
    <?php include "../partial/mahasiswa-menu-sidebar.php"?>
    <?php include "../partial/mahasiswa-menu-sidebar-monitor.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <h4 class="tx-poppins tx-medium mg-b-0">Admin</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 mg-b-20 mg-md-b-30 ht-70 ht-md-90 d-flex align-items-center justify-content-start">
              <img src="../../assets/img/admin.svg" class="wd-40 ht-40 mg-r-15 wd-md-45 ht-md-45 mg-md-r-20">
              <div>
                <p class="tx-poppins tx-medium tx-15 tx-md-16 mg-b-0">Anda sedang memasuki halaman Admin</p>
                <p class="tx-color-03 mg-b-0">Berbagai fitur dapat Anda kelola di sini.</p>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <a href="kalender.php">
                <div class="card card-hover bd-0">
                  <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                      <p class="tx-poppins tx-medium tx-color-01 tx-15 mg-b-0">Kalender</p>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Jadwal acara internal maupun eksternal ITS.</p>
                    </div>
                    <img src="../../assets/img/calendar-1.svg" class="wd-35 ht-35">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <a href="sampul.php">
                <div class="card card-hover bd-0">
                  <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                      <p class="tx-poppins tx-medium tx-color-01 tx-15 mg-b-0">Gambar Sampul</p>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Ubah sampul pada halaman beranda.</p>
                    </div>
                    <img src="../../assets/img/fill.svg" class="wd-35 ht-35">
                  </div>
                </div>
              </a>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
