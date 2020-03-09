<footer class="footer">
  <div class="container-fluid">
    <div class="copyright ml-auto">
      2020, made by <a href="#" style="color: #575962">Manly</a>
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
  $('#summernote').summernote({
    height: 590,
    toolbar: [    
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],       
          ['insert', ['link', 'picture', 'hr']],
          ['view', ["fullscreen", "codeview", "help"]],
        ],

      onImageUpload: function(files, editor, welEditable) {
          sendFile(files[0], editor, welEditable);
      } 

  });

  $(document).ready(function(){
    $('.dropify').dropify({
        messages: {
            default: 'Drag atau drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });
    // Format mata uang.
    $( '.harga_produk' ).mask('000,000,000', {reverse: true});
  });

</script>

</body>

</html>