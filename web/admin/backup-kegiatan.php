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
              <h4 class="tx-poppins tx-medium mg-b-0">Kegiatan</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#acara-tambah" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover table-borderless" style="width:100%">
                      <thead>
                        <tr>
                          <th class="table-its wd-10p">Tanggal</th>
                          <th class="table-its wd-30p">Nama Acara</th>
                          <th class="table-its wd-15p">Waktu</th>
                          <th class="table-its wd-20p">Lokasi</th>
                          <th class="table-its wd-15p">Kategori</th>
                          <th class="table-its wd-10p">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">2022/01/01</td>
                          <td class="table-its">
                            <p class="tx-medium mg-b-0 mg-b-0">Acara ku</p>
                          </td>
                          <td class="table-its">00:00 - 00:00</td>
                          <td class="table-its">Teknik Informatika</td>
                          <td class="table-its">
                            <span class="badge badge-success-transparent tx-12">Kategori</span>
                          </td>
                          <td class="table-its">                            
                            <div class="dropdown">
                              <a href="" data-toggle="dropdown" class="btn btn-icon pd-0">
                                <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="Menu"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                                <a href="#acara-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                                <a href="#acara-hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
    <div class="modal fade effect-scale" id="acara-tambah" tabindex="-1" role="dialog" aria-labelledby="acara-tambah" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Acara</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
            <p class="tx-poppins tx-medium">Informasi Acara</p>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-acara" name="nama" placeholder="Nama Acara" required>
                <label for="nama-acara">Nama Acara</label>
              </div>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" required>
                <label for="lokasi">Lokasi</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="kategori" name="kategori" aria-label="Floating label select example" required>
                  <option value="" selected>Pilih salah satu</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                  <option value="4">D</option>
                </select>
                <label for="kategori">Kategori</label>
              </div>
              <p class="tx-poppins tx-medium">Waktu Acara</p>
              <div class="form-group form-floating">
                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal Acara" required>
                <label for="tgl">Tanggal</label>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="jam-1" name="jam-1" placeholder="0" required>
                    <label for="jam-1">Jam Mulai</label>
                  </div>
                </div>
                <div class="form-group col-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="jam-2" name="jam-2" placeholder="0" required>
                    <label for="jam-2">Jam Selesai</label>
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
    <div class="modal fade effect-scale" id="acara-edit" tabindex="-1" role="dialog" aria-labelledby="acara-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Acara</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
            <p class="tx-poppins tx-medium">Informasi Acara</p>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-acara" name="nama" placeholder="Nama Acara" value="Acara ku" required>
                <label for="nama-acara">Nama Acara</label>
              </div>
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" value="Teknik Informatika" required>
                <label for="lokasi">Lokasi</label>
              </div>
              <div class="form-group form-floating">
                <select class="form-select" id="kategori" name="kategori" aria-label="Floating label select example" required>
                  <option value="">Pilih salah satu</option>
                  <option value="1" selected>A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                  <option value="4">D</option>
                </select>
                <label for="kategori">Kategori</label>
              </div>
              <p class="tx-poppins tx-medium">Waktu Acara</p>
              <div class="form-group form-floating">
                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal Acara" value="2022-01-01" required>
                <label for="tgl">Tanggal</label>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="jam-1" name="jam-1" placeholder="0" value="00:00" required>
                    <label for="jam-1">Jam Mulai</label>
                  </div>
                </div>
                <div class="form-group col-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" id="jam-2" name="jam-2" placeholder="0" value="00:00" required>
                    <label for="jam-2">Jam Selesai</label>
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
    <div class="modal fade effect-scale" id="acara-hapus" tabindex="-1" role="dialog" aria-labelledby="acara-hapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Acara</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus acara ini?</p>
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
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
</html>
