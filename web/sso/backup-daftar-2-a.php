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
    </style>
  </head>
  <body>

    <div class="content pd-0" style="position: relative">

      <div class="content-body mg-t-30">
        <div class="container pd-x-0" id="content">

          <div class="row row-sm">
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-4">
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <div class="d-flex justify-content-center mg-b-40 pd-y-10">
                <div class="d-flex align-items-center">
                  <img src="../../assets/img/myITS-SSO.svg" class="wd-35 wd-md-45 mg-r-10 mg-md-r-15">
                  <p class="tx-poppins tx-medium tx-white tx-18 tx-md-20 mg-b-0">myITS SSO</p>
                </div>
              </div>
              <div class="card card-body blur-transparent shadow rounded-its-10 wd-100p">
                <div class="mg-b-20">
                  <h5 class="tx-poppins tx-medium text-center mg-b-0">Pendaftaran Akun</h5>
                </div>
                <div class="pd-15 rounded-its-10 bg-white bd">
                  <div class="d-flex justify-content-center">
                    <img src="../../assets/img/email-new.svg" class="wd-65 wd-md-75 mg-b-15">
                  </div>
                  <p class="text-center mg-b-0">Sebuah tautan telah dikirim ke email Anda</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-4">
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
