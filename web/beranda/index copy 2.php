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
        <div class="container pd-x-0 mn-ht-500" id="content">

          <div class="row row-xs">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 mg-sm-b-20 mg-lg-b-30 ht-200 ht-md-250">
              <div class="card bd-0 bg-white-6">
                <div class="card-body">
                  <div class="ht-250 ht-md-300 pd-y-30 pd-md-y-35">
                    <div class="d-flex justify-content-center align-items-center mg-b-15 mg-md-b-20">
                      <a href="#photoprofil" data-toggle="modal" data-animation="effect-scale" class="mg-r-15">
                        <div class="avatar avatar-xxl">
                          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle shadow" alt="">
                        </div>
                      </a>
                    </div>
                    <div class="text-center">
                      <h4 class="tx-poppins tx-medium mg-b-0 mg-md-b-5">Ghannie Wijaya</h4>
                      <p class="tx-15 mg-b-0">Mahasiswa</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-30 mg-t-25">
              <div class="row row-xs pd-x-10 pd-lg-x-30">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
                  <div class="card bd-0 pd-0 shadow">
                    <div class="card-body pd-5">
                      <form>
                        <div class="form-floating">
                          <input type="text" class="form-control" id="nama-berkas" placeholder="Nama berkas" required>
                          <label for="nama-berkas">Cari aplikasi...</label>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
              <div class="row row-xs">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-5">
                  <h5 class="tx-poppins tx-medium">Sering Dikunjungi</h5>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mg-b-10">
                  <div class="card bd-0">
                    <div class="card-body pos-relative">
                      <div class="btn btn-icon btn-sp-icon bdr-sp-50p pos-absolute t-5 l-5" data-toggle="tooltip" data-placement="bottom" title="Pengelolaan portofolio, SKEM hingga beasiswa."><i data-feather="info" class="tx-color-03"></i></div>
                      <div class="btn btn-icon btn-sp-icon bdr-sp-50p pos-absolute t-5 r-5" data-toggle="tooltip" data-placement="bottom" title="Favorit Anda"><i data-feather="star" class="tx-warning"></i></div>
                      <a href="../skem" class="">
                        <div class="d-flex justify-content-center align-items-center mg-b-20 pd-y-20">
                          <img src="../../assets/img/student-connect.svg" class="wd-55">
                        </div>
                        <p class="tx-poppins tx-medium tx-color-01 text-center mg-b-0 tx-15 crop-text-1">StudentConnect</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mg-b-10">
                  <div class="card bd-0">
                    <div class="card-body pos-relative">
                      <div class="btn btn-icon btn-sp-icon bdr-sp-50p pos-absolute t-5 l-5" data-toggle="tooltip" data-placement="bottom" title="Pengiriman antar kampus."><i data-feather="info" class="tx-color-03"></i></div>
                      <!-- <div class="btn btn-icon btn-sp-icon bdr-sp-50p pos-absolute t-5 r-5" data-toggle="tooltip" data-placement="bottom" title="Favorit Anda"><i data-feather="star" class="tx-warning"></i></div> -->
                      <a href="../skem" class="">
                        <div class="d-flex justify-content-center align-items-center mg-b-20 pd-y-20">
                          <img src="../../assets/img/expedition.svg" class="wd-55">
                        </div>
                        <p class="tx-poppins tx-medium tx-color-01 text-center mg-b-0 tx-15 crop-text-1">Kurir</p>
                      </a>
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
        <div class="modal-content tx-14 bg-white pd-10">
          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-its2 wd-100p mg-b-10" alt="">
          <a href="https://my.its.ac.id/sso/account" class="btn btn-white tx-poppins tx-semibold" target="_blank">Edit Foto Profil</a>
        </div>
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
