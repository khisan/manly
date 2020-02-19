<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Informasi Admin</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="<?php echo base_url() . 'Backend/dashboard' ?>">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Backend/dashboard' ?>">Dasboard</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <p>Ubah Password</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?php echo base_url() . 'Backend/ubah_pass/ubah' ?>" method="post">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Password Lama</label>
                      <div class="col-md-10 p-0">
                        <input type="password" class="form-control input-full" id="inlineinput" placeholder="Password Lama" name="password_lama">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Password Baru</label>
                      <div class="col-md-10 p-0">
                        <input type="password" class="form-control input-full" id="inlineinput" placeholder="Password Baru" name="password_baru">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Konfirmasi Password</label>
                      <div class="col-md-10 p-0">
                        <input type="password" class="form-control input-full" id="inlineinput" placeholder="Konfirmasi Password" name="konfir_password">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group" align="center">
                  <div class="card-action">
                    <button class="btn btn-success" type="submit" id="sweet">Edit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
      <nav class="pull-left"></nav>
      <div class="copyright ml-auto">
        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="">Admin</a>
      </div>
    </div>
  </footer>
</div>
<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/back/js/core/jquery.3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/front/js/jquery.mask.min.js') ?>"></script>
<script src="<?php echo base_url('assets/back/summernote/dist/summernote-bs4.js') ?>"></script>
<script src="<?php echo base_url('assets/back/js/core/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/back/js/core/bootstrap.min.js') ?>"></script>

<!--   Other JS Files   -->
<script src="<?php echo base_url('assets/back/dropify/js/dropify.min.js') ?>"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url('assets/back/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
<script src="<?php echo base_url('assets/back/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url('assets/back/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>


<!-- Chart JS -->
<script src="<?php echo base_url('assets/back/js/plugin/chart.js/chart.min.js') ?>"></script>

<!-- jQuery Sparkline -->
<script src="<?php echo base_url('assets/back/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

<!-- Chart Circle -->
<script src="<?php echo base_url('assets/back/js/plugin/chart-circle/circles.min.js') ?>"></script>

<!-- Datatables -->
<script src="<?php echo base_url('assets/back/js/plugin/datatables/datatables.min.js') ?>"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo base_url('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

<!-- jQuery Vector Maps -->
<script src="<?php echo base_url('assets/back/js/plugin/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/back/js/plugin/jqvmap/maps/jquery.vmap.world.js') ?>"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url('assets/front/vendor/sweetalert/sweetalert.min.js') ?>"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url('assets/back/js/atlantis.min.js') ?>"></script>
<!--Toast Message-->
<?php if ($this->session->flashdata('msg') == 'success') : ?>
  <script>
    swal('Password berhasil dirubah', {
      button: false,
      icon: 'success',
      timer: 1500
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'error-notmatch') : ?>
  <script>
    swal('Password dan Konfirmasi Password Tidak Cocok', {
      button: false,
      icon: 'error',
      timer: 1500
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'error-notfound') : ?>
  <script>
    swal('Password Tidak Ditemukan', {
      button: false,
      icon: 'error',
      timer: 1500
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'error') : ?>
  <script>
    swal('ID User Tidak Ditemukan', {
      button: false,
      icon: 'error',
      timer: 1500
    });
  </script>
<?php else : ?>

<?php endif; ?>