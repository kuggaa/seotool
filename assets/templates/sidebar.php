<?php if ($_SESSION['type'] == 'private'): ?>
	<div class="sidebar" data-spy="affix" data-offset-top="395">
<?php else: ?>
	<div class="sidebar" data-spy="affix" data-offset-top="220">
<?php endif; ?>

	<?php if(count($allstat) > 0): ?>
		<div class="accordion-group">
			<div class="panel-heading sidebar-head"><a data-scroll href="#overall-perf">
				<div class="headingtext">DIGITAL AUDIT</div></a>
			</div>
		</div>


		<div class="accordion-group">
		    <div class="panel-heading sidebar-head"><a data-scroll href="#competitors-panel">
		        <div class="headingtext">COMPETITORS</div></a>
		    </div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a class="accordion-toggle" data-scroll data-parent="#accordion" href="#seo-panel">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<div class="headingtext">ORGANIC SITE SEO</div>
				</a>
			</div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a class="accordion-toggle" data-scroll data-parent="#accordion" href="#searchengines-panel">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<div class="headingtext">SEARCH ENGINES</div>
				</a>
			</div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a class="accordion-toggle" data-scroll data-parent="#accordion" href="#paidsearch-panel">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<div class="headingtext">Paid Search</div>
				</a>
			</div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a class="accordion-toggle" data-scroll data-parent="#accordion" href="#social-panel">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<div class="headingtext">SOCIAL MEDIA</div>
				</a>
			</div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a class="accordion-toggle" data-scroll data-parent="#accordion" href="#code-panel">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<div class="headingtext">System Performance</div>
				</a>
			</div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a data-scroll href="#" onclick="ajax_clean();return false;">
					<div class="headingtext">Start Over</div>
				</a>
			</div>
		</div>

		<div class="accordion-group">
			<div class="panel-heading sidebar-head">
				<a data-scroll href="../../Services/NATIVERANK/getPdf.php">
					<div class="headingtext">GET PDF</div>
				</a>
			</div>
		</div>
	<?php endif; ?>

	</div>

	<script>
	    function ajax_clean() {
	    	url = $('#domainInput').val();
	        $.ajax({
	            type: "POST",
	            url: "/Services/NATIVERANK/service.php",
	            data: "url="+url+"&service=clean",
	            success: function(msg){
	                location.reload();
	            }
	        });
	    }
	</script>
