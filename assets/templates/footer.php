		<div>
			<?php 
				if ($ENV == "dev" || $ENV == "test")
				{
					var_dump($_SESSION); 
				}
			?>
		</div>
		<footer class="full-w" style="<?php if (count($allstat) == 0) echo 'position: fixed  !important;'; ?>">
			<div class="cont-w">
				<p class="copy">Copyright © 2014 NATIVE RANK. All rights reserved.</p>
			</div>
		</footer>
		<script src='assets/js/smooth-scroll.js'></script>
		<script src="assets/js/shevron.js"></script>
		<script>
			smoothScroll.init({
				speed: 500,
				easing: 'easeInOutCubic',
				offset: 0,
				updateURL: false,
				callbackBefore: function ( toggle, anchor ) {},
				callbackAfter: function ( toggle, anchor ) {}
			});
		</script>
	</div>
</body>
</html>

