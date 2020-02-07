<!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white browse-job p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
						<?php include_once 'inc.sidbar.php'; ?>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="job-bx job-profile">
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Change_Password?></h5>
									<a href="jobs-cv-manager.html" class="site-button right-arrow button-sm float-right"><?= $text_button_Back?></a>
								</div>
								<form>
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label><?= $text_label_Old_Password?></label>
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label><?= $text_label_New_Password?>  </label>
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label><?= $text_label_Confirm_New_Password?> </label>
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 m-b10">
											<button class="site-button"><?= $text_button_Update_Password?> </button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
    <