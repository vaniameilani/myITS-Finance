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
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-20 mg-lg-b-20">
            <div class="d-flex align-items-center justify-content-start">
              <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Detail Mata Anggaran</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-body card-list">
                  <div class="card-list-item">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <h5 class="tx-poppins tx-medium">1133111 - Deposito Pertama</h5>
                        <!-- <span class="tx-13 tx-color-03">Diterbitkan oleh <span class="tx-medium">adminits</span> pada 15 Desember 2021</span> -->
                      </div>
                    </div>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-poppins tx-medium tx-15">Informasi <span class="tx-color-03 tx-12 mg-l-5">&bullet;</span> <a href="#verifikasi-email" class="badge badge-its-link-3 tx-poppins tx-medium tx-14" data-toggle="modal" data-animation="effect-scale"> Edit </a></p>
                    <div class="row row-xs">
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Induk MA </div>
                      <div class="col-8 col-md-9 mg-b-10"> 113311 - Deposito </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Saldo Normal </div>
                      <div class="col-8 col-md-9 mg-b-10"> Debet </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Jenis Akun </div>
                      <div class="col-8 col-md-9 mg-b-10"> Mata Anggaran Kas </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Kategori MA </div>
                      <div class="col-8 col-md-9 mg-b-10"> Umum </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Kode Kegiatan Output </div>
                      <div class="col-8 col-md-9 mg-b-10"> - </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Kode Sub_Output.Komponen </div>
                      <div class="col-8 col-md-9 mg-b-10"> - </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03"> Kode BLU (RBA) </div>
                      <div class="col-8 col-md-9 mg-b-10"> - </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Cash Basis Map </div>
                      <div class="col-8 col-md-9 mg-b-10"> - </div>
                      <div class="col-4 col-md-3 tx-13 tx-color-03 mg-b-10"> Keterangan </div>
                      <div class="col-8 col-md-9 mg-b-10"> - </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>

    <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <img src="https://www.its.ac.id/wp-content/uploads/2021/12/Program-Beasiswa-YTUB-723x1024.png" class="rounded-its-6 wd-100p" alt="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
