<?php
use Fuel\Core\Form;
?>
<br><br>
<div class="row">
	<div class="col-lg-12">
		<?php echo Form::open(array('action'=>'/user/create'));?>
			
			<?php echo render('user/_form');?>
			  
			<?php echo Form::submit('send','Create',array('class'=>'btn btn-success'));?>
		<?php echo Form::close();?>
	</div>
</div>
