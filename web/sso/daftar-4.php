<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head-sso.php"?>
    <style>
      body {
        background-image: url("../../assets/img/background-sso.svg");
        background-position: center top; 
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      /* The message box is shown when the user clicks on the password field */
      #message {
        display:none;
      }
    </style>
  </head>
  <body class="mn-ht-100v d-flex flex-column">

    <div class="content pd-0" style="position: relative">

      <div class="content-body mg-t-30">
        <div class="container pd-x-0" id="content">

          <div class="row row-sm">
            <div class="d-flex justify-content-center">
              <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5 pd-x-0">
                <div class="d-flex justify-content-center mg-b-40 pd-y-10">
                  <div class="d-flex align-items-center">
                    <img src="../../assets/img/logo-myits-white.svg" class="ht-25 ht-md-30 mg-t-5">
                    <p class="tx-poppins tx-medium tx-white tx-18 tx-md-22 tx-spacing-2 mg-b-0 mg-l-5 mg-md-l-10">SSO</p>
                    <p class="tx-12 tx-color-03 mg-b-0 mg-l-10">1.0.0</p>
                  </div>
                </div>
                <div class="card bd-0 shadow">
                  <div class="card-header bd-0 pd-md-y-20 d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="tx-poppins tx-medium mg-b-0">Buat Kata Sandi</h5>
                    </div>
                    <div class="dropdown dropdown-custom">
                      <button class="btn btn-its-custom-1 tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-region" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ID
                      </button>
                      <div class="dropdown-menu rounded-its-10 blur-transparent" aria-labelledby="dropdown-region">
                        <a class="dropdown-item" href="#">ID - Bahasa Indonesia</a>
                        <a class="dropdown-item" href="#">EN - English</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body bd-0 pd-t-0">
                    <div class="pd-y-25 pd-x-10 rounded-its-10 bd mg-b-20">
                      <div class="d-flex justify-content-center mg-b-15">
                        <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-its-icon tx-color-its-3"><ion-icon name="shield-checkmark" class="tx-30"></ion-icon></span></div>
                      </div>
                      <p class="text-center mg-b-0">Akun <span class="tx-medium">ganiwijaya@live.com</span> berhasil dikonfirmasi.</p>
                    </div>
                    <form action="lupa-4.php">
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
                      <button type="submit" class="btn btn-its-3 tx-poppins tx-medium float-right">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="pos-fixed t-40 r-15 z-index-10" style="width: auto;">
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <ion-icon name="warning" class="tx-orange tx-20 mg-r-5"></ion-icon>
                  <p class="tx-medium mg-b-0">Kata Sandi Tidak Sama</p>
                  <p class="mg-b-0">Silakan ulangi menulis kata sandi baru.</p>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer-sso.php" ?>
    
    <?php include "../partial/script.php" ?>

    <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
    </script>
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
    

  </body>
</html>
