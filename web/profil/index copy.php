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
        <div class="container pd-x-0 mn-ht-600" id="content">

          <div class="row row-xs">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
              <div class="card bd-0">
                <a href="#cover" data-toggle="modal" data-animation="effect-scale" class="pos-relative">
                  <img src="https://images.unsplash.com/photo-1475070929565-c985b496cb9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80" class="card-img-top ht-250" alt="..." style="object-fit: cover;">
                  <div class="dropdown pos-absolute t-10 r-10">
                    <a href="" class="dropdown-link btn btn-white btn-icon bdr-sp-50p" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right wd-200">
                      <!-- <a href="#member-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a> -->
                      <a href="#member-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="create-sharp" class="tx-18"></ion-icon></span></div> Edit Foto Profil</a>
                      <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="document-sharp" class="tx-18"></ion-icon></span></div> Buat CV</a>
                      <!-- <a href="#member-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a> -->
                    </div>
                  </div>
                </a>
                <div class="card-body pos-relative">
                  <div class="pos-absolute l-0 t--60 wd-100p d-flex justify-content-center">
                    <a href="#photoprofil" data-toggle="modal" data-animation="effect-scale" class="mg-b-20">
                      <div class="avatar avatar-xxl">
                        <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle shadow" alt="">
                      </div>
                    </a>
                  </div>
                  <div class="mg-t-35 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                      <h5 class="tx-poppins tx-semibold mg-b-0">Ghannie Wijaya</h5>
                      <p class="mg-b-0">Mahasiswa</p>
                    </div>
                  </div>
                  <hr class="bd-0">
                  <div class="d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-sp-icon tx-poppins tx-medium mg-r-5 active">Ringkasan</button>
                    <button type="button" class="btn btn-sp-icon tx-poppins tx-medium mg-r-5">Tentang</button>
                    <button type="button" class="btn btn-sp-icon tx-poppins tx-medium">Portofolio</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-10">
              <div class="card bd-0">
                <div class="card-body">
                  <h5 class="tx-poppins tx-medium">Tentang</h5>
                  <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">SKEM</p>
                  <p class="tx-13 tx-color-03">Ajuan kegiatan dari portofolio yang kamu buat.</p>
                  <a class="btn btn-white tx-poppins tx-medium" href="#">Selengkapnya</a>
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
          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-its2 wd-100p" alt="">
          <!-- <a href="https://my.its.ac.id/sso/account" class="btn btn-white tx-poppins tx-semibold" target="_blank">Edit Foto Profil</a> -->
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="cover" tabindex="-1" role="dialog" aria-labelledby="cover" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-14 bg-white pd-10">
          <img src="https://images.unsplash.com/photo-1475070929565-c985b496cb9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80" class="rounded-its2 wd-100p" alt="">
          <!-- <a href="https://my.its.ac.id/sso/account" class="btn btn-white tx-poppins tx-semibold" target="_blank">Edit Cover</a> -->
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
