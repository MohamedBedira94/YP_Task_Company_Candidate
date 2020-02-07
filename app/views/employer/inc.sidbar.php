<style>
.canditate-des::before ,.canditate-des::after {
		background:none !important;
}
</style>
<div class="sticky-top">
	<div class="candidate-info company-info">
		<div class="candidate-detail text-center">
			<div class="canditate-des" style='border:0px;'>
				<a href="javascript:void(0);">
					<img alt="" src="<?= SITE_URL ?>companies_logos/<?= $company->company_logo ?>" style='border-radius:0%;height:100%;'>
				</a>
				<!--<div class="upload-link" title="update" data-toggle="tooltip" data-placement="right">
					<input type="file" class="update-flie">
					<i class="fas fa-edit"></i>
				</div>-->
			</div>
			<div class="candidate-title">
				<h4 class="m-b5"><a href="javascript:void(0);">@<?= $company->company_name ?></a></h4>
			</div>
		</div>
		<?php include_once 'inc.sidbarMnu.php'; ?>
	</div>
</div>