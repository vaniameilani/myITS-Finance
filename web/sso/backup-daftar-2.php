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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="d-flex justify-content-center mg-b-40 pd-y-10">
                <div class="d-flex align-items-center">
                  <img src="../../assets/img/myITS-SSO.svg" class="wd-35 wd-md-45 mg-r-10 mg-md-r-15">
                  <p class="tx-poppins tx-medium tx-white tx-18 tx-md-20 mg-b-0">myITS SSO</p>
                </div>
              </div>
              <div class="card bd-0 blur-transparent shadow">
                <div class="card-header pd-y-20 bd-0">
                  <h5 class="tx-poppins tx-medium text-center mg-b-0">Daftar Sebagai</h5>
                </div>
                <div class="card-body pd-x-0 pd-t-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mg-b-20 mg-md-0">
                      <a href="#">
                        <div class="pd-10 rounded-its-10 hover-its-1 card-hover">
                          <div class="bg-white rounded-its-10 ht-70 wd-70 d-flex justify-content-center align-items-center mg-b-10 mg-md-b-20 shadow-base"><img src="../../assets/img/myITS-Admission.svg" class="wd-35"></div>
                          <p class="tx-poppins tx-medium tx-15 mg-b-0 mg-md-b-5">Calon Mahasiswa</p>
                          <p class="mg-b-30 mg-md-b-100">Registrasi sebagai calon mahasiswa untuk keperluan penggunaan myITS Admission</p>
                          <div class="d-flex justify-content-start d-flex align-items-center">
                            <span class="tx-poppins tx-medium mg-r-5">Registrasi</span>
                            <ion-icon name="arrow-forward" class="tx-15"></ion-icon>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mg-b-20 mg-md-0">
                      <a href="#">
                        <div class="pd-10 rounded-its-10 hover-its-1 card-hover">
                          <div class="bg-white rounded-its-10 ht-70 wd-70 d-flex justify-content-center align-items-center mg-b-10 mg-md-b-20 shadow-base"><img src="../../assets/img/myITS-Wali.svg" class="wd-35"></div>
                          <p class="tx-poppins tx-medium tx-15 mg-b-0 mg-md-b-5">Wali</p>
                          <p class="mg-b-30 mg-md-b-100">Registrasi sebagai calon mahasiswa untuk keperluan penggunaan myITS Wali</p>
                          <div class="d-flex justify-content-start d-flex align-items-center">
                            <span class="tx-poppins tx-medium mg-r-5">Registrasi</span>
                            <ion-icon name="arrow-forward" class="tx-15"></ion-icon>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                      <a href="#">
                        <div class="pd-10 rounded-its-10 hover-its-1 card-hover">
                          <div class="bg-white rounded-its-10 ht-70 wd-70 d-flex justify-content-center align-items-center mg-b-10 mg-md-b-20 shadow-base"><img src="../../assets/img/myITS-Services.svg" class="wd-35"></div>
                          <p class="tx-poppins tx-medium tx-15 mg-b-0 mg-md-b-5">Alumni</p>
                          <p class="mg-b-30 mg-md-b-100">Registrasi sebagai alumni untuk keperluan penggunaan myITS Services</p>
                          <div class="d-flex justify-content-start d-flex align-items-center">
                            <span class="tx-poppins tx-medium mg-r-5">Registrasi</span>
                            <ion-icon name="arrow-forward" class="tx-15"></ion-icon>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mg-t-20">
              <p class="tx-white tx-13 mg-b-0 text-center">Copyright © <span id="thn"></span> Institut Teknologi Sepuluh Nopember</p>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>
    

  </body>
</html>
