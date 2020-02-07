<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend> <?= $text_Title_add_employer  ?></legend>
        <div class="input_wrapper n40 border">
            <label><?= $text_label_First_Name ?></label>
					
            <input required type="text" name="title" id="title" maxlength="50">
        </div>
        <div class="input_wrapper n40 padding border">
            <label><?= $text_label_Last_Name ?></label>
            <input required type="text" id="phone1" name="phone1" maxlength="100">
        </div>
       
        <div class="input_wrapper n30 border">
            <label><?= $text_label_Email ?></label>
            <input required type="text" name="notes" id="notes">
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
		
		
		 <div class="input_wrapper n30 border">
            <label><?= $text_label_Jop_Title ?></label>
            <input required type="text" name="notes" id="notes">
        </div>
		
        <div class="input_wrapper n20 padding border">
            <label><?= $text_label_Type ?></label>
            <input required type="number" id="unlock_confirmation"  name="unlock_confirmation">
        </div>
		
		
		
        <!--<div class="input_wrapper_other n30 padding select">
            <select required name="emp_type_id" id="emp_type_id">
                <option value="">employer Type </option>
                <option value="1">manager</option>
                <option value="2">emp</option>
            </select>
        </div>  --> 
		
		<!-- <input class="no_float" type="submit" name="submit" value="save">-->
		 
		 
		<input class="btn btn-info btn-lg" type="submit" name="submit" value="<?= $text_button_send_invitation ?>">
	 
	 
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