        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url(); ?>/js/bootstrap.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>/vendor/isotope/isotope.pkgd.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>/vendor/sweetalert/sweetalert.min.js"></script>
        	<script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
        <!--===============================================================================================-->
        <script src="<?= base_url(); ?>/js/main.js"></script>

        </body>
    </html>