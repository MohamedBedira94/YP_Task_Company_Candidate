<div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<?php include_once 'inc.sidbar.php'; ?>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="job-bx clearfix">
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Manage_jobs?></h5>
									<div class="float-right">
										<span class="select-title"><?= $text_title_Sort_by_freshness?>  </span>
										<select>
											<option><?= $text_option_All?></option>
											<option><?= $text_option_None?></option>
											<option><?= $text_option_Read?></option>
											<option><?= $text_option_Unread?></option>
											<option><?= $text_option_Starred?></option>
											<option><?= $text_option_Unstarred?></option>
										</select>
									</div>
								</div>
								<table class="table-job-bx cv-manager company-manage-job">
									<thead>
										<tr>
											<th class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" id="check12" class="custom-control-input selectAllCheckBox" name="example1">
													<label class="custom-control-label" for="check12"></label>
												</div>
											</th>
											<th><?= $text_title_Job_Title?> </th>
											<th><?= $text_title_Applications?></th>
											<th><?= $text_title_Date?></th>
											<th><?= $text_title_Status?></th>
											<th><?= $text_title_Action?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check1" name="example1">
													<label class="custom-control-label" for="check1"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Social Media Expert</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(5) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check2" name="example1">
													<label class="custom-control-label" for="check2"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(8) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired text-red">Expired</td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check3" name="example1">
													<label class="custom-control-label" for="check3"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Finance Accountant</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(9) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check4" name="example1">
													<label class="custom-control-label" for="check4"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Social Media Expert</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(7) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check5" name="example1">
													<label class="custom-control-label" for="check5"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(6) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check6" name="example1">
													<label class="custom-control-label" for="check6"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Finance Accountant</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(3) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired text-red">Expired</td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check7" name="example1">
													<label class="custom-control-label" for="check7"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Social Media Expert</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(2) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check8" name="example1">
													<label class="custom-control-label" for="check8"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(4) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check9" name="example1">
													<label class="custom-control-label" for="check9"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Finance Accountant</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(1) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired text-red">Expired</td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check10" name="example1">
													<label class="custom-control-label" for="check10"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">Web Designer</a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(1) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired success">Active </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="pagination-bx m-t30 float-right">
									<ul class="pagination">
										<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i><?= $text_button_Prev?></a></li>
										<li class="active"><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li class="next"><a href="javascript:void(0);"><?= $text_button_Next?><i class="ti-arrow-right"></i></a></li>
									</ul>
								</div>
								<!-- Modal -->
								<div class="modal fade modal-bx-info" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<div class="logo-img">
													<img alt="" src="images/logo/icon2.png">
												</div>
												<h5 class="modal-title">Company Name</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<ul>
													<li><strong>Job Title :</strong><p> Web Developer – PHP, HTML, CSS </p></li>
													<li><strong>Experience :</strong><p>5 Year 3 Months</p></li>
													<li><strong>Deseription :</strong>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since.</p></li>
												</ul>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal End -->
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
    