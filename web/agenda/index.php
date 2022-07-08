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
              <h4 class="tx-poppins tx-medium mg-b-0">Agenda</h4>
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
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari agenda" required>
                    <label for="cari">Cari agenda...</label>
                    <button type="submit" class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center pos-absolute t-10 r-15"><ion-icon name="search" class="mg-y-2 tx-18"></ion-icon></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mg-b-10 mg-md-b-20">
              <a href="agenda-detail.php">
                <div class="card card-hover bd-0">
                  <div class="card-body pd-5">
                    <img src="https://www.its.ac.id/wp-content/uploads/2021/12/Program-Beasiswa-YTUB-723x1024.png" class="wd-100p ht-150 rounded-its-6" alt="" style="object-fit: cover;">
                    <div class="pd-x-10 pd-y-15 ht-150">
                      <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Sabtu, 5 Feb 2022</span>
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-5 crop-text-2" title="Program Beasiswa : Yayasan Tunas Unggul Bangsa (YTUB)">Program Beasiswa : Yayasan Tunas Unggul Bangsa (YTUB)</p>
                      <p class="tx-13 tx-medium tx-color-03 mg-b-0">00.00 - 00.00</p>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Institut Teknologi Sepuluh Nopember</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mg-b-10 mg-md-b-20">
              <a href="agenda-detail.php">
                <div class="card card-hover bd-0">
                  <div class="card-body pd-5">
                    <img src="https://www.its.ac.id/wp-content/uploads/2021/12/MOTIP-04-724x1024.jpeg" class="wd-100p ht-150 rounded-its-6" alt="" style="object-fit: cover;">
                    <div class="pd-x-10 pd-y-15 ht-150">
                      <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Sabtu, 5 Feb 2022</span>
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-5 crop-text-2" title="MOTIP 04 : Konferensi Internasional ke-4 tentang Manajemen Teknologi, Inovasi dan Proyek">MOTIP 04 : Konferensi Internasional ke-4 tentang Manajemen Teknologi, Inovasi dan Proyek</p>
                      <p class="tx-13 tx-medium tx-color-03 mg-b-0">00.00 - 00.00</p>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Institut Teknologi Sepuluh Nopember</p>
                    </div>
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
