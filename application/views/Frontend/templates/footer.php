<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50" style="margin-left:200px">
					<h4 class="stext-301 cl0 p-b-30">
						Email
          </h4>
          
					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								<?php echo $email; ?>
							</a>
						</li>
          </ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50 mx-auto">
					<h4 class="stext-301 cl0 p-b-30">
						Kontak Kami
					</h4>

					<p class="stext-107 cl7 size-201">
						Alamat? <?php echo $alamat; ?> atau hubungi kami di <?php echo $no_hp; ?>
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>
			</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <span>Admin</span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="zmdi zmdi-chevron-up"></i>
  </span>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/front/js/jquery.mask.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo base_url('assets/front/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/select2/select2.min.js')?>"></script>
<script>
  $(".js-select2").each(function() {
    $(this).select2({
      minimumResultsForSearch: 20,
      dropdownParent: $(this).next('.dropDownSelect2')
    });
  })
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/front/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/slick/slick.min.js')?>"></script>
<script src="<?php echo base_url('assets/front/js/slick-custom.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/parallax100/parallax100.js')?>"></script>
<script>
  $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/MagnificPopup/jquery.magnific-popup.min.js')?>"></script>
<script>
  $('.gallery-lb').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
      delegate: 'a', // the selector for gallery item
      type: 'image',
      gallery: {
        enabled: true
      },
      mainClass: 'mfp-fade'
    });
  });
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/isotope/isotope.pkgd.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/sweetalert/sweetalert.min.js')?>"></script>
<script>
  $('.js-addwish-b2').on('click', function(e) {
    e.preventDefault();
  });

  $('.js-addwish-b2').each(function() {
    var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
    $(this).on('click', function() {
      swal(nameProduct, "is added to wishlist !", "success");

      $(this).addClass('js-addedwish-b2');
      $(this).off('click');
    });
  });

  $('.js-addwish-detail').each(function() {
    var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

    $(this).on('click', function() {
      swal(nameProduct, "is added to wishlist !", "success");

      $(this).addClass('js-addedwish-detail');
      $(this).off('click');
    });
  });

  /*---------------------------------------------*/

  $('.js-addcart-detail').each(function() {
    var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
    $(this).on('click', function() {
      swal(nameProduct, "is added to cart !", "success");
    });
  });
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/front/vendor/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
<script>
  $('.js-pscroll').each(function() {
    $(this).css('position', 'relative');
    $(this).css('overflow', 'hidden');
    var ps = new PerfectScrollbar(this, {
      wheelSpeed: 1,
      scrollingThreshold: 1000,
      wheelPropagation: false,
    });

    $(window).on('resize', function() {
      ps.update();
    })
  });
</script>
<script src="<?php echo base_url('assets/front/js/main.js')?>"></script>

</body>

</html>