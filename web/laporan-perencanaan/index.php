<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <!-- <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet"> -->
    <!-- <link href="../../assets/css/dashforge.css" rel="stylesheet"> -->
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
              <!-- <a href="../beranda" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a> -->
              <h4 class="tx-poppins tx-medium mg-b-0">Menu Laporan</h4>
            </div>
            <div>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Cari..." title="Type in a category"><!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
      <div class="row">
        <ul id="myMenu" class="list-unstyled">
          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="../keuangan/mata-anggaran.php" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/approve-rup.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Laporan RUP Draft</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>
          
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/icon-app/Manajemen-SK.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Pagu Tahunan</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
          </div> 

          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/approve-rup.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Laporan RUP Final</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>
          
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/monitoring.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Dashboard Monitoring</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>            
          </div> 

          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/approve-rup.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Laporan RUP Monev</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>
          
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/monitoring.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Serapan Pagu Unit</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
          </div> 
          
          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="../keuangan/daftar-rba.php" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/icon-app/Manajemen-SK.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Efektivitas Anggaran</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>
          
            <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/monitoring.svg"" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Serapan Anggaran per MAK</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Terima Alokasi</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
          </div> 

          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li class=><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/icon-app/Manajemen-SK.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Diagram Efektivitas Anggaran</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>
          
            <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/monitoring.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Serapan Anggaran per Kegiatan</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
          </div> 

          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/icon-app/Manajemen-SK.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Rekapitulasi RKAT</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>

            <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/monitoring.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Serapan Anggaran per MA</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
          </div> 

          <div class="media align-items-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5">
              <div class="card bd-0 mg-b-10 mg-md-b-20 wd-500">
                <li><a href="https://google.com" >
                  <div class="rounded-its-10 hover-its-1">
                    <div class="media align-items-center">
                      <div class="card-header bd-0 pd-md-y-20">
                       <img src="../../assets/img/finance/rba.svg" class="wd-50 mg-r-15" alt="">
                      </div>
                      <div class="card-header bd-0 pd-md-y-20">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">RBA Detail</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan . . .</p>
                      </div> 
                    </div>
                  </div>
                </li></a>
              </div>
            </div>
          
        </ul>
      </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <div class="modal fade effect-scale" id="kegiatan-edit" tabindex="-1" role="dialog" aria-labelledby="kegiatan-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Kegiatan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
          <div class="modal-body">
              <p class="tx-poppins tx-medium">Informasi Kegiatan</p>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-kegiatan" name="nama" placeholder="Nama Kegiatan" value="Masa Perkuliahan dan Evaluasi" required>
                <label for="nama-kegiatan">Nama Kegiatan</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="jenis-kalender" name="jenis_kalender" aria-label="Floating label select example" required>
                  <option value="">Pilih</option>
                  <option value="1" selected>Kalender Akademik</option>
                </select>
                <label for="jenis-kalender">Jenis Kalender</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="jenis-kegiatan" name="jenis_kegiatan" aria-label="Floating label select example" required>
                  <option value="">Pilih</option>
                  <option value="1" selected>Perkuliahan</option>
                </select>
                <label for="jenis-kegiatan">Jenis Kegiatan</label>
              </div>
              <p class="tx-poppins tx-medium">Tanggal</p>
              <div class="form-row">
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-tgl-awal" name="tgl_awal" aria-label="Floating label select example" required>
                      <option value="">Pilih</option>
                      <option value="0">Tidak ditentukan</option>
                      <option value="7" selected>7</option>
                    </select>
                    <label for="edit-tgl-awal">Tanggal</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-bln-awal" name="bln_awal" aria-label="Floating label select example" required>
                      <option value="">Pilih</option>
                      <option value="2" selected>Februari</option>
                    </select>
                    <label for="edit-bln-awal">Bulan</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-thn-awal" name="thn_awal" aria-label="Floating label select example" required>
                      <option value="">Pilih</option>
                      <option value="2022" selected>2022</option>
                    </select>
                    <label for="edit-thn-awal">Tahun</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12">
                  <p class="tx-poppins tx-medium mg-b-0">Berakhir pada (Opsional)</p>
                  <p class="tx-color-03 tx-13">Hanya untuk kegiatan yang berlangsung lebih dari 1 hari.</p>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-tgl-akhir" name="tgl_akhir" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="0">Tidak ditentukan</option>
                      <option value="17" selected>17</option>
                    </select>
                    <label for="edit-tgl-akhir">Tanggal</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-bln-akhir" name="bln_akhir" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="6" selected>Juni</option>
                    </select>
                    <label for="edit-bln-akhir">Bulan</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group form-floating">
                    <select class="form-select" id="edit-thn-akhir" name="thn_akhir" aria-label="Floating label select example">
                      <option value="">Pilih</option>
                      <option value="2022" selected>2022</option>
                    </select>
                    <label for="edit-thn-akhir">Tahun</label>
                  </div>
                </div>
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
    <div class="modal fade effect-scale" id="kegiatan-hapus" tabindex="-1" role="dialog" aria-labelledby="kegiatan-hapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Kegiatan</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus kegiatan ini?</p>
          </div>
          <form>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>
    <script>
      function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
         }
        }   
      }
    </script>

  </body>
</html>
