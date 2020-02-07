<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend> add employer </legend>
        <div class="input_wrapper n40 border">
            <label>title</label>
            <input required type="text" name="title" id="title" maxlength="50" value='<?php echo $employer->title ?>'>
        </div>
        <div class="input_wrapper n40 padding border">
            <label>phone1</label>
            <input required type="text" id="phone1" name="phone1" maxlength="100" value='<?php echo $employer->phone1 ?>'>
        </div>
       
        <div class="input_wrapper n30 border">
            <label>notes</label>
            <input required type="text" name="notes" id="notes" value='<?php echo $employer->notes ?>'>
        </div>
		 <div class="input_wrapper_other n30 padding select">
            <select required name="status" id="status">
                <option value="" <?php if($employer->status == ''){echo "selected ='selected'";}?>>choose status </option>
                <option value="1" <?php if($employer->status == 1){echo "selected ='selected'";}?>>active</option>
                <option value="2" <?php if($employer->status == 2 ){echo "selected ='selected'";}?>>deactive</option>
            </select>
        </div>
        
		
		<select required name="recieve_news" id="recieve_news">
                <option value="" <?php if($employer->recieve_news == ''){echo "selected ='selected'";}?>>recieve_news</option>
                <option value="1" <?php if($employer->recieve_news == 1){echo "selected ='selected'";}?>>yes</option>
                <option value="2" <?php if($employer->recieve_news == 2){echo "selected ='selected'";}?>>no</option>
        </select>
		
        <div class="input_wrapper n20 padding border" >
            <label>unlock_confirmation</label>
            <input required type="number" id="unlock_confirmation"  name="unlock_confirmation" value='<?php echo $employer->unlock_confirmation ?>'>
        </div>
		
        <div class="input_wrapper_other n30 padding select">
            <select required name="emp_type_id" id="emp_type_id">
                <option value="" <?php if($employer->emp_type_id == ''){echo "selected ='selected'";}?>>employer Type </option>
                <option value="1" <?php if($employer->emp_type_id == 1){echo "selected ='selected'";}?>>manager</option>
                <option value="2" <?php if($employer->emp_type_id == 2){echo "selected ='selected'";}?>>emp</option>
            </select>
        </div>   
		
		 <input class="no_float" type="submit" name="submit" value="save">
    
	</fieldset>
</form>