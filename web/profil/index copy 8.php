<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body>
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
              <!-- <a href="../beranda" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a> -->
              <h4 class="tx-poppins tx-medium mg-b-0">Akun</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="row row-xs d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mg-b-30 mg-lg-b-0">
                      <div class="d-flex align-items-center">
                        <div class="pos-relative">
                          <a href="#photoprofil" data-toggle="modal" data-animation="effect-scale">
                            <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-its-10 wd-100 ht-100 wd-md-150 ht-md-150 shadow" alt="">
                          </a>
                          <!-- <div class="btn btn-icon btn-its-custom-2 tx-poppins tx-medium rounded-its-50p d-flex align-items-center pos-absolute b-5 l-5">
                            <ion-icon name="camera" class="mg-y-2 tx-18"></ion-icon>
                          </div> -->
                          <form method="post" class="pos-absolute b-10 l-10">
                            <label for="upload_image" class="mg-b-0">
                              <div class="btn btn-icon btn-its-custom-2 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" style="cursor: pointer;">
                                <ion-icon name="camera" class="mg-y-2 tx-18"></ion-icon>
                              </div>
                              <input type="file" name="image" class="image" id="upload_image" accept="image/*" style="display:none" />
                            </label>
                          </form>
                        </div>
                        <div class="mg-l-15 mg-md-l-20">
                          <p class="tx-poppins tx-medium tx-20 tx-md-24 mg-b-0">Ghannie Wijaya</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Mahasiswa</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                      <div class="row row-xs">
                        <div class="col-6 mg-b-20">
                          <p class="tx-medium mg-b-0">Ghannie Wijaya</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Nama Lengkap</p>
                        </div>
                        <div class="col-6 mg-b-20">
                          <p class="tx-medium mg-b-0">5116100048</p>
                          <p class="tx-13 tx-color-03 mg-b-0">myITS ID</p>
                        </div>
                        <div class="col-6">
                          <p class="tx-medium mg-b-0">081823456789</p>
                          <p class="tx-13 tx-color-03 mg-b-0">No. Ponsel</p>
                        </div>
                        <div class="col-6">
                          <p class="tx-medium mg-b-0">20 Maret 1998</p>
                          <p class="tx-13 tx-color-03 mg-b-0">Tanggal Lahir</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mg-b-10">
              <p class="tx-poppins tx-medium tx-16 mg-b-0">Kelola Akun</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-y-25 d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Nama Anda</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Atur cara Kami memanggil Anda.</p>
                  </div>
                  <img src="../../assets/img/name.svg" class="wd-35 ht-35">
                </div>
                <div class="card-body bd-0 pd-x-0 pd-t-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1 mg-b-5">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Gani</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Nama Panggilan</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Ghannie Wijaya</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Nama Lengkap</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-y-25 d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Kelahiran</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Kelola informasi pribadi.</p>
                  </div>
                  <img src="../../assets/img/birth.svg" class="wd-35 ht-35">
                </div>
                <div class="card-body bd-0 pd-x-0 pd-t-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1 mg-b-5">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">20 Maret 1998</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Tanggal Lahir</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Laki-laki</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Jenis Kelamin</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-y-25 d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Email</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Email utama dan cadangan.</p>
                  </div>
                  <img src="../../assets/img/email.svg" class="wd-35 ht-35">
                </div>
                <div class="card-body bd-0 pd-x-0 pd-t-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1 mg-b-5">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">ganiwijaya@live.com</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Email Utama</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Belum ditentukan</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Email Cadangan</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-y-25 d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Nomor Ponsel</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Nomor ponsel milik Anda.</p>
                  </div>
                  <img src="../../assets/img/phone.svg" class="wd-35 ht-35">
                </div>
                <div class="card-body bd-0 pd-x-0 pd-t-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1 d-flex align-items-center"> 081823456789 <span class="badge badge-success-transparent mg-l-5">Diverifikasi</span></p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Nomor Ponsel</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-y-25 d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Kata Sandi</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Ganti kata sandi secara berkala.</p>
                  </div>
                  <img src="../../assets/img/key.svg" class="wd-35 ht-35">
                </div>
                <div class="card-body bd-0 pd-x-0 pd-t-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-5 pd-sm-y-10 pd-sm-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Terakhir diubah 01/01/2020</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Kata Sandi</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
        <?php include "../partial/footer.php" ?>
      </div>
    </div>

    <div class="modal fade effect-scale" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Foto Profil</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <div class="modal-body">
            <!-- <div class="img-container">
              <div class="row row-xs">
                <div class="col-md-8">
                  <img src="" id="sample_image" />
                </div>
                <div class="col-md-4">
                  <div class="preview"></div>
                </div>
              </div>
            </div> -->
            <div class="img-container">
              <img src="" id="sample_image"/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
            <button type="button" id="crop" class="btn btn-its-3 tx-poppins tx-medium">Potong dan Simpan</button>
          </div>
        </div>
      </div>
    </div>			
    
    <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content pd-10 blur-transparent rounded-its-10">
          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-its-6 wd-100p" alt="">
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="foto-edit" tabindex="-1" role="dialog" aria-labelledby="foto-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Foto Profil</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" accept="image/png, image/jpeg, image/jpg" max-file-size="1024" required>
                  <label class="custom-file-label" for="customFile">Pilih berkas</label>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-start"><ion-icon name="information-circle" class="wd-20 ht-20"></ion-icon><span class="mg-l-5 tx-13">Anda dapat memilih berkas gambar dengan ukuran maksimal 1 Mb.</span></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="nama-edit" tabindex="-1" role="dialog" aria-labelledby="nama-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Nama Panggilan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-panggil" name="nama" placeholder="Nama panggil" value="Gani" required>
                <label for="nama-panggil">Nama Panggilan</label>
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
    <div class="modal fade effect-scale" id="file-upload" tabindex="-1" role="dialog" aria-labelledby="file-upload" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Perbarui Foto Profil</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">upload</a>
              </li>
            </ul>
          </div>
          <form>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="upload_image" accept="image/*" required>
                      <label class="custom-file-label" for="upload_image">Pilih berkas</label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-its-3 tx-poppins tx-medium" onclick="uploadbtn()" id="btn-select" disabled>Selanjutnya</button>
                </div>
              </div>
              <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                <div class="modal-body">
                  <div class="row row-xs">
                    <div class="col-md-8">
                      <img src="" id="sample_image" />
                    </div>
                    <div class="col-md-4">
                      <div class="preview"></div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                  <!-- <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Unggah</button> -->
                  <button type="button" id="crop" class="btn btn-its-3 tx-poppins tx-medium">Potong dan Simpan</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>
    <script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
    <script>
      function uploadbtn(){
        $('[href="#upload"]').tab('show');
      }
      function homebtn(){
        $('[href="#home"]').tab('show');
      }
      function tabbtn(){
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
          $new_tab.css('position', 'relative').css("right", "-2500px");
          $new_tab.animate({"right":"0"}, 500);
        }
        else {
          $new_tab.css('position', 'relative').css("left", "-2500px");
          $new_tab.animate({"left":"0"}, 500);
        }
      });

      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // your code on active tab shown
      });
    </script>
    <script>
    $( document ).ready(function() {
      $('#upload_image').on('change', function() {
        if(this.value == "")
            $('#btn-select').attr("disabled", true);
          else
            $('#btn-select').attr("disabled", false);
      });
    });
    </script>

    <script>

      $(document).ready(function(){

        var $modal = $('#modal');
        var image = document.getElementById('sample_image');
        var cropper;

        $('#upload_image').change(function(event){
          var files = event.target.files;
          var done = function(url){
            image.src = url;
            $modal.modal('show');
          };

          if(files && files.length > 0)
          {
            reader = new FileReader();
            reader.onload = function(event)
            {
              done(reader.result);
            };
            reader.readAsDataURL(files[0]);
          }
        });

        $modal.on('shown.bs.modal', function() {
          cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview:'.preview'
          });
        }).on('hidden.bs.modal', function(){
          cropper.destroy();
            cropper = null;
        });

        $('#crop').click(function(){
          canvas = cropper.getCroppedCanvas({
            width:400,
            height:400
          });

          canvas.toBlob(function(blob){
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function(){
              var base64data = reader.result;
              $.ajax({
                url:'upload.php',
                method:'POST',
                data:{image:base64data},
                success:function(data)
                {
                  $modal.modal('hide');
                  $('#uploaded_image').attr('src', data);
                }
              });
            };
          });
        });
        
      });
    </script>

  </body>
</html>
