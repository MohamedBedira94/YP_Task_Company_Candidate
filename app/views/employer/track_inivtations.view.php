<div class="content-block" style='padding-top:15px;'>
			<!-- Browse Jobs -->
			 
				<div class="container" style="margin-left: 200px">
					<div class="row">
						
						<div class="col-xl-12 col-lg-12 m-b30">
							<div class="job-bx clearfix">
								<div class="job-bx-title clearfix">
									<h1 class="font-weight-700 pull-left "><?= $text_button_Track_Invitations?></h1>
									
									
								</div>
							<div class="float-right" style="width:250px;display: inline-block">
										<span class="select-title">       </span>
										<select>
											<option><?= $text_button_All_Jobs?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											
										</select>
									</div>
										<div class="float-right" style="width:250px;display: inline-block">
										<span class="select-title">       </span>
										<select>
											<option><?= $text_button_All_Status?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
											
									<div class="input-group col-md-4" style="width30px" >
										<input class="form-control py-2 border-right-0 border" type="search" value="<?= $text_button_All_Candidate?>" id="example-search-input">
										<span class="input-group-append">
										<button class="btn btn-outline-secondary border-left-0 border" type="button">
										<i class="fa fa-search"></i>
										</button>
										</span>
									</div>
									
									
									<br>
									<br>
									
							<div class="container" style="padding-left: 200px">
								<div style=" border-right: 2px solid ;width:120px;display: inline-block;margin-right:50px;padding-right: 10px;color: #777;"> <h1 class="pull-left" style='color:#777;padding-right: 5px;'>3</h1> Sent Invitations</div>
								<div style=" border-right: 2px solid ;width:120px;display: inline-block;margin-right:50px;padding-right: 10px;color: #227FBD;"> <h1 class="pull-left" style='color:#227FBD;padding-right: 5px;'>0</h1> Seen Invitations</div>
								<div style=" border-right: 2px solid ;width:120px;display: inline-block;margin-right:50px;padding-right: 10px;color: #00A947;"><h1 class="pull-left" style='color:#00A947;padding-right: 5px;'>4</h1> Accepted Invitations</div>
								<div style=" border-right: 2px solid ;width:120px;display: inline-block;margin-right:50px;padding-right: 10px;color: #E22221;"><h1 class="pull-left" style='color:#E22221;padding-right: 5px;'>0</h1>  Declined Invitations</div>
								
								
								</div>
								<br><br>
								<table class="table">
									<thead class="thead-light">
										<tr>
											<th><?= $text_label_Candidate_Name?></th>
											<th><?= $text_label_Job_Title?></th>
											<th><?= $text_label_Invetation_Date?></th>
											<th><?= $text_label_Invited_By?></th>
											<th><?= $text_label_Status?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="../images/person.png" alt="Paris" width="30" height="30" style="border-radius: 50%">John</td>
											<td>Doe</td>
											<td>1 year ago</td>
											<td>Fatma Mahmoud</td>
											<td class="expired success"><?= $text_label_Accepted?> </td>
										</tr>
										<tr>
											<td><img src="../images/person.png" alt="Paris" width="30" height="30" style="border-radius: 50%">Mary</td>
											<td>Moe</td>
											<td>1 year ago</td>
											<td>Fatma Mahmoud</td>
											<td><?= $text_label_sent?></td>
										</tr>
										<tr>
											<td><img src="../images/person.png" alt="Paris" width="30" height="30" style="border-radius: 50%">July</td>
											<td>Dooley</td>
											<td>1 year ago</td>
											<td>Fatma Mahmoud</td>
											<td class="expired success"><?= $text_label_Accepted?> </td>
										</tr>
									</tbody>
									</table>
							<div class="pagination-bx m-t30 float-right">
									<ul class="pagination">
										<!--<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i><?= $text_button_Prev?></a></li>-->
										<li class="active"><a href="javascript:void(0);">1</a></li>
										<!--<li><a href="javascript:void(0);">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li class="next"><a href="javascript:void(0);"><?= $text_button_Next?><i class="ti-arrow-right"></i></a></li>-->
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
    