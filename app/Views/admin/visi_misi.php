<?php echo view('_partial/header'); ?>
<?php echo view('_partial/navbar'); ?>
<?php echo view('_partial/sidebar'); ?>

<div class="d-flex flex-column-fluid">
	<!--begin::Container-->

	<!--begin::Container-->
	<div class="content">

		<div class="card card-custom card-stretch" id="kt_page_stretched_card">
			<div class="card-header">
				<div class="card-title">
					<h3 class="card-label">Stretched Card <small>full height card with scrollable content</small></h3>
				</div>
			</div>
			<div class="card-body">
				<div class="card-scroll">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quidem quasi, sed ab assumenda nobis esse saepe eaque consectetur, ipsa sunt cumque quia deleniti dolores sequi facilis? Dolor, provident dolores.
				</div>
			</div>
		</div>

		<script src="<?php echo base_url('assets/js/visi.js'); ?>"></script>
	</div>
</div>

<?php echo view('_partial/footer'); ?>