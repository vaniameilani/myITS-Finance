<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head-sso.php"?>
    <style>
      body {
        background-image: url("../../assets/img/background-sso.svg");
        background-position: center top; 
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
  </head>
  <body class="mn-ht-100v d-flex flex-column">

    <div class="content pd-0" style="position: relative">

      <div class="content-body mg-t-30">
        <div class="container pd-x-0" id="content">

          <div class="row row-sm">
            <div class="d-flex justify-content-center">
              <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5 pd-x-0">
                <div class="d-flex justify-content-center mg-b-40 pd-y-10">
                  <div class="d-flex align-items-center">
                    <img src="../../assets/img/logo-myits-white.svg" class="ht-25 ht-md-30 mg-t-5">
                    <p class="tx-poppins tx-medium tx-white tx-18 tx-md-22 tx-spacing-2 mg-b-0 mg-l-5 mg-md-l-10">SSO</p>
                    <p class="tx-12 tx-color-03 mg-b-0 mg-l-10">1.0.0</p>
                  </div>
                </div>
                <div class="card bd-0 shadow">
                  <div class="card-header bd-0 pd-md-y-20 d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="tx-poppins tx-medium mg-b-0">Registrasi Akun</h5>
                      <p class="tx-13 tx-color-03 mg-b-0">Pilih salah satu</p>
                    </div>
                    <div class="dropdown dropdown-custom">
                      <button class="btn btn-its-custom-1 tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-region" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ID
                      </button>
                      <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-region">
                        <a class="dropdown-item" href="#">ID - Bahasa Indonesia</a>
                        <a class="dropdown-item" href="#">EN - English</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body bd-0 pd-y-0 pd-x-5 pd-md-x-10">
                    <a href="#" class="">
                      <div class="pd-x-10 pd-y-15 pd-md-y-20 rounded-its-10 hover-its-1">
                        <div class="media d-flex align-items-center">
                          <div class="rounded-its-50 ht-60 wd-60 d-flex justify-content-center align-items-center mg-r-15" style="background-color: rgb(88 172 150 / 15%) !important;"><img src="../../assets/img/icon-app/myITS-Admission.svg" class="wd-30"></div>
                          <div class="media-body">
                            <p class="tx-poppins tx-medium tx-15 mg-b-0">Calon Mahasiswa</p>
                            <p class="tx-13 tx-color-03 mg-b-0">Registrasi sebagai calon mahasiswa untuk keperluan penggunaan myITS Admission</p>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="">
                      <div class="pd-x-10 pd-y-15 pd-md-y-20 rounded-its-10 hover-its-1">
                        <div class="media d-flex align-items-center">
                          <div class="rounded-its-50 ht-60 wd-60 d-flex justify-content-center align-items-center mg-r-15" style="background-color: rgb(255 192 0 / 15%) !important;"><img src="../../assets/img/icon-app/myITS-Wali.svg" class="wd-30"></div>
                          <div class="media-body">
                            <p class="tx-poppins tx-medium tx-15 mg-b-0">Wali</p>
                            <p class="tx-13 tx-color-03 mg-b-0">Registrasi sebagai wali untuk keperluan penggunaan myITS Wali</p>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="daftar-alumni.php" class="">
                      <div class="pd-x-10 pd-y-15 pd-md-y-20 rounded-its-10 hover-its-1">
                        <div class="media d-flex align-items-center">
                          <div class="rounded-its-50 ht-60 wd-60 d-flex justify-content-center align-items-center mg-r-15" style="background-color: rgb(209 209 209 / 15%) !important;"><img src="../../assets/img/icon-app/myITS-Services.svg" class="wd-30"></div>
                          <div class="media-body">
                            <p class="tx-poppins tx-medium tx-15 mg-b-0">Alumni</p>
                            <p class="tx-13 tx-color-03 mg-b-0">Registrasi sebagai alumni untuk keperluan penggunaan myITS Services</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card-footer bd-0 pd-y-20">
                    <a href="index.php" role="button" class="btn btn-its-custom-2 tx-poppins tx-medium btn-block">Sudah punya akun? <span class="tx-semibold">Masuk sekarang</span></a>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer-sso.php" ?>
    
    <?php include "../partial/script.php" ?>
    

  </body>
</html>
