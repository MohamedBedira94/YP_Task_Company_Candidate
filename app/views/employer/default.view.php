<style>
.dropdown-toggle::after {
	display:none !important;
}
border-bottom{
		
		border-bottom:6px solid red
}
</style>
<!--  container -->
<div class="container" style="min-height:1800px; width:60%">
	<!--  header -->
	<div class ='row border' id='main-header' style='background:white;height:50px;margin-top:10px' >
		<div class="col-md-12" style="padding-left:10px"><h5 style='display: inline-block; margin-top: 10px;'> <?= $text_label_Hello_Omar ?></h5>																								
			<div class="dropdown float-right" style="margin-top:7px">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<?= $text_button_Add_new_post ?>
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">1</a>
				<a class="dropdown-item" href="#">2</a>
				<a class="dropdown-item" href="#">3</a>
			</div>
			</div>
		</div>
	</div> 
	<!--  #header -->
	<!--  main-content -->
	<div class ='row' id='main-content' style='background:white;height:600px;margin-top:10px' >
		<div class='col-md-12 col-sm-12 border ' id='inner-content' style='background:white;min-height:1000px;' >
			<span style="margin-top:10px;padding-left:10px"><h4><?= $text_label_Your_Assistant?></hr>
			</span>
			<div class="btn-group float-right">
				<a href='default?by=me'><button type="button" class="btn btn-default"><?= $text_button_My_posts ?></button></a>
				<a href='default?by=all'><button type="button" class="btn btn-primary"><?= $text_button_All_posts ?></button></a>
			</div>
			<ul class="post-job-bx" style="margin-top:50px" >
				<li >
					<div class="post-bx " style="border-style:ridge;border-color:DodgerBlue;border-width:1px;background-color:white">
						<div class="d-flex m-b30">
							<div class="job-post-info">
								<h4><a href="#"> <?= $text_label_Digital_Marketing_Executive?> <span class="badge badge-secondary" style="background-color:LightGray">New</span></a></h4> 
									<ul>
										<li><i class="fa fa-map-marker"></i><?= $text_label_New_York?> </li>.
										<li>1,500 <?= $text_label_views?></li>.
										<li class="expired text-red"><?= $text_label_closed?> </li>
									</ul>
							</div>
						</div>
						<div class="d-flex">
							<div >
								<a href="#" class="badge badge-success"><span>Javascript</span></a>
								<a href="#"class="badge badge-warning"><span>CSS</span></a>
								<a href="#"class="badge badge-primary"><span>HTML</span></a>
								<a href="#"class="badge badge-secondary"><span>Bootstrap</span></a>
							</div>
						</div>
						<label class="like-btn">
							<input type="checkbox">
							<div class="dropdown">
								<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">1</a>
									<a class="dropdown-item" href="#">2</a>
									<a class="dropdown-item" href="#">3</a>
								</div>
							</div>
						</label>
					</div>
				</li>
					<li >
					<div class="post-bx " style="border-style:ridge;border-color:DodgerBlue;border-width:1px;background-color:white">
						<div class="d-flex m-b30">
							<div class="job-post-info">
								<h4><a href="#"><?= $text_label_Digital_Marketing_Executive?> <span class="badge badge-secondary" style="background-color:LightGray">New</span></a></h4> 
									<ul>
										<li><i class="fa fa-map-marker"></i> <?= $text_label_New_York?></li>.
										<li>1,500 <?= $text_label_views?></li>.
										<li class="expired text-red"> <?= $text_label_closed?></li>
									</ul>
							</div>
						</div>
						<div class="d-flex">
							<div >
								<a href="#" class="badge badge-success"><span>Javascript</span></a>
								<a href="#"class="badge badge-warning"><span>CSS</span></a>
								<a href="#"class="badge badge-primary"><span>HTML</span></a>
								<a href="#"class="badge badge-secondary"><span>Bootstrap</span></a>
							</div>
						</div>
						<label class="like-btn">
							<input type="checkbox">
							<div class="dropdown">
								<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">1</a>
									<a class="dropdown-item" href="#">2</a>
									<a class="dropdown-item" href="#">3</a>
								</div>
							</div>
						</label>
					</div>
				</li>
					<li >
					<div class="post-bx " style="border-style:ridge;border-color:DodgerBlue;border-width:1px;background-color:white">
						<div class="d-flex m-b30">
							<div class="job-post-info">
								<h4><a href="#"><?= $text_label_Digital_Marketing_Executive?> <span class="badge badge-secondary" style="background-color:LightGray"> <?= $text_label_New?></span></a></h4> 
									<ul>
										<li><i class="fa fa-map-marker"></i> <?= $text_label_New_York?></li>.
										<li>1,500 <?= $text_label_views?></li>.
										<li class="expired text-red"> <?= $text_label_closed?></li>
									</ul>
							</div>
						</div>
						<div class="d-flex">
							<div >
								<a href="#" class="badge badge-success"><span>Javascript</span></a>
								<a href="#"class="badge badge-warning"><span>CSS</span></a>
								<a href="#"class="badge badge-primary"><span>HTML</span></a>
								<a href="#"class="badge badge-secondary"><span>Bootstrap</span></a>
							</div>
						</div>
						<label class="like-btn">
							<input type="checkbox">
							<div class="dropdown">
								<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">1</a>
									<a class="dropdown-item" href="#">2</a>
									<a class="dropdown-item" href="#">3</a>
								</div>
							</div>
						</label>
					</div>
				</li>
					<li >
					<div class="post-bx" style="border-style:ridge;border-color:DodgerBlue;border-width:1px;background-color:white">
						<div class="d-flex m-b30">
							<div class="job-post-info">
								<h4><a href="#"><?= $text_label_Digital_Marketing_Executive?> <span class="badge badge-secondary" style="background-color:LightGray">New</span></a></h4> 
									<ul>
										<li><i class="fa fa-map-marker"></i> <?= $text_label_New_York?></li>.
										<li>1,500 <?= $text_label_views?></li>.
										<li class="expired text-red"> <?= $text_label_closed?></li>
									</ul>
							</div>
						</div>
						<div class="d-flex">
							<div >
								<a href="#" class="badge badge-success"><span>Javascript</span></a>
								<a href="#"class="badge badge-warning"><span>CSS</span></a>
								<a href="#"class="badge badge-primary"><span>HTML</span></a>
								<a href="#"class="badge badge-secondary"><span>Bootstrap</span></a>
							</div>
						</div>
						<label class="like-btn">
							<input type="checkbox">
							<div class="dropdown">
								<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">1</a>
									<a class="dropdown-item" href="#">2</a>
									<a class="dropdown-item" href="#">3</a>
								</div>
							</div>
						</label>
					</div>
				</li>
			</ul>
			<div class="col-md-12  col-sm-12" style="padding-left:10px;border-style:ridge;border-color:DodgerBlue;border-width:1px;background-color:#F0F8FF;margin-top:30px;height:35px">
				<center><a href="#" style="margin-top:10px" ><h6 class="text-primary"><?= $text_button_Mange_all_your_posts?>  </h6></a></center>
			</div>
		</div>
		<!--<div class='col-md-3 col-sm-12' id='right-sidebar' style='background:white;height:600px;padding-right:0px' >
			<div class='col-md-12 col-sm-12 border' id='right-sidebar-top' style='height:400px;background:white;' > 
			</div>
			<div class='col-md-12 col-sm-12 border' id='right-sidebar-bottom' style='height:320px;background:white;margin-top:10px' > 
			</div>
		</div >-->
		<div class='col-md-12 col-sm-12 border' id='inner-content' style='background:white;min-height:300px;margin-top:10px'>
			<div class="row border-bottom"> <h6 style="margin-left:30px;padding-top:10px"><?= $text_label_Invite_to_Apply_Accepted_Invitations?><i class="fas fa-exclamation-circle"></i></h6>
			</div>
			<center style="padding-top:40px"><img src="../images/mail.jpg" style="width:300px;height:200px;"></center>
			<span style="text-align:center"><h6 style="padding-top:20px"> <?= $text_label_Invite_candidates_to_Apply_to_your_jobs?><br>
			<p style="font-size:10px"><?= $text_label_And_youll_see_those_who_accepted_your_invitations_here?></p> 
			</h6>
			</span> 
			<center><button type="button" class="btn btn-primary" style="margin-bottom:20px" >   <?= $text_button_Search_our_CVs_database?> </button></center>
		</div>
		<div class='col-md-12 col-sm-12 border' id='inner-content' style='background:w;min-height:250px;margin-top:10px'>
			<div class="row border-bottom"> <h6 style="margin-left:30px;padding-top:10px">    <?= $text_label_Your_recent_activity_on_candidates?> <i class="fas fa-exclamation-circle"></i></h6>
			</div>
			<div class="col-md-3  " style="margin-left:80px;background-color:white;height:150px;width:150px;padding-top:20px;display: inline-block">
				<center><img src="../images/person.png" class="rounded-circle" alt="Cinque Terre" style="width:100px;height:100px">
				</center>
				<span style="text-align:center">
					<h6 style="font-size:13px">Omar Tammam <br>
					<p style="font-size:10px">Web Developer<br>in 3 years</p>
					</h6>
				</span>
			</div>
			<div class="col-md-3 " style="background-color:white;height:150px;width:150px;padding-top:20px;display: inline-block">
				<center><img src="../images/person.png" class="rounded-circle" alt="Cinque Terre" style="width:100px;height:100px">
				</center>
				<span style="text-align:center">
					<h6 style="font-size:13px">M<br>
					<p style="font-size:10px">UX/UI-Call center<br>in 2 years</p>
					</h6>
				</span>
			</div>
		</div>
	</div>  
	<!--  #main-content -->
</div>
