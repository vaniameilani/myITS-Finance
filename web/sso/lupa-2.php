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
      /* The message box is shown when the user clicks on the password field */
      #message {
        display:none;
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
                      <p class="tx-13 tx-color-03 mg-b-0">Pilih cara untuk mereset kata sandi Anda</p>
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
                        <div class="avatar avatar-lg"><img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt=""></div>
                      </div>
                      <p class="tx-poppins tx-medium tx-15 text-center mg-b-0">Ghannie Wijaya</p>
                    </div>
                    <form action="daftar-2.php">
                      <div class="form-group">
                        <label for="a">
                          <input type="radio" name="reset" class="radio-button-its-element" id="a" oninvalid="this.setCustomValidity('Masukkan kata sandi')" required>
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <div>
                                <p class="tx-poppins tx-medium tx-15 mg-b-0">Kirim kode melalui Email</p>
                                <p class="mg-b-0">ganiw*****@live.com</p>
                              </div>
                            </div>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="b">
                          <input type="radio" name="reset" class="radio-button-its-element" id="b">
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <div>
                                <p class="tx-poppins tx-medium tx-15 mg-b-0">Kirim kode melalui SMS</p>
                                <p class="mg-b-0">*********4699</p>
                              </div>
                            </div>
                        </label>
                      </div>
                      <div class="d-flex justify-content-end align-items-center">
                        <a type="button" href="lupa.php" class="btn btn-its-custom-1 tx-poppins tx-medium mg-r-5">Kembali</a>
                        <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Selanjutnya</button>
                      </div>
                    </form>
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
