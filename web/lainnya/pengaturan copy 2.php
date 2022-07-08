<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body>
    <?php include "../partial/navbar.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <a href="../beranda" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Pengaturan</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-xs">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="media d-flex align-items-start">
                  <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="moon" class="tx-20"></ion-icon></span></div>
                    <div class="media-body">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Mode gelap</p>
                      <p class="tx-13 tx-color-03">Tampilan nyaman untuk malam hari.</p>
                      <div class="dropdown dropdown-custom">
                        <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-tema" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tidak aktif
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-tema">
                          <a class="dropdown-item" href="#">Tidak aktif</a>
                          <a class="dropdown-item" href="#">Aktif</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="media d-flex align-items-start">
                    <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="language" class="tx-20"></ion-icon></span></div>
                    <div class="media-body">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Bahasa</p>
                      <p class="tx-13 tx-color-03">Pilih bahasa yang Anda gunakan.</p>
                      <div class="dropdown dropdown-custom">
                        <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-tema" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Bahasa Indonesia
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-tema">
                          <a class="dropdown-item" href="#">Bahasa Indonesia</a>
                          <a class="dropdown-item" href="#">English</a>
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
    
    <?php include "../partial/script.php" ?>
    <script>
      $(function(){
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()

        $('.df-example .btn-primary').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-secondary').tooltip({
          template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-success').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-danger').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })


      });
    </script>

  </body>
</html>
