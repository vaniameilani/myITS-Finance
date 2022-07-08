<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <style>
      body {
        background-image: url("../../assets/img/background-landingpage.svg");
        background-position: center top; 
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
  </head>
  <body class="mn-ht-100v d-flex flex-column">

    <div class="content pd-0" style="position: relative">

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <div class="row row-sm">
            <div class="col-12 ht-250 ht-md-400 ht-xxl-750 d-flex align-items-center">
              <div>
                <div class="d-flex align-items-center mg-b-20">
                  <img src="../../assets/img/portal.svg" class="wd-45 mg-r-15">
                  <p class="tx-poppins tx-medium tx-white tx-18 tx-md-20 mg-b-0">Portal myITS</p>
                </div>
                <h3 class="tx-poppins tx-white tx-32 tx-md-36 tx-xl-40 mg-b-10 mg-lg-b-10 mg-l-5">Selamat datang di <br><span class="tx-semibold">Portal myITS</span></h3>
                <h5 class="tx-white mg-b-35 mg-l-5 tx-14 tx-md-18">Eksplorasi ITS di sini.</h5>
                <a href="../sso" class="btn btn-its-3 tx-poppins tx-medium"> Masuk</a>
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
