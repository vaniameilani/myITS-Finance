<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <style>
      .crop-text-1 {
        -webkit-line-clamp: inherit;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
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
          <div class="row row-sm">
            <div class="col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
              <div class="card bd-0" style="background-image: url(../../assets/img/cover-beranda.svg); background-position: bottom center; background-size:cover;">
                <div class="card-body ht-350 pos-relative">
                  <div class="pd-10 pd-md-20">
                    <div class="avatar avatar-md mg-b-10">
                      <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt="">
                    </div>
                    <p class="tx-poppins tx-medium tx-white tx-20 tx-md-24 mg-b-0">Selamat datang, Ghannie</p>
                    <p class="tx-white">Mahasiswa</p>
                  </div>
                  <div class="pos-absolute b-40 l-40">
                    <a href="../profil">
                      <p class="tx-poppins tx-medium tx-white mg-b-0 d-flex align-items-center">Kelola Akun <ion-icon name="arrow-forward" class="mg-l-5 tx-18 mg-b-2"></ion-icon></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mg-b-10">
              <p class="tx-poppins tx-medium tx-16 mg-b-0">Jelajahi</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
              <div class="card bd-0 mg-b-10 mg-md-b-20">
                <div class="card-header bd-0 pd-md-y-20 d-flex justify-content-start align-items-center">
                  <img src="../../assets/img/apps.svg" class="wd-20 mg-r-15">
                  <h5 class="tx-poppins tx-medium mg-b-0">Aplikasi dan Layanan</h5>
                </div>
                <div class="card-body ht-md-200 bd-0 pd-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                          <div class="media d-flex align-items-center">
                            <img src="../../assets/img/myITS-Academics.svg" class="wd-40 mg-r-15" alt="">
                            <div class="media-body crop-text-1">
                              <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Academics</p>
                              <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                          <div class="media d-flex align-items-center">
                            <img src="../../assets/img/myITS-Classroom.svg" class="wd-40 mg-r-15" alt="">
                            <div class="media-body crop-text-1">
                              <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Classroom</p>
                              <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                          <div class="media d-flex align-items-center">
                            <img src="../../assets/img/myITS-Presensi.svg" class="wd-40 mg-r-15" alt="">
                            <div class="media-body crop-text-1">
                              <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Presensi</p>
                              <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                          <div class="media d-flex align-items-center">
                            <img src="../../assets/img/myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                            <div class="media-body crop-text-1">
                              <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">StudentConnect</p>
                              <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                          <div class="media d-flex align-items-center">
                            <img src="../../assets/img/app-office365.svg" class="wd-40 mg-r-15" alt="">
                            <div class="media-body crop-text-1">
                              <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Office 365</p>
                              <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="#app-fav" data-toggle="modal" data-animation="effect-scale">
                        <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                          <div class="media d-flex align-items-center">
                            <span class="wd-40 ht-40 rounded-circle bg-black-1 tx-color-01 mg-r-15 d-flex justify-content-center align-items-center"><ion-icon name="pencil" class="tx-22"></ion-icon></span>
                            <div class="media-body crop-text-1">
                              <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Edit Favorit</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-footer bd-0">
                  <a href="#app-all" data-toggle="modal" data-animation="effect-scale" role="button" class="btn btn-its-custom-1 tx-poppins tx-medium btn-block">Lihat Semua Aplikasi</a>
                </div>
              </div>
              <div class="card bd-0 mg-b-10 mg-md-b-20">
                <div class="card-header bd-0 pd-md-t-20 pd-md-b-15 d-flex justify-content-start align-items-center">
                  <img src="../../assets/img/calendar-2.svg" class="wd-20 mg-r-15">
                  <h5 class="tx-poppins tx-medium mg-b-0">Agenda</h5>
                </div>
                <div class="card-body bd-0 pd-0">
                  <div class="row row-xs pd-x-10 pd-sm-x-15">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="#">
                        <div class="pd-5 rounded-its-10 hover-its-1">
                          <img src="https://www.its.ac.id/wp-content/uploads/2021/12/Program-Beasiswa-YTUB-723x1024.png" class="wd-100p ht-150 rounded-its-10" alt="" style="object-fit: cover;">
                          <div class="pd-x-10 pd-y-15 ht-150">
                            <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Sabtu, 5 Feb 2022</span>
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-5 crop-text-2" title="Program Beasiswa : Yayasan Tunas Unggul Bangsa (YTUB)">Program Beasiswa : Yayasan Tunas Unggul Bangsa (YTUB)</p>
                            <p class="tx-13 tx-medium tx-color-03 mg-b-0">00.00 - 00.00</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Institut Teknologi Sepuluh Nopember</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="#">
                        <div class="pd-5 rounded-its-10 hover-its-1">
                          <img src="https://www.its.ac.id/wp-content/uploads/2021/12/MOTIP-04-724x1024.jpeg" class="wd-100p ht-150 rounded-its-10" alt="" style="object-fit: cover;">
                          <div class="pd-x-10 pd-y-15 ht-150">
                            <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Sabtu, 5 Feb 2022</span>
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-5 crop-text-2" title="MOTIP 04 : Konferensi Internasional ke-4 tentang Manajemen Teknologi, Inovasi dan Proyek">MOTIP 04 : Konferensi Internasional ke-4 tentang Manajemen Teknologi, Inovasi dan Proyek</p>
                            <p class="tx-13 tx-medium tx-color-03 mg-b-0">00.00 - 00.00</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Institut Teknologi Sepuluh Nopember</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mg-b-10">
                      <a href="#">
                        <div class="pd-5 rounded-its-10 hover-its-1">
                          <img src="https://www.its.ac.id/wp-content/uploads/2021/12/IconBEM-724x1024.png" class="wd-100p ht-150 rounded-its-10" alt="" style="object-fit: cover;">
                          <div class="pd-x-10 pd-y-15 ht-150">
                            <span class="badge badge-its-3-transparent tx-poppins tx-semibold tx-12 mg-b-5">Selasa, 21 Des 2021</span>
                            <p class="tx-poppins tx-medium tx-color-01 mg-b-5 crop-text-2" title="Departemen Manajemen Bisnis : Konferensi Internasional ke-3 tentang Bisnis dan Teknik Manajemen">Departemen Manajemen Bisnis : Konferensi Internasional ke-3 tentang Bisnis dan Teknik Manajemen</p>
                            <p class="tx-13 tx-medium tx-color-03 mg-b-0">00.00 - 00.00</p>
                            <p class="tx-13 tx-color-03 mg-b-0 crop-text-1">Institut Teknologi Sepuluh Nopember</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-footer bd-0">
                  <a href="../agenda" role="button" class="btn btn-its-custom-1 tx-poppins tx-medium btn-block">Lihat Semua Agenda</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
              <div class="card bd-0 mg-b-10 mg-md-b-20">
                <div class="card-header bd-0 pd-md-y-20 d-flex justify-content-start align-items-center">
                  <img src="../../assets/img/calendar-3.svg" class="wd-20 mg-r-15">
                  <h5 class="tx-poppins tx-medium mg-b-0">Kalender</h5>
                </div>
                <div class="card-body bd-0 pd-y-0">
                  <div class="row row-xs">
                    <div class="col-5 col-sm-4 col-md-3 col-lg-6 col-xl-5">
                      <div class="pd-x-15 pd-y-20 rounded-its-10 text-center shadow mg-b-5" style="background-color: #26B4FF; background-image: linear-gradient(to bottom right, #26B4FF, #108EE8);">
                        <h4 class="tx-poppins tx-white mg-b-0">Rabu</h4>
                        <h1 class="tx-poppins tx-white tx-66 mg-b-0">9</h1>
                        <p class="tx-poppins tx-medium tx-16 tx-white mg-b-0">Maret</p>
                        <p class="tx-poppins tx-white mg-b-0">2022</p>
                      </div>
                    </div>
                    <div class="col-7 col-sm-8 col-md-9 col-lg-6 col-xl-7 pos-relative">
                      <div id="carouselExample2" class="carousel slide pd-l-5" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Masa Perkuliahan dan Evaluasi</p>
                            <p class="tx-13 tx-medium tx-color-03 mg-b-20">7 Feb 2022 - 17 Jun 2022<span class="badge badge-orange-transparent tx-poppins tx-semibold tx-12 mg-l-5">Revisi</span></p>
                            <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender Akademik</span>
                            <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Perkuliahan</span>
                          </div>
                          <div class="carousel-item">
                            <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Pelaporan PDDIKTI data Master Mahasiswa</p>
                            <p class="tx-13 tx-medium tx-color-03 mg-b-20">1 Mar 2022 - 30 Mar 2022</p>
                            <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender Akademik</span>
                            <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Lain-lain</span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-start align-items-center pos-absolute b-0 r-0">
                        <a class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5" href="#carouselExample2" role="button" data-slide="prev">
                          <ion-icon name="chevron-back" class="mg-y-2 tx-18"></ion-icon>
                        </a>
                        <a class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" href="#carouselExample2" role="button" data-slide="next">
                          <ion-icon name="chevron-forward" class="mg-y-2 tx-18"></ion-icon>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bd-0">
                  <a href="#kalender-list" data-toggle="modal" data-animation="effect-scale" role="button" class="btn btn-its-custom-1 tx-poppins tx-medium btn-block">Lihat Semua Kalender</a>
                </div>
              </div>
              <div class="card bd-0 mg-b-10 mg-md-b-20">
                <div class="card-header bd-0 pd-md-t-20 pd-md-b-10 d-flex justify-content-start align-items-center">
                  <img src="../../assets/img/announcement.svg" class="wd-20 mg-r-15">
                  <h5 class="tx-poppins tx-medium mg-b-0">Pengumuman</h5>
                </div>
                <div class="card-body bd-0 pd-0">
                  <div class="row row-xs pd-x-10">
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Pemeliharaan Sistem</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Sistem akan dinonaktifkan pada hari Sabtu pukul 23.00 - selesai. Mohon maaf atas ketidaknyamanannya.</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Pemeliharaan Sistem</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Sistem akan dinonaktifkan pada hari Sabtu pukul 23.00 - selesai. Mohon maaf atas ketidaknyamanannya.</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-12">
                      <a href="#">
                        <div class="pd-y-10 pd-x-10 rounded-its-10 hover-its-1">
                          <p class="tx-poppins tx-medium mg-b-0 crop-text-1">Pemeliharaan Sistem</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-2">Sistem akan dinonaktifkan pada hari Sabtu pukul 23.00 - selesai. Mohon maaf atas ketidaknyamanannya.</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-footer bd-0">
                  <a href="../pengumuman" role="button" class="btn btn-its-custom-1 tx-poppins tx-medium btn-block">Lihat Semua Pengumuman</a>
                </div>
              </div>
            </div>
            
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>
    
    <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content pd-10 blur-transparent rounded-its-10">
          <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-its-6 wd-100p mg-b-10" alt="">
          <a href="../profil" class="btn btn-its-custom-1 tx-poppins tx-medium btn-block">Edit Foto Profil</a>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="app-all" tabindex="-1" role="dialog" aria-labelledby="app-all" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Semua Aplikasi</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <div class="modal-body pd-0">
            <div class="pd-15">
              <div class="form-floating">
                <input type="text" class="form-control" id="search1" name="search" placeholder="Cari..." onkeyup="filter1()">
                <label for="search1">Cari...</label>
              </div>
            </div>
            <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-5 pd-md-x-10" style="overflow-y: auto;">
              <div class="row row-xs">
                <div class="col-12">
                  <p class="tx-poppins tx-medium tx-15 pd-10 mg-b-0">Aplikasi Anda</p>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/pddikti.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Cek PDDIKTI</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Academics.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Academics</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Courier.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Courier</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Office.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Office</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Classroom.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Classroom</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Presensi.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Presensi</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">StudentConnect</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/dev-myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1"><span class="badge badge-warning tx-poppins tx-semibold mg-r-5">DEV</span>StudentConnect</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1"><span class="badge badge-info tx-poppins tx-semibold mg-r-5">BETA</span>StudentConnect</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/si-prestasi.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SI Prestasi</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Marketplace.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Kewirausahaan</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Dorm.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Dorm</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Vote.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Vote</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SIMARU.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIMARU</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-MoU.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">MoU</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Archive.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Archive</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SIM-ORMAWA.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM ORMAWA</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/K3L.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Halo K3L</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SIM-PKM.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM PKM</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SIM-Beasiswa.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIMBEA</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-LSP.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">LSP</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SIPMABA.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIPMABA</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/skem-lama.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SKEM Lama</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SPMI.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SPMI</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/E-Aset.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">E-Aset</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Graduation.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Graduation</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SECMAN.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Security Management</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/FiskalITS.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM FISKAL</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <p class="tx-poppins tx-medium tx-15 pd-10 mg-b-0">Layanan</p>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/internet.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Akses Internet</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/myITS-Printing.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Printing</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/Service-Desk.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Service Desk</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/Survey.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Survey</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/OTP.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">One Time Password</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/SIMDOM.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIMDOM</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/Webinar.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Webinar Booking</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/app-office365.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Office 365</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/app-azure.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Microsoft Azure</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/app-teams.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Microsoft Teams</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/app-gdrive.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Google Drive</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                  <a href="https://google.com" target="_blank">
                    <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                      <div class="media d-flex align-items-center">
                        <img src="../../assets/img/app-gmail.svg" class="wd-40 mg-r-15" alt="">
                        <div class="media-body crop-text-1">
                          <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Mailbox Mahasiswa</p>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">Keterangan aplikasi di sini.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="app-fav" tabindex="-1" role="dialog" aria-labelledby="app-fav" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Favorit</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-0">
              <div class="pd-15">
                <div class="form-floating">
                  <input type="text" class="form-control" id="search2" name="search" placeholder="Cari..." onkeyup="filter2()">
                  <label for="search2">Cari...</label>
                </div>
              </div>
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15 pd-y-15 mg-b-5">Pilih Aplikasi</p>
                <div class="checkbox-its">
                  <div class="label-its mg-b-10 target2">
                    <input type="checkbox" id="checkboxOne" value="App" checked>
                    <label for="checkboxOne">
                      <img src="../../assets/img/E-AsetPersediaan.svg" class="ht-30 mg-l-5 mg-r-20">
                      <p class="tx-poppins tx-medium crop-text-1 mg-b-0" title="E-Aset">E-Aset</p>
                    </label>
                  </div>
                  <div class="label-its mg-b-10 target2">
                    <input type="checkbox" id="checkboxTwo" value="App">
                    <label for="checkboxTwo">
                      <img src="../../assets/img/Manajemen-SK.svg" class="ht-30 mg-l-5 mg-r-20">
                      <p class="tx-poppins tx-medium crop-text-1 mg-b-0" title="Manajemen SK">Manajemen SK</p>
                    </label>
                  </div>
                  <div class="label-its mg-b-10 target2">
                    <input type="checkbox" id="checkboxThree" value="App">
                    <label for="checkboxThree">
                      <img src="../../assets/img/myITS-IP.svg" class="ht-30 mg-l-5 mg-r-20">
                      <p class="tx-poppins tx-medium crop-text-1 mg-b-0" title="IP">IP</p>
                    </label>
                  </div>
                </div>
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
    <div class="modal fade effect-scale" id="kalender-list" tabindex="-1" role="dialog" aria-labelledby="kalender-list" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Kalender</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <div class="modal-body pd-0">
            <ul class="nav nav-line pd-x-15" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link tx-poppins tx-medium d-flex align-items-center active" id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true"><ion-icon name="today" class="mg-b-2 mg-r-10"></ion-icon>Kegiatan Hari Ini</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tx-poppins tx-medium d-flex align-items-center" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false"><ion-icon name="search" class="mg-b-2 mg-r-10"></ion-icon> Cari</a>
              </li>
            </ul>
            <div class="tab-content bd bd-gray-300 bd-0" id="myTabContent">
              <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab">
                <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-15" style="overflow-y: auto;">
                  <p class="tx-poppins tx-medium tx-15 mg-b-10">Rabu, 9 Maret 2022</p>
                  <div class="pd-15 bd rounded-its-10 mg-b-10">
                    <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Masa Perkuliahan dan Evaluasi</p>
                    <p class="tx-13 tx-medium tx-color-03 mg-b-20">7 Feb 2022 - 17 Jun 2022<span class="badge badge-orange-transparent tx-poppins tx-semibold tx-12 mg-l-5">Revisi</span></p>
                    <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender Akademik</span>
                    <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Perkuliahan</span>
                  </div>
                  <div class="pd-15 bd rounded-its-10 mg-b-10">
                    <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Pelaporan PDDIKTI data Master Mahasiswa</p>
                    <p class="tx-13 tx-medium tx-color-03 mg-b-20">1 Mar 2022 - 30 Mar 2022</p>
                    <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender Akademik</span>
                    <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Lain-lain</span>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-15" style="overflow-y: auto;">
                  <form action="#">
                    <div class="form-row">
                      <div class="col-12">
                        <p class="tx-poppins tx-medium tx-15">Tanggal Mulai</p>
                      </div>
                      <div class="col-4 form-group">
                        <div class="form-floating">
                          <select class="form-select" id="tanggal-1" name="tanggal-1" aria-label="Floating label select example" required>
                            <option value="4" selected>4</option>
                          </select>
                          <label for="tanggal-1">Tanggal</label>
                        </div>
                      </div>
                      <div class="col-4 form-group">
                        <div class="form-floating">
                          <select class="form-select" id="bulan-1" name="bulan-1" aria-label="Floating label select example" required>
                            <option value="3" selected>Maret</option>
                          </select>
                          <label for="bulan-1">Bulan</label>
                        </div>
                      </div>
                      <div class="col-4 form-group">
                        <div class="form-floating">
                          <select class="form-select" id="tahun-1" name="tahun-1" aria-label="Floating label select example" required>
                            <option value="2022" selected>2022</option>
                          </select>
                          <label for="tahun-1">Tahun</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <p class="tx-poppins tx-medium tx-15">Tanggal Selesai</p>
                      </div>
                      <div class="col-4 form-group">
                        <div class="form-floating">
                          <select class="form-select" id="tanggal-2" name="tanggal-2" aria-label="Floating label select example" required>
                            <option value="4" selected>4</option>
                          </select>
                          <label for="tanggal-2">Tanggal</label>
                        </div>
                      </div>
                      <div class="col-4 form-group">
                        <div class="form-floating">
                          <select class="form-select" id="bulan-2" name="bulan-2" aria-label="Floating label select example" required>
                            <option value="3" selected>Maret</option>
                          </select>
                          <label for="bulan-2">Bulan</label>
                        </div>
                      </div>
                      <div class="col-4 form-group">
                        <div class="form-floating">
                          <select class="form-select" id="tahun-2" name="tahun-2" aria-label="Floating label select example" required>
                            <option value="2022" selected>2022</option>
                          </select>
                          <label for="tahun-2">Tahun</label>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Cari</button>
                    </div>
                  </form>
                  <hr class="bd-0">
                  <p class="tx-poppins tx-medium tx-15 mg-b-10">Hasil Pencarian</p>
                  <div class="pd-15 bd rounded-its-10 mg-b-10">
                    <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Pelaporan PDDIKTI data Master Mahasiswa</p>
                    <p class="tx-13 tx-medium tx-color-03 mg-b-20">1 Mar 2022 - 30 Mar 2022</p>
                    <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender Akademik</span>
                    <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Lain-lain</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>
    <script>
      $(function(){
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()

        $('.df-example .btn-primary').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-secondary').tooltip({
          template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-success').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })

        $('.df-example .btn-danger').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        })


      });
    </script>
    <script>
      function filter1() {
        var input = document.getElementById("search1");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target1');

        for (i = 0; i < nodes.length; i++) {
          if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "block";
          } else {
            nodes[i].style.display = "none";
          }
        }
      }
    </script>
    <script>
      function filter2() {
        var input = document.getElementById("search2");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target2');

        for (i = 0; i < nodes.length; i++) {
          if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "block";
          } else {
            nodes[i].style.display = "none";
          }
        }
      }
    </script>

  </body>
</html>
