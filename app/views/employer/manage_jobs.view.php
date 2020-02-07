<?php $limit = 5;
$by =$post_title= '';
if (isset($_GET['by'])){
	$by =$_GET['by'];
}
if (isset($_POST['post_title'])){
	$post_title =$_POST['post_title'];
}
$active1 = $active2 = 'btn-default' ;
if ($by == 'me') {
	$active1 = 'btn-primary' ;
}else if ($by == 'all') {
	$active2 = 'btn-primary' ;
}else {
	$active2 = 'btn-primary' ;
}
?>
<style>
.swal2-container.swal2-center.swal2-fade.swal2-shown {
    overflow-y: auto;
    background: #7979794f;
}
.swal2-popup.swal2-modal.swal2-show {
    display: flex;
    width: 50%;
    height: 50vh;
    border: 2px solid rgb(177, 25, 25);
    opacity: 3;
	font-size:1.1em ;
}
</style>
<div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<?php include_once 'inc.sidbar.php'; ?>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="job-bx clearfix" >
								<div class="job-bx-title clearfix" style='border:0px;'>
									<!--<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Manage_jobs?></h5>-->
									<h5 class="font-weight-700 text-uppercase"> <?= $text_title_Manage_jobs?> </h5>
									<br>
									<form action='' method='post' class='row'>
									<div class='row' style='width:100%;'>
									
										<div class="input-group col-md-7">
											
											<input type="text" value='<?= $post_title ?>' class="form-control" name='post_title' placeholder="Search by title">
											<div class="input-group-append">
											  <button class="btn btn-primary" type="submit">
												<i class="fa fa-search"></i>
											  </button>
											</div>
											
										</div>
										
										<div class="col-md-5"> 
										<div class="btn-group float-right">
										  <a href='manage_jobs?by=me'><button type="button" class="btn <?= $active1 ?>">My Jobs</button></a>
										  <a href='manage_jobs?by=all'><button type="button" class="btn <?= $active2 ?>">All Jobs</button></a>
										</button>
										</div>
										</div>
									</div>
									</form>
								</div>
								
							</div>
							<!--  draft job -->
							<?php $status = 'draft';
								$num_indx = $status.'_total_remin';
							?>
							<div class="job-bx clearfix" style='margin-top:15px;'>
								<div class="job-bx-title clearfix">
									<!--<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Manage_jobs?></h5>-->
									<h5 class="font-weight-700 pull-left text-uppercase"><?=$status?> Jobs (<span id='<?= $status?>_num'><?= $$num_indx ?></span>)</h5>
									<!--<div class="float-right">
										<span class="select-title"><?= $text_title_Sort_by_freshness?>  </span>
										<select>
											<option><?= $text_option_All?></option>
											<option><?= $text_option_None?></option>
											<option><?= $text_option_Read?></option>
											<option><?= $text_option_Unread?></option>
											<option><?= $text_option_Starred?></option>
											<option><?= $text_option_Unstarred?></option>
										</select>
									</div>-->
								</div>
								<?php 
									$posts = $status.'_posts';
									if(false !== $$posts) {
										$postID = false;?>
								<table class="table-job-bx cv-manager company-manage-job">
									<thead>
										<tr>
											<!--<th class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" id="check12" class="custom-control-input selectAllCheckBox" name="example1">
													<label class="custom-control-label" for="check12"></label>
												</div>
											</th>-->
											<th><?= $text_title_Job_Title?> </th>
											<th><?= $text_title_Applications?></th>
											<th><?= $text_title_Date?></th>
										<!--	<th><?= $text_title_Status?></th>-->
											<th><?= $text_title_Action?></th>
										</tr>
									</thead>
									<tbody class='<?= $status?>_postList'>
									<?php 
									
										foreach ($$posts as $post) {
											$postID = $post->id ;
											?>
										<tr id='p_row_<?= $postID ?>'>
											<!--<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check1" name="example1">
													<label class="custom-control-label" for="check1"></label>
												</div>
											</td>-->
											<td class="job-name">
												<a href="javascript:void(0);"><?= $post->title ?></a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> <span><?= $post->city_name ?></span>,<span><?= $post->country_name ?></span></li>
													<li><i class="fa fa-bookmark-o"></i> <span><?= $post->job_type ?></span></li>
													<li><i class="fa fa-filter"></i> <?= $post->job_rule ?></li>
												</ul>
											</td>
											<td class="application text-primary">(<?= $post->application_num ?>) Applications</td>
											<td class="application text-primary"><?php echo date("d/m/Y", strtotime($post->create_at)); ?></td>
											<!--<td class="expired pending">Pending </td>-->
											<td class="job-links">
												<a href="view_job/<?= $post->id ?>" class="<?= $status?>_view_post" id="v_<?= $post->id ?>"                                                >
												<i class="fa fa-eye"></i></a>
												<a href='edit_job/<?= $post->id ?>'><i  id="e_<?= $post->id ?>" class="fa fa-edit <?= $status?>_edit_post"></i></a>
												<a   class = "<?= $status?>_delete_post" id="d_<?= $post->id ?>" href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<?php }
										if($$num_indx > $limit ){?>
										<tr class="show_more_<?= $status ?>_main" id="show_more_<?= $status?>_main<?php echo $postID; ?>">
											<td colspan = '7'> 
													
											<span id="<?php echo $postID; ?>" class="show_more_<?=$status ?>" title="Load more <?=$status?>_posts">Show more</span>
											<span class="<?=$status?>_loading" style="display: none;color:red;"><span class="<?=$status?>_loading_txt">Loading...</span></span>
									   
											</td>
										</tr>
										<?php } ?>
										</tbody>
								</table>
								<?php }else { ?>
								<h2 style='color:red'> no <?= $status ?> jobs </h2>
								<?php } ?>
							</div>
							<!--  #draft job -->
							
							<!--  active job -->
							<?php $status = 'active';
							$num_indx = $status.'_total_remin';
							?>
							<div class="job-bx clearfix" style='margin-top:15px;'>
								<div class="job-bx-title clearfix">
									<!--<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Manage_jobs?></h5>-->
									<h5 class="font-weight-700 pull-left text-uppercase"><?=$status?> Jobs (<span id='<?= $status?>_num'><?= $$num_indx ?></span>)</h5>
									<!--<div class="float-right">
										<span class="select-title"><?= $text_title_Sort_by_freshness?>  </span>
										<select>
											<option><?= $text_option_All?></option>
											<option><?= $text_option_None?></option>
											<option><?= $text_option_Read?></option>
											<option><?= $text_option_Unread?></option>
											<option><?= $text_option_Starred?></option>
											<option><?= $text_option_Unstarred?></option>
										</select>
									</div>-->
								</div>
								<?php 
									$posts = $status.'_posts';
									if(false !== $$posts) {
										$postID = false;?>
								<table class="table-job-bx cv-manager company-manage-job">
									<thead>
										<tr>
											<!--<th class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" id="check12" class="custom-control-input selectAllCheckBox" name="example1">
													<label class="custom-control-label" for="check12"></label>
												</div>
											</th>-->
											<th><?= $text_title_Job_Title?> </th>
											<th><?= $text_title_Applications?></th>
											<th><?= $text_title_Date?></th>
										<!--	<th><?= $text_title_Status?></th>-->
											<th><?= $text_title_Action?></th>
										</tr>
									</thead>
									<tbody class='<?= $status?>_postList'>
									<?php 
									
										foreach ($$posts as $post) {
											$postID = $post->id ;
											?>
										<tr id='p_row_<?= $postID ?>'>
											<!--<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check1" name="example1">
													<label class="custom-control-label" for="check1"></label>
												</div>
											</td>-->
											<td class="job-name">
												<a href="javascript:void(0);"><?= $post->title ?></a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> <span><?= $post->city_name ?></span>,<span><?= $post->country_name ?></span></li>
													<li><i class="fa fa-bookmark-o"></i> <span><?= $post->job_type ?></span></li>
													<li><i class="fa fa-filter"></i> <?= $post->job_rule ?></li>
												</ul>
											</td>
											<td class="application text-primary">(<?= $post->application_num ?>) Applications</td>
											<td class="application text-primary"><?php echo date("d/m/Y", strtotime($post->create_at)); ?></td>
											<!--<td class="expired pending">Pending </td>-->
											<td class="job-links">
												<a href="view_job/<?= $post->id ?>" class="<?= $status?>_view_post" id="v_<?= $post->id ?>"                                                >
												<i class="fa fa-eye"></i></a>
												<a href='edit_job/<?= $post->id ?>'><i  id="e_<?= $post->id ?>" class="fa fa-edit <?= $status?>_edit_post"></i></a>
												<a   class = "<?= $status?>_delete_post" id="d_<?= $post->id ?>" href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<?php }
										if($$num_indx > $limit ){?>
										<tr class="show_more_<?= $status ?>_main" id="show_more_<?= $status?>_main<?php echo $postID; ?>">
											<td colspan = '7'> 
													
											<span id="<?php echo $postID; ?>" class="show_more_<?=$status ?>" title="Load more <?=$status?>_posts">Show more</span>
											<span class="<?=$status?>_loading" style="display: none;color:red;"><span class="<?=$status?>_loading_txt">Loading...</span></span>
									   
											</td>
										</tr>
										<?php } ?>
										</tbody>
								</table>
								<?php }else { ?>
								<h2 style='color:red'> no <?= $status ?> jobs </h2>
								<?php } ?>
							</div>
							
							<!--  #active job -->
							
							<!--  expired job -->
							<?php $status = 'expired';
							$num_indx = $status.'_total_remin';
							?>
							<div class="job-bx clearfix" style='margin-top:15px;'>
								<div class="job-bx-title clearfix">
									<!--<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Manage_jobs?></h5>-->
									<h5 class="font-weight-700 pull-left text-uppercase"><?=$status?> Jobs (<span id='<?= $status?>_num'><?= $$num_indx ?></span>)</h5>
									<!--<div class="float-right">
										<span class="select-title"><?= $text_title_Sort_by_freshness?>  </span>
										<select>
											<option><?= $text_option_All?></option>
											<option><?= $text_option_None?></option>
											<option><?= $text_option_Read?></option>
											<option><?= $text_option_Unread?></option>
											<option><?= $text_option_Starred?></option>
											<option><?= $text_option_Unstarred?></option>
										</select>
									</div>-->
								</div>
								<?php 
									$posts = $status.'_posts';
									if(false !== $$posts) {
										$postID = false;?>
								<table class="table-job-bx cv-manager company-manage-job">
									<thead>
										<tr>
											<!--<th class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" id="check12" class="custom-control-input selectAllCheckBox" name="example1">
													<label class="custom-control-label" for="check12"></label>
												</div>
											</th>-->
											<th><?= $text_title_Job_Title?> </th>
											<th><?= $text_title_Applications?></th>
											<th><?= $text_title_Date?></th>
										<!--	<th><?= $text_title_Status?></th>-->
											<th><?= $text_title_Action?></th>
										</tr>
									</thead>
									<tbody class='<?= $status?>_postList'>
									<?php 
									
										foreach ($$posts as $post) {
											$postID = $post->id ;
											?>
										<tr id='p_row_<?= $postID ?>'>
											<!--<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check1" name="example1">
													<label class="custom-control-label" for="check1"></label>
												</div>
											</td>-->
											<td class="job-name">
												<a href="javascript:void(0);"><?= $post->title ?></a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> <span><?= $post->city_name ?></span>,<span><?= $post->country_name ?></span></li>
													<li><i class="fa fa-bookmark-o"></i> <span><?= $post->job_type ?></span></li>
													<li><i class="fa fa-filter"></i> <?= $post->job_rule ?></li>
												</ul>
											</td>
											<td class="application text-primary">(<?= $post->application_num ?>) Applications</td>
											<td class="application text-primary"><?php echo date("d/m/Y", strtotime($post->create_at)); ?></td>
											<!--<td class="expired pending">Pending </td>-->
											<td class="job-links">
												<a href="view_job/<?= $post->id ?>" class="<?= $status?>_view_post" id="v_<?= $post->id ?>"                                                >
												<i class="fa fa-eye"></i></a>
												<a href='edit_job/<?= $post->id ?>'><i  id="e_<?= $post->id ?>" class="fa fa-edit <?= $status?>_edit_post"></i></a>
												<a   class = "<?= $status?>_delete_post" id="d_<?= $post->id ?>" href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>
										<?php }
										if($$num_indx > $limit ){?>
										<tr class="show_more_<?= $status ?>_main" id="show_more_<?= $status?>_main<?php echo $postID; ?>">
											<td colspan = '7'> 
													
											<span id="<?php echo $postID; ?>" class="show_more_<?=$status ?>" title="Load more <?=$status?>_posts">Show more</span>
											<span class="<?=$status?>_loading" style="display: none;color:red;"><span class="<?=$status?>_loading_txt">Loading...</span></span>
									   
											</td>
										</tr>
										<?php } ?>
										</tbody>
								</table>
								<?php }else { ?>
								<h2 style='color:red'> no <?= $status ?> jobs </h2>
								<?php } ?>
							</div>
							
							<!--  #expired job -->
					
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
		</div>
 		
<script type="text/javascript">
$(document).ready(function(){
	
	//show more effects 
	$(document).on('click','.show_more_active',function(){
        var ID = $(this).attr('id');
        $('.show_more_active').hide();
        $('.active_loading').show();
        $.ajax({
            type:'POST',
           // url:'../ajax/moreactive_posts',
           url:'ajax_more_posts',
            data:{
				'id':ID,
				'type': 1,
				'status' : 1,
				'post_title' : '<?=$post_title ?>'
			},
            success:function(html){
                $('#show_more_active_main'+ID).remove();
                $('.active_postList').append(html);
            }
        });
    });
	
	$(document).on('click','.show_more_draft',function(){
        var ID = $(this).attr('id');
        $('.show_more_draft').hide();
        $('.draft_loading').show();
        $.ajax({
            type:'POST',
           // url:'../ajax/moredraft_posts',
           url:'ajax_more_posts',
            data:{
				'id':ID,
				'type': 1,
				'status' : 0,
				'post_title' : '<?=$post_title ?>'
			},
            success:function(html){
                $('#show_more_draft_main'+ID).remove();
                $('.draft_postList').append(html);
            }
        });
    });

    $(document).on('click','.show_more_expired',function(){
        var ID = $(this).attr('id');
        $('.show_more_expired').hide();
        $('.expired_loading').show();
        $.ajax({
            type:'POST',
           // url:'../ajax/moreexpired_posts',
           url:'ajax_more_posts',
            data:{
				'id':ID,
				'type': 1,
				'status' : 2,
				'post_title' : '<?=$post_title ?>'
			},
            success:function(html){
                $('#show_more_expired_main'+ID).remove();
                $('.expired_postList').append(html);
            }
        });
    });
	//#show more effects 
	
	//delete effects 
	$(document).on('click','.draft_delete_post',function(){
		var status = 'draft';
		var status_num = '#'+status+'_num';
		var indxs_num = $(status_num).html();
		console.log('indxs_num' , indxs_num);
		
		
		 var ID_S = $(this).attr('id');
		 var post_id = ID_S.replace('d_','');
		 console.log ('ID',post_id);
		delete_post(indxs_num,post_id,status_num);
	});
	
	$(document).on('click','.active_delete_post',function(){
		var status = 'active';
		var status_num = '#'+status+'_num';
		var indxs_num = $(status_num).html();
		console.log('indxs_num' , indxs_num);
		
		
		 var ID_S = $(this).attr('id');
		 var post_id = ID_S.replace('d_','');
		 console.log ('ID',post_id);
		delete_post(indxs_num,post_id,status_num);
	});
	
	$(document).on('click','.expired_delete_post',function(){
		var status = 'expired';
		var status_num = '#'+status+'_num';
		var indxs_num = $(status_num).html();
		console.log('indxs_num' , indxs_num);
		
		
		 var ID_S = $(this).attr('id');
		 var post_id = ID_S.replace('d_','');
		 console.log ('ID',post_id);
		delete_post(indxs_num,post_id,status_num);
	});
	
	//#delete effects 
	
	function delete_post(indxs_num,post_id,status_num){
		
		 
		 	Swal.fire({
			  title: 'هل انت متأكد ؟',
			  text: "بعد حذف هذه الوظيفة لا يمكنك استرجاعها",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'نعم قم بحذفها',
			   cancelButtonText: 'لا تحذف'
			}).then((result) => {
			  if (result.value) {
				
	
	//delete process here 

			//remove the element from ui 
			//$("#p_row_"+indx).remove();

				//AJAX DELETE HERE 
				var data_ = false;
			$.ajax({
				type: "POST",
				async: false,
				data: {
			//	  invoiceno:'234',
				  post_id : post_id
				},
				url: "ajax_delete_post",
			  //  dataType: 'json',
				//async: false,
				beforeSend: function() {
					
				},
				success: function(data) {
				var data = JSON.parse(data);
				data_ = data;
				console.log('data',data);
					if (typeof data !== 'undefined' && data.length > 0) {
						
						//console.log(data);
						
					
					}else{
					
					}
				}
			}); 	
			
console.log('dataaa',data_);			
			if(data_ == '1' ) {
				$("#p_row_"+post_id).remove();
				indxs_num_after = parseInt(indxs_num) - 1 ;
				console.log('indxs_num_after' , indxs_num_after);
				$(status_num).html(indxs_num_after);
							Swal.fire(
								  'حذفت !',
								  'تم حذف الوظيفة بنجاح',
								  'success'
								);	
						}else {
							Swal.fire(
								  'خطأ !',
								  'حدث خطأ ما برجاء الماولة لاحقا',
								  'error'
								);
						}
		
	
	
  }
});
	}
	
	//view effects 
	
	//#view effects 
	
	/*
	$(document).on('click','.view_post',function(){
		 var ID_S = $(this).attr('id');
		 ID = ID_S.replace('v_','');
		 console.log ('ID',ID);
	});*/
	
	
});
</script>   
