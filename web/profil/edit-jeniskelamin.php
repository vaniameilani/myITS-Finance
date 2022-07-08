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
              <h4 class="tx-poppins tx-medium mg-b-0">Jenis Kelamin</h4>
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
                  <form>
                    <p class="tx-poppins tx-medium tx-15">Edit Jenis Kelamin</p>
                    <div class="form-row">
                      <div class="col-6 form-group">
                        <label for="a">
                          <input type="radio" name="jk" class="radio-button-its-element" id="a" required checked>
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <span>Laki-laki</span>
                            </div>
                        </label>
                      </div>
                      <div class="col-6 form-group">
                        <label for="b">
                          <input type="radio" name="jk" class="radio-button-its-element" id="b">
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <span>Perempuan</span>
                            </div>
                        </label>
                      </div>
                    </div>
                    <button type="submit" id="btn" class="btn btn-its-3 tx-poppins tx-medium float-right">Simpan Perubahan</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="pos-fixed t-80 r-15" style="width: auto;">
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
                  <p class="tx-medium mg-b-0">Berhasil Diubah</p>
                  <p class="mg-b-0">Jenis kelamin berhasil diubah.</p>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>
    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>

  </body>
</html>
