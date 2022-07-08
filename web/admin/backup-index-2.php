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
                <h5 class="tx-poppins tx-medium mg-b-0">Anda sedang memasuki halaman Admin</h5>
                <p class="tx-color-03 mg-b-0">Berbagai fitur dapat Anda kelola di sini.</p>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-body pd-x-0 pd-t-0">
                  <div class="d-flex justify-content-between align-items-center pd-15 pd-md-20">
                    <div>
                      <h5 class="tx-poppins tx-medium mg-b-0">Kalender</h5>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Kegiatan untuk civitas akademika ITS</p>
                    </div>
                    <img src="../../assets/img/calendar-1.svg" class="wd-35 ht-35">
                  </div>
                  <a href="kegiatan.php">
                    <div class="pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                      <div class="media d-flex align-items-center">
                        <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="balloon" class="tx-20"></ion-icon></span></div>
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Kegiatan</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Kelola kegiatan yang akan ditampilkan</p>
                        </div>
                      </div>
                      <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                    </div>
                  </a>
                  <hr class="bd-0 mg-0 mg-x-15 mg-md-x-20 mg-y-5">
                  <a href="jenis-kalender.php">
                    <div class="pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                      <div class="media d-flex align-items-center">
                        <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="layers" class="tx-20"></ion-icon></span></div>
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Jenis Kalender</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Kelola jenis kalender</p>
                        </div>
                      </div>
                      <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                    </div>
                  </a>
                  <hr class="bd-0 mg-0 mg-x-15 mg-md-x-20 mg-y-5">
                  <a href="jenis-kegiatan.php">
                    <div class="pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                      <div class="media d-flex align-items-center">
                        <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="layers" class="tx-20"></ion-icon></span></div>
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Jenis Kegiatan</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Jenis kegiatan per kalender</p>
                        </div>
                      </div>
                      <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-body pd-x-0 pd-t-0">
                  <div class="d-flex justify-content-between align-items-center pd-15 pd-md-20">
                    <div>
                      <h5 class="tx-poppins tx-medium mg-b-0">Pengumuman</h5>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Pengumuman secara singkat untuk ditampilkan</p>
                    </div>
                    <img src="../../assets/img/announcement.svg" class="wd-35 ht-35">
                  </div>
                  <a href="#">
                    <div class="pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                      <div class="media d-flex align-items-center">
                        <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="megaphone" class="tx-20"></ion-icon></span></div>
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Kelola Pengumuman</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Sebarkan pengumuman untuk civitas</p>
                        </div>
                      </div>
                      <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-body pd-x-0 pd-t-0">
                  <div class="d-flex justify-content-between align-items-center pd-15 pd-md-20">
                    <div>
                      <h5 class="tx-poppins tx-medium mg-b-0">Tampilan</h5>
                      <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Atur penampilan web myITS Portal</p>
                    </div>
                    <img src="../../assets/img/fill.svg" class="wd-35 ht-35">
                  </div>
                  <a href="sampul.php">
                    <div class="pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                      <div class="media d-flex align-items-center">
                        <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="images" class="tx-20"></ion-icon></span></div>
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Sampul</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Sesuaikan sampul beranda myITS Portal</p>
                        </div>
                      </div>
                      <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
