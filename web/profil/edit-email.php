<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    <?php include "../partial/navbar.php"?>
    <?php include "../partial/mahasiswa-menu-sidebar.php"?>
    <?php include "../partial/mahasiswa-menu-sidebar-monitor.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Email</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">
            
            <div class="col-12 col-sm-12 col-md-10 col-lg-7 col-xl-7 mg-b-10">
              <div class="card bd-0">
                <div class="card-body card-list">
                  <div class="d-flex align-items-center justify-content-between mg-b-15">
                    <h5 class="tx-poppins tx-medium mg-b-0">Email Utama</h5>
                    <a href="#email-edit" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="pencil" class="mg-y-2 tx-18"></ion-icon></a>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-poppins tx-medium tx-color-01 mg-b-0">5116100048@mhs.if.its.ac.id</p>
                    <span class="badge badge-success-transparent tx-11">Terverifikasi</span>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-poppins tx-medium tx-color-01 mg-b-0">5116100048@mhs.if.its.ac.id  <span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="#verifikasi-email" class="badge badge-its-link-3 tx-poppins tx-medium tx-14" data-toggle="modal" data-animation="effect-scale"> Verifikasi </a> </p>
                    <span class="badge badge-orange-transparent tx-11">Perlu verifikasi</span>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-13 tx-color-03 mg-b-0">Anda belum menambahkan email</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-7 col-xl-7 mg-b-10">
              <div class="card bd-0">
                <div class="card-body card-list">
                  <div class="d-flex align-items-center justify-content-between mg-b-15">
                    <h5 class="tx-poppins tx-medium mg-b-0">Email ITS</h5>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-poppins tx-medium tx-color-01 mg-b-0">5116100048@mhs.if.its.ac.id</p>
                  <p class="tx-13 tx-color-03 mg-b-0">Email resmi dari ITS</p>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>

    <div class="modal fade effect-scale" id="email-edit" tabindex="-1" role="dialog" aria-labelledby="email-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Email</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="email-utama" name="email" placeholder="Email Anda" value="5116100048@mhs.if.its.ac.id" required>
                <label for="email-utama">Email Anda</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="verifikasi-email" tabindex="-1" role="dialog" aria-labelledby="verifikasi-email" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Verifikasi Email</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="email-utama" name="email" placeholder="Email Anda" required>
                <label for="email-utama">Masukkan Kode Verifikasi</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
