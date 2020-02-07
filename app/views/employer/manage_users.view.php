 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
 <h2><?= $text_title_Manage_Users ?></h2>

<ul class="nav nav-tabs">
    <li class="active"  ><a data-toggle="tab" href="#Active_Users_tab"><?= $text_menu_active_users ?></a></li>
    <li					><a data-toggle="tab" href="#Invited_Users_tab"><?= $text_menu_Invited_User ?></a></li>
    <li					><a data-toggle="tab" href="#Deactivated_Users_tab"><?= $text_menu_Deactivated_User ?></a></li>
    
  </ul>
  
  <div class="tab-content">
    <div id="Active_Users_tab" class="tab-pane fade in active">
     <h3><?= $text_title_Active_Users ?></h3>
	  <!--  active users table --->
      <table class="data" style = '<?= $text_direction ?>' >
    <thead>
    <tr>
        <th><?= $text_table_emp_fname ?></th>
        <th><?= $text_table_emp_lname ?></th>
        <th><?= $text_table_title ?></th>
        <th><?= $text_table_emp_type ?></th>
        <th><?= $text_table_emp_Creations ?></th>
        <th><?= $text_table_emp_last_login ?></th>
        <th><?= $text_table_emp_Search_Activity?></th>
        <th><?= $text_table_emp_Unlocked_Profile ?></th>
        
        <th><?= $text_table_action ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(false !== $employers) {
        foreach ($employers as $employer) {
            ?>
            <tr>
                <td><?php echo $employer->title ?></td>
                <td><?php echo $employer->phone1 ?></td>
                <td><?php echo $employer->notes ?></td>
                <td><?php echo $employer->status ?></td>
                <td><?php echo $employer->recieve_news ?></td>
                <td><?php echo $employer->unlock_confirmation ?></td>
                <td><?php echo $employer->emp_type_id ?></td>
                <td><?php echo $employer->emp_type_id ?></td>
                <td>
                    <a href="/employer/edit_employer/<?php echo $employer->id ?>"><i class="fa fa-edit"></i><?= $text_table_edit ?> </a>
                    <a href="/employer/delete/<?php echo $employer->id ?>" onclick="if(!confirm('are you sure?')) return false;"><i class="fa fa-trash"></i><?= $text_table_delete ?></a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
<!-- # active users table --->
	
	</div>
    <div id="Invited_Users_tab" class="tab-pane fade">
      <h3> <?= $text_title_Invited_Users ?></h3>
	  <!--  invited users table --> 
       <table class="data" style = '<?= $text_direction ?>' >
    <thead>
    <tr>
       <th><?= $text_table_emp_fname ?></th>
        <th><?= $text_table_emp_lname ?></th>
        <th><?= $text_table_title ?></th>
        <th><?= $text_table_emp_type ?></th>
        <th><?= $text_table_action ?></th>
        
        
    </tr>
    </thead>
    <tbody>
			<?php
			if(false !== $employers) {
				foreach ($employers as $employer) {
					?>
					<tr>
						<td><?php echo $employer->title ?></td>
						<td><?php echo $employer->phone1 ?></td>
						<td><?php echo $employer->notes ?></td>
						<td><?php echo $employer->status ?></td>
						
						<td>
							<a href="/employer/edit_employer/<?php echo $employer->id ?>"><i class="fa fa-edit"></i><?= $text_table_edit ?> </a>
							<a href="/employer/delete/<?php echo $employer->id ?>" onclick="if(!confirm('are you sure?')) return false;"><i class="fa fa-trash"></i><?= $text_table_delete ?></a>
						</td>
					</tr>
					<?php
				}
			}
			?>
		</tbody>
	</table>
<!-- # invited users table --> 
   </div>
    <div id="Deactivated_Users_tab" class="tab-pane fade">
      <h3><?= $text_title_Deactivated_Users ?></h3>
	  <!---  deactivated users table -->
       <table class="data" style = '<?= $text_direction ?>' >
    <thead>
    <tr>
        <th><?= $text_table_emp_fname ?></th>
        <th><?= $text_table_emp_lname ?></th>
        <th><?= $text_table_title ?></th>
        <th><?= $text_table_emp_type ?></th>
        <th><?= $text_table_emp_Creations ?></th>
        <th><?= $text_table_emp_last_login ?></th>
        
        
        <th><?= $text_table_action ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(false !== $employers) {
        foreach ($employers as $employer) {
            ?>
            <tr>
                <td><?php echo $employer->title ?></td>
                <td><?php echo $employer->phone1 ?></td>
                <td><?php echo $employer->notes ?></td>
                <td><?php echo $employer->status ?></td>
                <td><?php echo $employer->recieve_news ?></td>
                <td><?php echo $employer->unlock_confirmation ?></td>
               
                <td>
                    <a href="/employer/edit_employer/<?php echo $employer->id ?>"><i class="fa fa-edit"></i><?= $text_table_edit ?> </a>
                    <a href="/employer/delete/<?php echo $employer->id ?>" onclick="if(!confirm('are you sure?')) return false;"><i class="fa fa-trash"></i><?= $text_table_delete ?></a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
<!--- # deactivated users table -->
  </div>

  </div>
  <div  >
	<button type="button" class="btn btn-info btn-lg" >      <a href="add_employer "> <?= $text_button_Add_User ?></a>                 </button>
	 
	 
	<button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal"><?= $text_button_Change_Account_Owner ?></button>
    <!--<button type="button" class="btn btn-info btn-lg" ><?= $text_button_Save_Changes ?></button>-->
    

  </div >
  
  
  
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
		  
		  <div class="form-group">
			  <label for="sel1"><?= $text_title_Owner ?> :</label>
			  <select class="form-control" id="sel1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			  </select>
			</div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?= $text_button_Close ?></button>
        </div>
      </div>
    </div>

  </div>
   <!-- #Modal -->