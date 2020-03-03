<div class="main-panel">
  <div class="content">
    <div class="panel-header bg-dark-gradient">
      <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
          <div>
            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="page-inner mt--5">
      <div class="row mt--2">
        <div class="col-md-12">
          <div class="card full-height">
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                <div class="px-2 pb-2 pb-md-0 text-center">
                  <div id="circles-1"></div>
                  <h6 class="fw-bold mt-3 mb-0">Postingan</h6>
                </div>
                <div class="px-2 pb-2 pb-md-0 text-center">
                  <div id="circles-2"></div>
                  <h6 class="fw-bold mt-3 mb-0">Produk</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="footer">
  <div class="container-fluid">
    <div class="copyright ml-auto">
      2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">Admin</a>
    </div>
  </div>
</footer>
</div>
<!-- End Custom template -->
</div>

<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/back/js/core/jquery.3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/front/js/jquery.mask.min.js')?>"></script>
<script src="<?php echo base_url('assets/back/summernote/dist/summernote-bs4.js')?>"></script>
<script src="<?php echo base_url('assets/back/js/core/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/back/js/core/bootstrap.min.js')?>"></script>

<!--   Other JS Files   -->
<script src="<?php echo base_url('assets/back/dropify/js/dropify.min.js')?>"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url('assets/back/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
<script src="<?php echo base_url('assets/back/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url('assets/back/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')?>"></script>


<!-- Chart JS -->
<script src="<?php echo base_url('assets/back/js/plugin/chart.js/chart.min.js')?>"></script>

<!-- jQuery Sparkline -->
<script src="<?php echo base_url('assets/back/js/plugin/jquery.sparkline/jquery.sparkline.min.js')?>"></script>

<!-- Chart Circle -->
<script src="<?php echo base_url('assets/back/js/plugin/chart-circle/circles.min.js')?>"></script>

<!-- Datatables -->
<script src="<?php echo base_url('assets/back/js/plugin/datatables/datatables.min.js')?>"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo base_url('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>

<!-- jQuery Vector Maps -->
<script src="<?php echo base_url('assets/back/js/plugin/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?php echo base_url('assets/back/js/plugin/jqvmap/maps/jquery.vmap.world.js')?>"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url('assets/front/vendor/sweetalert/sweetalert.min.js')?>"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url('assets/back/js/atlantis.min.js')?>"></script>
<script>
  Circles.create({
      id:'circles-1',
      radius:45,
      maxValue:100,
      width:7,
      value: <?php echo $all_post; ?>,
      colors:['#f1f1f1', '#FF9E27'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-2',
      radius:45,
      maxValue:100,
      width:7,
      value: <?php echo $all_post_produk; ?>,
      colors:['#f1f1f1', '#2BB930'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

</script>

</body>

</html>
<script>
    
