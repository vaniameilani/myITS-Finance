<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
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
              <h4 class="tx-poppins tx-medium mg-b-0">Sampul</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <h5 class="tx-poppins tx-medium mg-b-20">Sampul Halaman Beranda Semua Pengguna Portal myITS Saat Ini</h5>
                  <div class="rounded-its-6 pd-15 mg-b-10" style="background-image: url(../../assets/img/cover-beranda.svg); background-position: bottom center; background-size:cover;">
                    <div class="ht-350 pos-relative">
                      <div class="pd-10 pd-md-20">
                        <div class="avatar avatar-md mg-b-10">
                          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt="">
                        </div>
                        <p class="tx-poppins tx-medium tx-white tx-20 tx-md-24 mg-b-0">Selamat datang, Ghannie</p>
                        <p class="tx-white">Mahasiswa</p>
                      </div>
                      <div class="pos-absolute b-15 l-15">
                        <a type="button" href="daftar.php" class="btn btn-its-custom-2 tx-poppins tx-medium">Gunakan Sampul Bawaan</a>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <p class="tx-poppins tx-medium tx-15 mg-b-0">Atau, unggah sampul baru dari perangkat Anda</p>
                  <p class="tx-13 tx-color-03">Untuk mendapatkan hasil yang maksimal di semua perangkat, pastikan gambar yang diunggah berkualitas definisi tinggi (HD).</p>
                  <form>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Pilih berkas</label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                      <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Perbarui</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
