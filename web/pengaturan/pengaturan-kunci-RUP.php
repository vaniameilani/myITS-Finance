<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../assets/css/switch.css" rel="stylesheet">
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
              <h4 class="tx-poppins tx-medium mg-b-0">Pengaturan Kunci RUP</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <!-- <a href="#tambah-satuan" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-r-15" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah Satuan</a> -->
              <!-- DROPDOWN FILTER HARUSNYA -->
              <a href="#kegiatan-tambah" class="btn dropdown tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale" style="background-color: white; color: black; border: 1px solid #DADDE5;"><ion-icon name="lock-open" class="mg-y-1 tx-18 mg-r-10"></ion-icon>Status Kunci RUP<ion-icon name="chevron-down" class="mg-y-1 tx-18 mg-l-7"></ion-icon></a>
            </div>

            <div class="mg-b-10">
              <div class="card">
                <div class="card-body">
                    <p class="mg-b-0">Buka semua kunci RUP</p>
                    <!--UNTUK SWITCHES -->
                </div>
              </div> 
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover table-borderless" style="width:100%">
                      <thead>
                        <tr>
                          <th class="table-its wd-10p">Kode Unit</th>
                          <th class="table-its wd-30p">Nama Unit</th>
                          <th class="table-its wd-10p">Set Kunci</th>
                          <th class="table-its wd-10p">Status</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">1</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">ITS</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb1" type="checkbox" onclick="Switch1()">
                              <label class="tgl-btn" for="cb1"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb1-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb1-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>                            
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">11</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">REKTORAT</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                            <input class="tgl tgl-ios" id="cb2" type="checkbox" checked onclick="Switch2()">
                            <label class="tgl-btn" for="cb2"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb2-c" style="color: #7987A1; font-weight: 500; display:none">Tertutup</p>
                            <p class="mg-b-0" id="outcb2-o" style="color: #10B759; font-weight: 600; display:block">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">111</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL REKTOR DAN PEMBANTU REKTOR</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                               <input class="tgl tgl-ios" id="cb3" type="checkbox" unchecked onclick="Switch3()">
                              <label class="tgl-btn" for="cb3"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb3-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb3-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">1111</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">REKTOR</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb4" type="checkbox" unchecked onclick="Switch4()">
                              <label class="tgl-btn" for="cb4"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb4-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb4-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">111100000</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL REKTOR</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb5" type="checkbox" unchecked onclick="Switch5()">
                              <label class="tgl-btn" for="cb5"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb5-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb5-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">111200000</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL WR I</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb6" type="checkbox" unchecked onclick="Switch6()">
                              <label class="tgl-btn" for="cb6"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb6-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb6-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">111300000</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL WR II</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb7" type="checkbox" unchecked onclick="Switch7()">
                              <label class="tgl-btn" for="cb7"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb7-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb7-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">111400000</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL WR III</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb8" type="checkbox" unchecked onclick="Switch8()">
                              <label class="tgl-btn" for="cb8"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb8-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb8-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">111500000</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL WR IV</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb9" type="checkbox" unchecked onclick="Switch9()">
                              <label class="tgl-btn" for="cb9"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb9-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb9-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
                          </td>
                        </tr>

                        <tr class="bd-b">
                          <td class="table-its">
                            <p class="mg-b-0">112100000</p>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0">OPERASIONAL SEKRETARIS INSTITUT</p>
                          </td>
                          <td class="table-its">                            
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-start">
                              <input class="tgl tgl-ios" id="cb10" type="checkbox" unchecked onclick="Switch10()">
                              <label class="tgl-btn" for="cb10"></label>
                            </div>
                          </td>
                          <td class="table-its">
                            <p class="mg-b-0" id="outcb10-c" style="color: #7987A1; font-weight: 500; display:block">Tertutup</p>
                            <p class="mg-b-0" id="outcb10-o" style="color: #10B759; font-weight: 600; display:none">Terbuka</p>
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
    <script>
      function Switch1(){
        var checkBox = document.getElementById("cb1");
        var textc = document.getElementById("outcb1-c");
        var texto = document.getElementById("outcb1-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch2(){
        var checkBox = document.getElementById("cb2");
        var textc = document.getElementById("outcb2-c");
        var texto = document.getElementById("outcb2-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch3(){
        var checkBox = document.getElementById("cb3");
        var textc = document.getElementById("outcb3-c");
        var texto = document.getElementById("outcb3-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch4(){
        var checkBox = document.getElementById("cb4");
        var textc = document.getElementById("outcb4-c");
        var texto = document.getElementById("outcb4-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch5(){
        var checkBox = document.getElementById("cb5");
        var textc = document.getElementById("outcb5-c");
        var texto = document.getElementById("outcb5-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch6(){
        var checkBox = document.getElementById("cb6");
        var textc = document.getElementById("outcb6-c");
        var texto = document.getElementById("outcb6-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch7(){
        var checkBox = document.getElementById("cb7");
        var textc = document.getElementById("outcb7-c");
        var texto = document.getElementById("outcb7-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch8(){
        var checkBox = document.getElementById("cb8");
        var textc = document.getElementById("outcb8-c");
        var texto = document.getElementById("outcb8-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch9(){
        var checkBox = document.getElementById("cb9");
        var textc = document.getElementById("outcb9-c");
        var texto = document.getElementById("outcb9-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    <script>
      function Switch10(){
        var checkBox = document.getElementById("cb10");
        var textc = document.getElementById("outcb10-c");
        var texto = document.getElementById("outcb10-o");
          if (checkBox.checked == true){
          textc.style.display = "none";
          texto.style.display = "block";
          } else {
          textc.style.display = "block";
          texto.style.display = "none";
          }
        }   
    </script>
    
    

  </body>
</html>
