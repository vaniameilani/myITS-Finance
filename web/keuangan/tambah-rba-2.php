<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <style>
      /* The message box is shown when the user clicks on the password field */
      #message {
        display:none;
      }
    </style>
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
              <a href="tambah-rba.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Tambah RBA</h4>
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
                  <div class="card-list-item">
                    <form>
                        <p class="mg-b-15" style="font-family: 'Poppins'; font-weight: 500; font-size: 18px;">Indikator Kinerja</p>
                        <div class="form-group form-floating">
                            <select class="form-select" id="indikator-emas" name="indikator_emas" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">Ranking ITS secara Internasional (QS-WUR)</option>
                                <option value="2">Rasio Jumlah Publikasi Bersama (Co-Authorship) Internasional Akumulatif / Jumlah Dosen</option>
                                <option value="3">Rasio Jumlah Mahasiswa Internasional / Jumlah Mahasiswa</option>
                                <option value="4">Rasio Jumlah Dosen Internasional / Jumlah Dosen</option>
                                <option value="5">Jumlah Program Studi Terakreditasi Internasional</option>
                                <option value="6">Rasio Jumlah Sitasi dari Publikasi Internasional Akumulatif / Jumlah Dosen</option>
                            </select>
                            <label for="indikator-emas">Indikator Emas</label>
                        </div>
                        <div class="form-group">
                            <div class="form-floating pos-relative">
                                <input type="text" class="form-control" id="indikator-kinerja" name="indikator_kinerja" placeholder="Aa" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="background-color: #ECEFF3;" disabled>
                                <label for="indikator-kinerja">Indikator Kinerja KPI</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-floating pos-relative">
                                <input type="text" class="form-control" id="indikator" name="indikator" placeholder="Aa" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="background-color: #ECEFF3;" disabled>
                                <label for="indikator">Indikator penghubung kinerja dengan anggaran</label>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="col-6 form-group">
                            <div class="form-floating pos-relative">
                                <input type="text" class="form-control" id="volume-output" name="volume_output" placeholder="Aa" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                <label for="volume-output">Volume Output</label>
                            </div>
                          </div>
                          <div class="col-6 form-group">
                            <div class="form-floating">
                              <select class="form-select" id="satuan-output" name="satuan_output" aria-label="Floating label select example" required>
                                  <option value="" selected>Pilih salah satu</option>
                                  <option value="1">Ranking ITS secara Internasional (QS-WUR)</option>
                                  <option value="2">Rasio Jumlah Publikasi Bersama (Co-Authorship) Internasional Akumulatif / Jumlah Dosen</option>
                              </select>
                              <label for="satuan-output">Satuan Output</label>
                            </div>
                          </div>
                        </div>
                        
                        <p class="mg-b-15" style="font-family: 'Poppins'; font-weight: 500; font-size: 18px;">Jadwal Kegiatan</p>
                        <div class="form-row">
                          <div class="col-4">
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Januari</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Februari</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Maret</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">April</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Mei</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Juni</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Juli</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Agustus</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">September</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Oktober</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">November</label>
                            </div>
                            <div class="custom-control custom-checkbox pd-b-5">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Desember</label>
                            </div>
                          </div>
                        </div>
                        <hr class="mg-y-8" style="border: 1px solid #DADDE5;">
                        <div class="custom-control custom-checkbox pd-b-5">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Pilih semua</label>
                        </div>

                        <div class="mg-t-20">
                          <a href="detail-rba.php" type="submit" class="btn btn-its-3 tx-poppins tx-medium float-right mg-r-10" data-animation="effect-scale">Simpan</a>
                          <a href="daftar-rba.php" type="button" class="btn btn-its-custom-1 tx-poppins tx-medium float-right mg-r-8" data-dismiss="modal">Batal</a>
                          <a href="tambah-rba-1.php" type="button" class="btn btn-its-custom-1 tx-poppins tx-medium float-left d-flex justify-content-center" data-animation="effect-scale" style="background-color: #F5F6FA;"><ion-icon name="arrow-back-outline" class="mg-y-1 tx-18 mg-r-10"></ion-icon>Sebelumnya</a>
                          <!-- <button onclick="history.back()" type="button" class="btn btn-its-custom-1 tx-poppins tx-medium float-left d-flex justify-content-center" data-dismiss="modal" data-animation="effect-scale" style="background-color: #F5F6FA;"><ion-icon name="arrow-back-outline" class="mg-y-1 tx-18 mg-r-10"></ion-icon>Sebelumnya</a> -->
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-5 col-xl-5 mg-b-10">
              <div class="card bd-0">
                <div class="card-body card-list">
                  <div class="card-list-item">
                    <form>
                        <p class="mg-b-15" style="font-family: 'Poppins'; font-weight: 500; font-size: 15px;">Daftar Indikator Emas</p>
                        <p>1. Ranking ITS secara Internasional (QS-WUR)</p>
                        <p>2. Rasio Jumlah Publikasi Bersama (Co-Authorship) Internasional Akumulatif / Jumlah Dosen</p>  
                        <p>3. Rasio Jumlah Mahasiswa Internasional / Jumlah Mahasiswa</p>
                        <p>4. Rasio Jumlah Dosen Internasional / Jumlah Dosen</p>
                        <p>5. Jumlah Program Studi Terakreditasi Internasional</p> 
                        <p>6. Rasio Jumlah Sitasi dari Publikasi Internasional Akumulatif / Jumlah Dosen</p>          
                        <!-- <a href="#kegiatan-tambah" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-r-10" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add-outline" class="mg-y-2 tx-18 mg-r-10"></ion-icon>Tambah RBA</a> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- <div class="pos-fixed t-80 r-15" style="width: auto;">
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <ion-icon name="checkmark-circle" class="tx-success tx-20 mg-r-5"></ion-icon>
                  <p class="tx-medium mg-b-0">Berhasil Diubah</p>
                  <p class="mg-b-0">Kata sandi Anda berhasil diubah.</p>
                </div>
              </div>
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <ion-icon name="warning" class="tx-orange tx-20 mg-r-5"></ion-icon>
                  <p class="tx-medium mg-b-0">Gagal</p>
                  <p class="mg-b-0">Kata sandi lama tidak cocok.</p>
                </div>
              </div>
            </div> -->

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>

    <script>
      $(".toggle-password-1").click(function() {

        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });
    </script>
    <script>
      $(".toggle-password-2").click(function() {

        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });
    </script>
    <script>
      $(".toggle-password-3").click(function() {

        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });
    </script>
    <script>
      function checkPasswordMatch() {
        var password = $("#password-field-2").val();
        var confirmPassword = $("#password-field-3").val();

        if (password != confirmPassword)
          $("#divCheckPasswordMatch").html("Kata sandi tidak cocok").removeClass('badge badge-danger-transparent').addClass('badge badge-danger-transparent');
        else if ((password ==  "") || (confirmPassword == "")) 
          $("#divCheckPasswordMatch").html("");
        else
          $("#divCheckPasswordMatch").html("Kata sandi cocok").removeClass('badge badge-danger-transparent').addClass('badge badge-success-transparent');
      }

      $(document).ready(function () {
        $("#password-field-2, #password-field-3").keyup(checkPasswordMatch);
      });
    </script>

    <script>
      var myInput = document.getElementById("password-field-2");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      // When the user clicks on the password field, show the message box
      myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
      }

      // When the user clicks outside of the password field, hide the message box
      myInput.onblur = function() {
        document.getElementById("message").style.display = "block";
      }

      // When the user starts to type something inside the password field
      myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {  
          letter.classList.remove("badge-danger-transparent");
          letter.classList.add("badge-success-transparent");
        } else {
          letter.classList.remove("badge-success-transparent");
          letter.classList.add("badge-danger-transparent");
        }
        
        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {  
          capital.classList.remove("badge-danger-transparent");
          capital.classList.add("badge-success-transparent");
        } else {
          capital.classList.remove("badge-success-transparent");
          capital.classList.add("badge-danger-transparent");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {  
          number.classList.remove("badge-danger-transparent");
          number.classList.add("badge-success-transparent");
        } else {
          number.classList.remove("badge-success-transparent");
          number.classList.add("badge-danger-transparent");
        }
        
        // Validate length
        if(myInput.value.length >= 8) {
          length.classList.remove("badge-danger-transparent");
          length.classList.add("badge-success-transparent");
        } else {
          length.classList.remove("badge-success-transparent");
          length.classList.add("badge-danger-transparent");
        }
      }
    </script>
    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>

  </body>
</html>
