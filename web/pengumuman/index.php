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
              <h4 class="tx-poppins tx-medium mg-b-0">Pengumuman</h4>
            </div>
            <div>
              <a href="#collapse-cari" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center"data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse-cari"><ion-icon name="search" class="mg-y-2 tx-18"></ion-icon></a>
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-xs">

            <div class="col-12">
              <div class="collapse mg-t-5 mg-b-10 mg-md-b-20" id="collapse-cari">
                <form action="#">
                  <div class="form-floating pos-relative">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari pengumuman" required>
                    <label for="cari">Cari pengumuman...</label>
                    <button type="submit" class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center pos-absolute t-10 r-15"><ion-icon name="search" class="mg-y-2 tx-18"></ion-icon></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mg-b-10 mg-md-b-20">
              <a href="pengumuman-detail.php">
                <div class="card card-hover bd-0">
                  <div class="card-body">
                    <img src="../../assets/img/announcement.svg" class="wd-25 ht-25 mg-b-10">
                    <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Perbaikan sistem</p>
                    <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">1 Desember 2021</p>
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
