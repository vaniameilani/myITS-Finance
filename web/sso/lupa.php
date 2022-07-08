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
                      <h5 class="tx-poppins tx-medium mg-b-0">Lupa Kata Sandi</h5>
                      <p class="tx-13 tx-color-03 mg-b-0">Cari akun Anda.</p>
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
                    <form action="lupa-2.php">
                      <div class="form-group form-floating">
                        <input type="text" class="form-control" id="myits-id" name="nama" placeholder="myITS ID" required>
                        <label for="myits-id">myITS ID</label>
                      </div>
                      <div class="d-flex justify-content-end align-items-center">
                        <a type="button" href="index.php" class="btn btn-its-custom-1 tx-poppins tx-medium mg-r-5">Kembali</a>
                        <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Selanjutnya</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="pos-fixed t-40 r-15 z-index-10" style="width: auto;">
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <ion-icon name="warning" class="tx-orange tx-20 mg-r-5"></ion-icon>
                  <p class="tx-medium mg-b-0">Akun Tidak Ditemukan</p>
                  <p class="mg-b-0">myITS ID yang Anda masukkan tidak ada.</p>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer-sso.php" ?>
    
    <?php include "../partial/script.php" ?>

    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>

  </body>
</html>
