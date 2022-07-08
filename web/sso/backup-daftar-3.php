<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <style>
      body {
        background-image: url("../../assets/img/background-sso.svg");
        background-position: center top; 
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      /* The message box is shown when the user clicks on the password field */
      #message {
        display:none;
      }
    </style>
  </head>
  <body>

    <div class="content pd-0" style="position: relative">

      <div class="content-body mg-t-30">
        <div class="container pd-x-0" id="content">

          <div class="row row-sm">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-40">
              <div class="d-flex justify-content-center">
                <div class="d-flex align-items-center">
                  <img src="../../assets/img/myITS-SSO.svg" class="wd-35 wd-md-45 mg-r-10 mg-md-r-15">
                  <div class="d-flex align-items-center">
                    <p class="tx-poppins tx-medium tx-white tx-18 tx-md-20 mg-b-0">myITS SSO</p>
                    <p class="tx-12 tx-color-03 mg-b-0 mg-l-10">1.0.0</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h5 class="tx-poppins tx-medium tx-white text-center mg-b-20">Registrasi Akun</h5>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mg-b-20">
              <a href="#">
                <div class="card bd-0 card-hover">
                  <div class="card-header bd-0 pd-10">
                    <div class="rounded-its-10 pd-y-30 d-flex justify-content-center align-items-center" style="background-color: rgb(88 172 150 / 22%) !important;"><img src="../../assets/img/myITS-Admission.svg" class="wd-60"></div>
                  </div>
                  <div class="card-body pd-t-10">
                    <p class="tx-poppins tx-medium tx-color-01 tx-15 mg-b-0 mg-md-b-5">Calon Mahasiswa</p>
                    <p class="tx-color-02 ht-50 ht-md-100">Registrasi sebagai calon mahasiswa untuk keperluan penggunaan myITS Admission</p>
                    <div class="d-flex justify-content-start d-flex align-items-center" style="color: #248d85;">
                      <span class="tx-poppins tx-medium mg-r-5">Registrasi</span>
                      <ion-icon name="arrow-forward" class="tx-15"></ion-icon>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mg-b-20">
              <a href="#">
                <div class="card bd-0 card-hover">
                  <div class="card-header bd-0 pd-10">
                    <div class="rounded-its-10 pd-y-30 d-flex justify-content-center align-items-center" style="background-color: rgb(255 192 0 / 22%) !important;"><img src="../../assets/img/myITS-Wali.svg" class="wd-60"></div>
                  </div>
                  <div class="card-body pd-t-10">
                    <p class="tx-poppins tx-medium tx-color-01 tx-15 mg-b-0 mg-md-b-5">Wali</p>
                    <p class="tx-color-02 ht-50 ht-md-100">Keterangan</p>
                    <div class="d-flex justify-content-start d-flex align-items-center" style="color: #ff7f00;">
                      <span class="tx-poppins tx-medium mg-r-5">Registrasi</span>
                      <ion-icon name="arrow-forward" class="tx-15"></ion-icon>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mg-b-20">
              <a href="daftar-alumni.php">
                <div class="card bd-0 card-hover">
                  <div class="card-header bd-0 pd-10">
                    <div class="rounded-its-10 pd-y-30 d-flex justify-content-center align-items-center" style="background-color: rgb(209 209 209 / 22%) !important;"><img src="../../assets/img/myITS-Services.svg" class="wd-60"></div>
                  </div>
                  <div class="card-body pd-t-10">
                    <p class="tx-poppins tx-medium tx-color-01 tx-15 mg-b-0 mg-md-b-5">Alumni</p>
                    <p class="tx-color-02 ht-50 ht-md-100">Registrasi sebagai alumni untuk keperluan penggunaan myITS Services</p>
                    <div class="d-flex justify-content-start d-flex align-items-center" style="color: #9b9b9b;">
                      <span class="tx-poppins tx-medium mg-r-5">Registrasi</span>
                      <ion-icon name="arrow-forward" class="tx-15"></ion-icon>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <p class="text-center tx-white mg-b-0">Sudah punya akun? <a href="index.php" class="tx-poppins tx-medium tx-white">Masuk sekarang.</a></p>
            </div>

          </div><!-- row -->
        </div><!-- container -->
        <div class="d-none d-lg-block">
          <div class="container pd-0 mg-b-0">
            <div class="d-flex align-items-center row row-xs mg-t-10">
              <div class="col-lg-10">
                <span class="tx-medium tx-white tx-13">Copyright &copy; 2022 Institut Teknologi Sepuluh Nopember</span>
              </div>
              <div class="col-lg-2 mg-lg-t-0 d-flex justify-content-end">
                  <img src="../../assets/img/advhum-white.png" height="60" class="mg-r-10">
              </div>
            </div>
          </div>
        </div>
        <div class="d-lg-none">
          <div class="container mg-b-0">
            <div class="d-flex align-items-center row row-x mg-t-20">
              <div class="col-lg-10 d-flex justify-content-center">
                <span class="tx-medium tx-white tx-13">Copyright &copy; 2022 Institut Teknologi Sepuluh Nopember</span>
              </div>
              <div class="col-lg-12 d-flex justify-content-center">
                  <img src="../../assets/img/advhum-white.png" height="60" class="mg-r-10">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>
    

  </body>
</html>
