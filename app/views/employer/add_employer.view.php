
<!-- Browse Jobs -->
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<div class="sticky-top">
								<div class="candidate-info company-info">
									<div class="candidate-detail text-center">
										<div class="canditate-des">
											<a href="javascript:void(0);">
												<img alt="" src="images/logo/icon3.jpg">
											</a>
											<div class="upload-link" title="update" data-toggle="tooltip" data-placement="right">
												<input type="file" class="update-flie">
												<i class="fa fa-pencil"></i>
											</div>
										</div>
										<div class="candidate-title">
											<h4 class="m-b5"><a href="javascript:void(0);">@COMPANY</a></h4>
										</div>
									</div>
									<?php include_once 'inc.sidbarMnu.php'; ?>
									</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
						<h1><?= $text_Title_add_employer  ?> </h1>
						<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
			   <div class="form-group">
				  <label for="fname"><?= $text_label_First_Name ?></label>
				  <input type="text" class="form-control" id="fname"  name="fname">
				</div>
        
        <div class="form-group">
            <label for="lname"><?= $text_label_Last_Name ?></label>
            <input type="text" class="form-control" id="lname"  name="lname">
        </div>
       
         <div class="form-group">
            <label for="email"><?= $text_label_Email ?></label>
            <input type="email" class="form-control" id="email"  name="email">
        </div>
		 <!--<div class="input_wrapper_other n30 padding select">
            <select required name="status" id="status">
                <option value="">choose status </option>
                <option value="1">active</option>
                <option value="2">deactive</option>
            </select>
        </div>-->
        
		
		<!--<select required name="recieve_news" id="recieve_news">
                <option value="">recieve_news</option>
                <option value="1">yes</option>
                <option value="2">no</option>
        </select>-->
		
		
		 <div class="form-group">
             <label for="title"><?= $text_label_Jop_Title ?></label>
             <input type="text" class="form-control" id="title"  name="title">
        </div>
		
        <div class="form-group">
            <label for="type"><?= $text_label_Type ?></label>
           <input type="text" class="form-control"  id="Type"  name="Type">
        </div>
		
		
		
        <!--<div class="input_wrapper_other n30 padding select">
            <select required name="emp_type_id" id="emp_type_id">
                <option value="">employer Type </option>
                <option value="1">manager</option>
                <option value="2">emp</option>
            </select>
        </div>  --> 
		
		<!-- <input class="no_float" type="submit" name="submit" value="save">-->
		 
		 
		<button type="button" class="btn btn-info btn-lg" ><?= $text_button_send_invitation ?></button>
	 
	 
		<button type="button" class="btn btn-info btn-lg" ><?= $text_button_cancel ?></button>

     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" ><?= $text_title_Change_Account_Owner ?></h4>
        </div>
        <div class="modal-body">
          <p><?= $text_title_Please_select_new_account?></p>
		  
		


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?= $text_button_Close ?></button>
        </div>
      </div>
    </div>

  </div>
   <!-- #Modal -->
</form>

						
						</div>
					</div>
				</div>
			</div>
<!-- Browse Jobs END -->