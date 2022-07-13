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
              <h4 class="tx-poppins tx-medium mg-b-0">Daftar Satuan</h4>
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#tambah-satuan" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-r-15" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah Satuan</a>
              <!-- <a href="#kegiatan-tambah" class="btn dropdown tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Filter</a> -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover table-borderless" style="width:100%">
                      <thead>
                        <tr>
                          <th class="table-its wd-10p">Kode Satuan</th>
                          <th class="table-its wd-30p">Uraian Satuan</th>
                          <th class="table-its wd-10p">Jenis Satuan</th>
                          <th class="table-its wd-10p">Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Bulan</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">Bulan</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">VOL</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Halaman</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">halaman</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">FREK</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Hari</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">hari</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">FREK</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Himpunen</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">kegiatan</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">VOL</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Kegiatan</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">kegiatan</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">FREK</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Komponen</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">modul</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">VOL</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Khdrn</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">kehadiran</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">VOL</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Lbr</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">lembar</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">VOL</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <!-- <a href="" class="btn btn-its-3 d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="tx-18"></ion-icon></a> -->
                            </div>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">Liter</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">liter</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">FREK</p>
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
    <div class="modal fade effect-scale" id="tambah-satuan" tabindex="-1" role="dialog" aria-labelledby="tambah-satuan" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Satuan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="kode-satuan" name="kode" placeholder="Kode Satuan" required>
                <label for="kode-satuan">Kode Satuan</label>
              </div>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="uraian-satuan" name="uraian" placeholder="Uraian Satuan" required>
                <label for="uraian-satuan">Uraian Satuan</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="jenis-satuan" name="jenis_satuan" aria-label="Floating label select example" required>
                  <option value="" selected>Pilih</option>
                  <option value="1">FREK</option>
                  <option value="2">VOL</option>
                </select>
                <label for="jenis-satuan">Jenis Satuan</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="edit-satuan" tabindex="-1" role="dialog" aria-labelledby="edit-satuan" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Satuan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="kode-satuan" name="kode" placeholder="Kode Satuan" value="Bulan" required>
                <label for="kode-satuan">Kode Satuan</label>
              </div>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="uraian-satuan" name="uraian" placeholder="Uraian Satuan" value="bulan" required>
                <label for="uraian-satuan">Uraian Satuan</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="jenis-satuan" name="jenis_satuan" aria-label="Floating label select example" required>
                  <option value="">Pilih</option>
                  <option value="1">FREK</option>
                  <option value="2" selected>VOL</option>
                </select>
                <label for="jenis-satuan">Jenis Satuan</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="hapus-satuan" tabindex="-1" role="dialog" aria-labelledby="hapus-satuan" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Satuan</h5>
            <p class="mg-b-0">Apakah Anda yakin akan menghapus satuan ini?</p>
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
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            lengthMenu: '_MENU_ data/halaman',
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
