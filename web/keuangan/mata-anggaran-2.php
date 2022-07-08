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
              <h4 class="tx-poppins tx-medium mg-b-0">Daftar Mata Anggaran</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#kegiatan-tambah" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-r-15" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah Induk Mata Anggaran</a>
              <a href="#kegiatan-tambah" class="btn dropdown tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Filter</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover table-borderless" style="width:100%">
                      <thead>
                        <tr>
                          <!-- masih berantakannn aaaakh hiks -->
                          <th class="table-its wd-10p">Kode</th>
                          <th class="table-its wd-30p">Nama</th>
                          <th class="table-its wd-10p">Tipe Akun</th>
                          <th class="table-its wd-10p">AOP</th>
                          <th class="table-its wd-10p">Mapping Output</th>
                          <th class="table-its wd-20p">Kodemak</th>
                          <th class="table-its wd-10p">Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">113</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Investasi Jangka Pendek</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">11331</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Deposito Jangka Pendek</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">113311</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Deposito</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">111611.111</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Kas dan Setara Kas</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">D</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">1157</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Piutang dari Kegiatan Operasional</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">11572</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Piutang Pelayanan Pendidikan</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">115712.1131.01</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Piutang UKT D3</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">115712.1131.02</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Piutang UKT D4</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="tx-semibold mg-b-0" style="color: #1878F2;">115712.1131.03</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Piutang UKT S1</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">-</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>

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
    <script src="../../lib/select2/js/select2.min.js"></script>
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script>
      // ngatur buat halaman keduanya gimana nulisnyaa hikss
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            lengthMenu: '_MENU_ data/halaman',
            // pencariannya mau diganti ke sebelah kiri tapi ngga bisa hikss
            searchPlaceholder: 'Cari',
            sSearch: '',
            zeroRecords: 'Tidak ada data.',
            infoEmpty: 'Tidak ada data.',
            info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
            infoFiltered: '(filtered from _MAX_ total records)',
            paginate: { 'first': '<i class="fas fa-angle-double-left"></i>',
                        'last': '<i class="fas fa-angle-double-right"></i>',
                        'next': '<i class="fas fa-angle-right"></i>',
                        'previous': '<i class="fas fa-angle-left"></i>'
                      },
          },
          responsive: true,
          columnDefs: [
            { orderable: false, targets: -1 }
          ]
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
</html>
