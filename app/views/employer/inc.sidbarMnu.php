<ul>
<?php $faicons =[
	0=>'fas fa-user',
	1=>'fas fa-plus-circle',
	2=>'fas fa-plus-circle',
	3=>'fas fa-users',
	4=>'fas fa-users',
	5=>'far fa-file',
	6=>'fas fa-key',
	7=>'fas fa-sign-out-alt']; ?>
	<?php for ($i= 0 ;$i<count($right_links);$i++) {?>
		<li>
			<a href="<?= SITE_URL ?>employer/<?= $right_links[$i]['link'] ?>" <?php if ($right_active_link == $i ) {echo "class='active'";}?>>
				<i class="<?= $faicons[$i] ?>"></i>
				<?php $title = $right_links[$i]['title'] ;?>
				<span><?= $$title ?></span>
			</a>
		</li>
	<?php }?>
</ul>