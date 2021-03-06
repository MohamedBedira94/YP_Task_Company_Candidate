<!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"><?= $text_title_Job_Detail ?></h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#"><?= $text_title_Home ?></a></li>
							<li><?= $text_title_Job_Detail ?></li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="images/blog/grid/pic1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15"><a href="/employer/activejob/<?= $job->id ?>" class="site-button"><?= $text_button_Active_this_job ?></a> </h4>
											<ul>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black"><?= $text_lable_Experience_needed ?></strong><span><?= $job->exp_years ?></span> Year Experience</li>
												
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black"><?= $text_lable_Career_level?></strong><span class="text-black-light">Experienced(Non-Manger)</span></li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black"><?= $text_lable_job_type ?></strong><span><?= $job->exp_years ?></span> Year Experience</li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black"><?= $text_lable_Salary?></strong><span><?= $job->salary_from ?></span> - </span> <span> <?= $job->salary_to ?> </span> <?php if($job->salary_time_per == 1 ) echo 'monthly';else echo 'yearly'; ?> </span></li>
												
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black"><?= $text_lable_vacancies ?></strong><span><?= $job->num_vacancies ?></span> vacancies</li>
											</ul>
									
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="javascript:void(0);" class="text-secondry m-r30"><?php echo $job->title ?></a><a href="#" class="site-button" style="font-size: 16px;">  <?= $text_lable_Edit ?> <i class="fa fa-edit"> </i>  </a>
								</h3>
								<ul class="job-info">
									<!--<li><strong><?= $text_lable_Education?></strong> <?= $job->education_degree ?> </li>-->
									<!--<li><strong>Deadline:</strong> 25th January 2018</li>-->
									<li><i class="ti-location-pin text-black m-r5"></i> NewYark </li>
								</ul>
								<p class="p-t20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h5 class="font-weight-600"><?= $text_lable_About_the_job?>   <a href="#" class="site-button" style="font-size: 16px;">  <?= $text_lable_Edit ?> <i class="fa fa-edit"> </i>  </a></h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?= $job->job_description ?></p>
								<div class="form-group">
									
										<?= $text_lable_Job_Role?>
										<span class="badge badge-pill badge-secondary" style='font-size:18px;'>engineering</span>
										<span class="badge badge-pill badge-secondary" style='font-size:18px;'>engineering</span>
										<span class="badge badge-pill badge-secondary" style='font-size:18px;'>engineering</span>

								</div>
								<!--<h5 class="font-weight-600">How to Apply</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
								-->
								<h5 class="font-weight-600"><?= $text_lable_Job_Requirements?> <a href="#" class="site-button" style="font-size: 16px;">  <?= $text_lable_Edit ?> <i class="fa fa-edit"> </i>  </a></h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<?= $job->job_requirements ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Job Detail -->
			<!-- Our Jobs -->
			<div class="section-full content-inner">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="blog-details.html"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="blog-details.html">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link"><span class="fw6">READ MORE</span></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="blog-details.html"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="blog-details.html">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link"><span class="fw6">READ MORE</span></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="blog-details.html"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="blog-details.html">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
											<li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link"><span class="fw6">READ MORE</span></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="blog-details.html"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="blog-details.html">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta">
                                        <ul>
											<li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="blog-details.html" title="READ MORE" rel="bookmark" class="site-button-link"><span class="fw6">READ MORE</span></a>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Jobs END -->
		</div>
		
		<script>
		$('.multipleSelect').fastselect();
		</script>
    