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
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Kata Sandi</h4>
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
                      <p class="tx-poppins tx-medium tx-15">Kata Sandi Saat Ini</p>
                      <div class="form-group">
                        <div class="form-floating pos-relative">
                          <input type="password" class="form-control" id="password-field-1" name="psw-1" placeholder="Aa" required>
                          <label for="password-field-1">Kata Sandi Lama</label>
                          <a href="#" toggle="#password-field-1" class="badge badge-its-link-3 tx-poppins tx-medium tx-14 pos-absolute t-20 r-15 toggle-password-1"> Lihat </a>
                        </div>
                      </div>
                      <p class="tx-poppins tx-medium tx-15">Buat Kata Sandi Baru</p>
                      <div class="form-group">
                        <div class="form-floating pos-relative">
                          <input type="password" class="form-control" id="password-field-2" name="psw-2" placeholder="Aa" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus terdiri dari 8 karakter huruf kecil, huruf besar dan angka." required>
                          <label for="password-field-2">Kata Sandi Baru</label>
                          <a href="#" toggle="#password-field-2" class="badge badge-its-link-3 tx-poppins tx-medium tx-14 pos-absolute t-20 r-15 toggle-password-2"> Lihat </a>
                        </div>
                        <div id="message" class="mg-t-5">
                          <span id="letter" class="badge badge-danger-transparent tx-12">Huruf kecil</span>
                          <span id="capital" class="badge badge-danger-transparent tx-12">Huruf besar</span>
                          <span id="number" class="badge badge-danger-transparent tx-12">Angka</span>
                          <span id="length" class="badge badge-danger-transparent tx-12">Minimal 8 karakter</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-floating pos-relative">
                          <input type="password" class="form-control" id="password-field-3" name="psw-3" placeholder="Aa" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                          <label for="password-field-3">Ulangi Kata Sandi Baru</label>
                          <a href="#" toggle="#password-field-3" class="badge badge-its-link-3 tx-poppins tx-medium tx-14 pos-absolute t-20 r-15 toggle-password-3"> Lihat </a>
                        </div>
                        <div class="mg-b-20 mg-t-5">
                          <div class="badge badge-danger-transparent tx-12" id="divCheckPasswordMatch"></div>
                        </div>
                      </div>
                      <button type="submit" id="btn" class="btn btn-its-3 tx-poppins tx-medium float-right">Simpan Perubahan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="pos-fixed t-80 r-15" style="width: auto;">
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
            </div>

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
