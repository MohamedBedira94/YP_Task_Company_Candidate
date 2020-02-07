<?php 
//var_dump($this->messanger);
if (isset($_SESSION['message'])){?>
<p class='message <?php isset ($error) ?  'error' : '' ;?> '> <?php echo $_SESSION["message"]; ?> </p>
<?php }?>

<a class="button" href="/employer/add_employer"><i class="fa fa-plus"></i><?= $text_employer_add ?></a>

<table class="data" style = '<?= $text_direction ?>' >
    <thead>
    <tr>
        <th><?= $text_table_emp_title ?></th>
        <th><?= $text_table_emp_phone ?></th>
        <th><?= $text_table_notes ?></th>
        <th><?= $text_table_emp_status ?></th>
        <th><?= $text_table_emp_recieve_news ?></th>
        <th><?= $text_table_emp_unlock_confirmation ?></th>
        <th><?= $text_table_emp_type_id ?></th>
        
        <th>action</th>
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
                <td>
                    <a href="/employer/edit/<?php echo $employer->id ?>"><i class="fa fa-edit"></i><?= $text_table_edit ?> </a>
                    <a href="/employer/delete/<?php echo $employer->id ?>" onclick="if(!confirm('are you sure?')) return false;"><i class="fa fa-trash"></i><?= $text_table_delete ?></a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>