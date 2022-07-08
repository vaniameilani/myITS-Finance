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
                      <h5 class="tx-poppins tx-medium mg-b-0">Masuk</h5>
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
                    <p>Anda akan masuk ke halaman <span class="tx-medium">myITS Classroom</span>.</p>
                    <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">password</a>
                      </li>
                    </ul>
                    <form>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="form-group form-floating">
                            <input type="text" class="form-control" id="myits-id" name="nama" placeholder="myITS ID" required>
                            <label for="myits-id">myITS ID</label>
                          </div>
                          <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-its-3 tx-poppins tx-medium" onclick="passwordbtn()" id="btn-next" disabled>Selanjutnya</button>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                          <div class="pd-y-25 pd-x-10 rounded-its-10 bd mg-b-20">
                            <div class="d-flex justify-content-center mg-b-15">
                              <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-its-icon tx-color-its-3"><ion-icon name="log-in" class="tx-30"></ion-icon></span></div>
                            </div>
                            <p class="tx-13 mg-b-0 text-center">myITS ID</p>
                            <p class="tx-poppins tx-medium tx-18 text-center mg-b-0" id="myits-text"></p>
                          </div>
                          <div class="form-group">
                            <div class="form-floating pos-relative">
                              <input type="password" class="form-control" id="password-field" name="psw" placeholder="Aa" title="Isi kata sandi." oninvalid="this.setCustomValidity('Masukkan kata sandi')" required>
                              <label for="password-field">Kata Sandi</label>
                              <a href="#" toggle="#password-field" class="badge badge-its-link-3 tx-poppins tx-medium tx-14 pos-absolute t-20 r-15 toggle-password-2"> Lihat </a>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between align-items-center">
                            <a href="lupa.php" class="tx-poppins tx-medium">Lupa kata sandi</a>
                            <div>
                              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium mg-r-5" onclick="homebtn()">Kembali</button>
                              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Masuk</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
                  <p class="tx-medium mg-b-0">Gagal Masuk</p>
                  <p class="mg-b-0">myITS ID maupun kata sandi tidak cocok.</p>
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
      document.getElementById("myits-id").addEventListener("keyup", function() {
        var nameInput = document.getElementById('myits-id').value;
        if (nameInput != "") {
          document.getElementById('btn-next').removeAttribute("disabled");
        } else {
          document.getElementById('btn-next').setAttribute("disabled", null);
        }
      });
    </script>
    <script>
      function passwordbtn(){
        $('[href="#password"]').tab('show');
      }
      function homebtn(){
        $('[href="#home"]').tab('show');
      }
    </script>
    <script>
      $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        var $old_tab = $($(e.target).attr("href"));
        var $new_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() < $old_tab.index()){
          $old_tab.css('position', 'relative').css("right", "0").show();
          $old_tab.animate({"right":"-100%"}, 300, function () {
            $old_tab.css("right", 0).removeAttr("style");
          });
        }
        else {
          $old_tab.css('position', 'relative').css("left", "0").show();
          $old_tab.animate({"left":"-100%"}, 300, function () {
            $old_tab.css("left", 0).removeAttr("style");
          });
        }
      });

      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $new_tab = $($(e.target).attr("href"));
        var $old_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() > $old_tab.index()){
          $new_tab.css('position', 'relative').css("right", "-100px");
          $new_tab.animate({"right":"0"}, 500);
        }
        else {
          $new_tab.css('position', 'relative').css("left", "-100px");
          $new_tab.animate({"left":"0"}, 500);
        }
      });

      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // your code on active tab shown
      });
    </script>
    <script>
      $('#myits-id').keyup(function() {
        $("#myits-text").text($("#myits-id").val());
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

  </body>
</html>
