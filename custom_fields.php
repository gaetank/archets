<?php 

$lieu=get_post_meta(get_the_ID(),'wpcf-lieu',true);

$beneficiaire=get_post_meta(get_the_ID(),'wpcf-beneficiaire',true);

$musiciens=get_post_meta(get_the_ID(),'wpcf-musiciens',true);

$recette=get_post_meta(get_the_ID(),'wpcf-recette',true); 

?>
	
	<div class="meta">
		<?php if(!empty($lieu)):?>
		<span>
			<?php echo "<span class=\"custom_field\">Lieu: </span> <br/>".$lieu."<br/><br/>"; ?>
		</span>
		<?php endif; ?>
		
		<?php if(!empty($beneficiaire)):?>
		<span>
			<?php echo "<span class=\"custom_field\">Bénéficiaire: </span><br/>".$beneficiaire."<br/><br/>"; ?>
		</span>
		<?php endif; ?>
		
		<?php if(!empty($musiciens)):?>
		<span>
			<?php echo "<span class=\"custom_field\">Musiciens: </span><br/>".$musiciens."<br/><br/>"; ?>
		</span>
		<?php endif; ?>
		
		<?php if(!empty($recette)):?>
		<span>
			<?php echo "<span class=\"custom_field\">Recette: </span><br/>".$recette.""; ?>
		</span>
		<?php endif; ?>
	</div>
