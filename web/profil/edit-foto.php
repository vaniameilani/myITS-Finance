<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    <?php include "../partial/navbar.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Foto Profil</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-xs">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
              <div class="card bd-0">
                <div class="card-body">
                  <h5 class="tx-poppins tx-medium mg-b-15">Foto Profil Anda Saat Ini</h5>
                  <div class="row row-xs">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-between align-items-center">
                      <div class="media d-flex align-items-center">
                        <a href="#photoprofil" data-toggle="modal" data-animation="effect-scale">
                          <div class="avatar avatar-xxl">
                            <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt="">
                          </div>
                        </a>
                        <div class="media-body mg-l-20 mg-md-l-25">
                          <a href="#btn-filter" class="btn btn-white tx-poppins tx-medium d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="image-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Ubah Foto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
        <?php include "../partial/footer.php" ?>
      </div>
    </div>

    <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content pd-10 blur-transparent rounded-its-10">
          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-its-6 wd-100p" alt="">
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
