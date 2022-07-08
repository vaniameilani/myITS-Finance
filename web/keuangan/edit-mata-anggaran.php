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
              <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Edit Mata Anggaran</h4>
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
                        <div class="form-group form-floating">
                          <input type="text" class="form-control" id="induk-ma" name="induk" style="background-color: #ECEFF3;" placeholder="Induk MA" value="1157121131 - Piutang Kegiatan Pendidikan" disabled>
                          <label for="induk-ma">Induk MA</label>
                        </div>
                        <div class="form-group form-floating">
                          <input type="text" class="form-control" id="kode-ma" name="kode" placeholder="Kode MA" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="01" required>
                          <label for="kode-ma">Kode MA</label>
                        </div>
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" id="nama-ma" name="nama" placeholder="Nama MA" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="Piutang UKT D3" required>
                            <label for="nama-ma">Nama MA</label>
                        </div>
                        <div class="form-group form-floating">
                          <select class="form-select" id="saldo-normal" name="saldo" aria-label="Floating label select example" required>
                            <option value="">Pilih salah satu</option>
                            <option value="1" selected>Debet</option>
                          </select>
                          <label for="saldo-normal">Saldo Normal</label>
                        </div>
                        <div class="form-group form-floating">
                          <select class="form-select" id="jenis-akun" name="akun" aria-label="Floating label select example" required>
                            <option value="">Pilih salah satu</option>
                            <option value="1" >Mata Anggaran Kas</option>
                            <option value="2" selected>Mata Anggaran Penerimaan</option>
                            <option value="3" >Mata Anggaran Keluaran</option>
                            <option value="4" >Mata Anggaran Akuntasi Lainnya</option>
                          </select>
                          <label for="jenis-akun">Saldo Normal</label>
                        </div>
                        <div class="form-group form-floating">
                          <select class="form-select" id="kategori-ma" name="kategori" aria-label="Floating label select example" required>
                            <option value="">Pilih salah satu</option>
                            <option value="1" selected>Umum</option>
                          </select>
                          <label for="kategori-ma">Kategori MA</label>
                        </div>
                        <div class="form-row">
                            <div class="col-6 form-group">
                                <div class="form-group form-floating">
                                    <input type="text" class="form-control" id="kode-kegiatan-output" name="kode-output" placeholder="Kode Kegiatan Output" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="-" required>
                                    <label for="kode-kegiatan-output">Kode Kegiatan Output</label>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="form-floating pos-relative">
                                    <input type="text" class="form-control" id="sub-output" name="sub-output" placeholder="Kode sub_output.komponen" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="-" required>
                                    <label for="sub-output">Kode sub_output.komponen</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-floating">
                          <select class="form-select" id="kode-blu" name="kode-blu" aria-label="Floating label select example" required>
                            <option value="">Pilih salah satu</option>
                            <option value="1" selected>.........424114 - Pendapatan Jasa Pelayanan Pendidikan</option>
                          </select>
                          <label for="kode-blu">Kode BLU (RBA)</label>
                        </div>
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" id="casis-basis" name="casis" placeholder="Casis Basis Map" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="424112411104 Pendapatan UKT D3" required>
                            <label for="casis-basis">Casis Basis Map</label>
                        </div>
                        <div class="form-group form-floating">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Casis Basis Map" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="-" required></textarea>
                            <label for="keterangan">Keterangan</label>
                        </div>
                                     
                        <!-- NGGA BISA DISPASIIN ANTAR TOMBOLNYAA HIKS -->
                        <button type="submit" class="btn btn-its-3 tx-poppins tx-medium float-right mg-r-10">Simpan</button>
                        <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium float-right" data-dismiss="modal">Batal</button>
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
