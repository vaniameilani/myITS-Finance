<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body>
    <?php include "../partial/navbar.php"?>

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

          <div class="row row-xs">
            
            <div class="col-12 col-sm-12 col-md-10 col-lg-7 col-xl-7 mg-b-10">
              <div class="card bd-0">
                <div class="card-body card-list">
                  <div class="d-flex align-items-center justify-content-between mg-b-15">
                    <h5 class="tx-poppins tx-medium mg-b-0">Ubah Kata Sandi</h5>
                  </div>
                  <div class="form-group form-floating">
                    <input type="password" name="psw1" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="sandi-lama" placeholder="Aa" required>
                    <label for="sandi-lama">Kata Sandi Lama</label>
                    <div class="custom-control custom-checkbox mg-t-10">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" onclick="psw1()">
                      <label class="custom-control-label" for="customCheck1">Tampilkan kata sandi</label>
                    </div>
                  </div>
                  <div class="form-group form-floating">
                    <input type="password" name="psw2" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="sandi-baru-1" placeholder="Aa" required>
                    <label for="sandi-baru-1">Kata Sandi Baru</label>
                  </div>
                  <div class="form-group form-floating">
                    <input type="password" name="psw3" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onChange="checkPasswordMatch();" id="sandi-baru-2" placeholder="Aa" required>
                    <label for="sandi-baru-2">Ulangi Kata Sandi Baru</label>
                    <div class="registrationFormAlert tx-13 mg-b-20 mg-t-5" id="divCheckPasswordMatch">
                  </div>
                  <button type="submit" id="btn" class="btn btn-its-3 tx-poppins tx-medium float-right">Simpan</button>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
        <?php include "../partial/footer.php" ?>
      </div>
    </div>

    <div class="modal fade effect-scale" id="email-edit" tabindex="-1" role="dialog" aria-labelledby="email-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Email Utama</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="email-utama" name="email" placeholder="Email Anda" value="5116100048@mhs.if.its.ac.id" required>
                <label for="email-utama">Email Anda</label>
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
    <div class="modal fade effect-scale" id="verifikasi-email" tabindex="-1" role="dialog" aria-labelledby="verifikasi-email" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Verifikasi Email</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="email-utama" name="email" placeholder="Email Anda" required>
                <label for="email-utama">Masukkan Kode Verifikasi</label>
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
    
    <?php include "../partial/script.php" ?>

    <script>
      function psw1() {
        var x = document.getElementById("sandi-lama");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      } 
    </script>
    <script>
      function checkPasswordMatch() {
        var password = $("#sandi-baru-1").val();
        var confirmPassword = $("#sandi-baru-2").val();

        if (password != confirmPassword)
          $("#divCheckPasswordMatch").html("Kata sandi tidak cocok").css('color', 'red');
        else if ((password ==  "") || (confirmPassword == "")) 
          $("#divCheckPasswordMatch").html("");
        else
          $("#divCheckPasswordMatch").html("Kata sandi cocok").css('color', 'green');
      }

      $(document).ready(function () {
        $("#sandi-baru-1, #sandi-baru-2").keyup(checkPasswordMatch);
      });
    </script>

  </body>
</html>
