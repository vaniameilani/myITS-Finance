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
              <h4 class="tx-poppins tx-medium mg-b-0">Serapan Anggaran per MA</h4>
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
                            <select class="form-select" id="tahun-anggaran" name="tahun" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">2022</option>
                                <option value="2">2021</option>
                                <option value="3">2020</option>
                                <option value="4">2019</option>
                                <option value="5">2018</option>
                            </select>
                            <label for="tahun-anggaran">Tahun Anggaran</label>
                        </div>
                        <div class="form-group form-floating">
                            <select class="form-select" id="sumber-dana" name="dana" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">NON PNBP</option>
                                <option value="2">BPPTNBH</option>
                                <option value="3">APBN-K</option>
                                <option value="4">APBN</option>
                            </select>
                            <label for="sumber-dana">Sumber Dana</label>
                        </div>
                        <div class="form-group form-floating">
                            <select class="form-select" id="unit" name="unit" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">1 - ITS</option>
                                <option value="2">11 - REKTORAT</option>
                                <option value="3">111 - OPERASIONAL REKTOR DAN PEMBANTU REKTOR</option>
                                <option value="4">1111 - REKTOR</option>
                                <option value="5">111100000 - OPERASIONAL REKTOR</option>
                                <option value="6">111200000 - OPERASIONAL WR I</option>
                                <option value="7">111300000 - OPERASIONAL WR II</option>
                                <option value="8">111400000 - OPERASIONAL WR III</option>
                                <option value="9">111500000 - OPERASIONAL WR IV</option>
                                <option value="10">1151 - PERPUSTAKAAN</option>
                                <option value="11">1211 - BIRO SARANA DAN PRASARANA</option>
                                <option value="12">131900013 - ASRAMA ITS</option>
                                <option value="13">131900014 - BAHASA DAN BUDAYA ITS</option>
                                <option value="14">15 - FAKULTAS</option>
                                <option value="15">152340800 - S1 TEKNIK KIMIA</option>
                                <option value="16">152440900 - S1 TEKNIK FISIKA</option>
                                <option value="17">153341300 - S1 ARSITEKTUR</option>
                                <option value="18">153641600 - S1 TEKNIK GEOMATIKA</option>
                                <option value="19">154241800 - S1 TEKNIK PERKAPALAN</option>
                                <option value="20">152340802 - S2 TEKNIK KIMIA</option>
                            </select>
                            <label for="unit">Unit</label>
                        </div>
                        <div class="form-group form-floating">
                            <select class="form-select" id="coa" name="coa" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">Aset</option>
                                <option value="2">Aset Lancar</option>
                                <option value="3">Kas dan Setara Kas</option>
                                <option value="4">Kas di Bendahara Pengeluaran</option>
                                <option value="5">Kas dan Setara Kas</option>
                                <option value="6">Software Pembelajaran</option>
                                <option value="7">Kas Bendahara Pengeluaran Dana BPPTNBH</option>
                            </select>
                            <label for="coa">COA</label>
                        </div>
                        <div class="form-row">
                            <div class="col-6 form-group">
                                <div class="form-floating">
                                    <select class="form-select" id="bulan-mulai" name="bulan mulai" aria-label="Floating label select example" required>
                                        <option value="" selected>Pilih salah satu</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                    <label for="bulan-mulai">Periode Bulan Mei</label>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="form-floating">
                                    <select class="form-select" id="bulan-sampai" name="bulan sampai" aria-label="Floating label select example" required>
                                        <option value="" selected>Pilih salah satu</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                    <label for="bulan-sampai">Periode Bulan Sampai</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-floating">
                            <select class="form-select" id="layanan" name="layanan" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">Pendidikan</option>
                                <option value="2">Penelitian</option>
                                <option value="3">APPM</option>
                                <option value="4">Manajemen</option>
                            </select>
                            <label for="layanan">Layanan</label>
                        </div>
                        <div class="form-group form-floating">
                            <select class="form-select" id="format" name="format" aria-label="Floating label select example" required>
                                <option value="" selected>Pilih salah satu</option>
                                <option value="1">Plain HTML</option>
                                <option value="2">Microsoft Word Documentation</option>
                                <option value="3">Microsoft Excel Spreadsheet</option>
                            </select>
                            <label for="format">Format</label>
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
