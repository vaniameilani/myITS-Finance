<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
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
  <body>

    <div class="content pd-0" style="position: relative">

      <div class="content-body mg-t-30">
        <div class="container pd-x-0" id="content">

          <div class="row row-sm">
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-4">
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <div class="d-flex justify-content-center mg-b-40 pd-y-10">
                <div class="d-flex align-items-center">
                  <img src="../../assets/img/myITS-SSO.svg" class="wd-35 wd-md-45 mg-r-10 mg-md-r-15">
                  <p class="tx-poppins tx-medium tx-white tx-18 tx-md-20 mg-b-0">myITS SSO</p>
                </div>
              </div>
              <div class="card card-body blur-transparent shadow rounded-its-10 wd-100p">
                <div class="mg-b-20">
                  <h5 class="tx-poppins tx-medium text-center mg-b-0">Daftar</h5>
                </div>
                <form action="daftar-2.php">
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                    <label for="nama">Nama Lengkap</label>
                  </div>
                  <div class="form-group form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <label for="email">Email</label>
                  </div>
                  <div class="form-group form-floating">
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
                    <label for="no_hp">Nomor HP</label>
                  </div>
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
                  <p class="tx-poppins tx-medium tx-15 text-center">Kelahiran</p>
                  <div class="form-group form-floating">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                    <label for="tgl_lahir">Tanggal Lahir</label>
                  </div>
                  <p class="tx-poppins tx-medium tx-15 text-center">Jenis Kelamin</p>
                  <div class="form-row">
                    <div class="col-6 form-group">
                      <label for="a">
                        <input type="radio" name="jk" class="radio-button-its-element" id="a" required>
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Laki-laki</span>
                          </div>
                      </label>
                    </div>
                    <div class="col-6 form-group">
                      <label for="b">
                        <input type="radio" name="jk" class="radio-button-its-element" id="b">
                          <div class="radio-button-its">
                            <div class="dot mg-r-10"></div>
                            <span>Perempuan</span>
                          </div>
                      </label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="index.php" class="tx-poppins tx-medium">Sudah punya akun? Masuk</a>
                    <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Daftar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-4">
            </div>
            <div class="col-12 mg-t-20">
              <p class="tx-white tx-13 mg-b-0 text-center">Copyright © <span id="thn"></span> Institut Teknologi Sepuluh Nopember</p>
            </div>

            <div class="pos-fixed t-40 r-15 z-index-10" style="width: auto;">
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body d-flex justify-content-start align-items-center">
                  <ion-icon name="close-circle" class="tx-danger tx-18 mg-r-5"></ion-icon>
                  Email sudah digunakan.
                </div>
              </div>
              <div class="toast mg-l-auto" data-autohide="false">
                <div class="toast-header">
                  <span class="mr-auto tx-poppins tx-medium tx-color-01">Notifikasi</span>
                  <small class="text-muted">Baru saja</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body d-flex justify-content-start align-items-center">
                  <ion-icon name="close-circle" class="tx-danger tx-18 mg-r-5"></ion-icon>
                  Nomor HP sudah digunakan.
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    
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
