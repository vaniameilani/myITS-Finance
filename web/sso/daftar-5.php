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
                  <div class="card-body bd-0 pd-t-0">
                    <div class="pd-y-25 pd-x-10 rounded-its-10 bd mg-b-20">
                      <div class="d-flex justify-content-center mg-b-15">
                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-its-icon tx-color-its-3"><ion-icon name="checkmark-circle" class="tx-30"></ion-icon></span></div>
                      </div>
                      <p class="text-center mg-b-0">Akun Anda berhasil dibuat. Silakan masuk.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <a href="index.php" class="btn btn-its-3 tx-poppins tx-medium">Masuk</a>
                    </div>
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
