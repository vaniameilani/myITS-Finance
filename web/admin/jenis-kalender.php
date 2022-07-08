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
              <h4 class="tx-poppins tx-medium mg-b-0">Jenis Kalender</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#jenis-tambah" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover table-borderless" style="width:100%">
                      <thead>
                        <tr>
                          <th class="table-its wd-10p">No</th>
                          <th class="table-its wd-60p">Jenis Kalender</th>
                          <th class="table-its wd-20p">Kadaluarsa</th>
                          <th class="table-its wd-10p"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">1</p>
                          </td>
                          <td class="table-its">
                            <p class="tx-medium mg-b-0">Kalender Akademik</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">31 Des 9999</p>
                          </td>
                          <td class="table-its">                            
                            <div class="dropdown">
                              <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                                <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                                <a href="#jenis-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                                <a href="#jenis-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                              </div>
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
    <div class="modal fade effect-scale" id="jenis-tambah" tabindex="-1" role="dialog" aria-labelledby="jenis-tambah" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Jenis Kalender</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-jenis-1" name="nama" placeholder="Nama Jenis Kalender" required>
                <label for="nama-jenis-1">Nama Jenis Kalender</label>
              </div>
              <div class="form-group form-floating">
                <input type="date" class="form-control" id="tgl-kadaluarsa-1" name="tgl" placeholder="Kadaluarsa" required>
                <label for="tgl-kadaluarsa-1">Kadaluarsa</label>
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
    <div class="modal fade effect-scale" id="jenis-edit" tabindex="-1" role="dialog" aria-labelledby="jenis-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Jenis Kalender</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-jenis-2" name="nama" placeholder="Nama Jenis Kalender" value="Kalender Akademik" required>
                <label for="nama-jenis-2">Nama Jenis Kalender</label>
              </div>
              <div class="form-group form-floating">
                <input type="date" class="form-control" id="tgl-kadaluarsa-2" name="tgl" placeholder="Kadaluarsa" value="9999-12-31" required>
                <label for="tgl-kadaluarsa-2">Kadaluarsa</label>
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
    <div class="modal fade effect-scale" id="jenis-hapus" tabindex="-1" role="dialog" aria-labelledby="jenis-hapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Jenis Kalender</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus jenis kalender ini?</p>
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
            searchPlaceholder: 'Cari',
            sSearch: '',
            lengthMenu: '_MENU_ data/halaman',
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
