<?php use Fuel\Core\Form;?>
<br><br>
<div class="row">
	<div class="col-lg-12">
		<?php echo Form::open(array('action'=>'/upload/upload','enctype' => 'multipart/form-data'));?>
			<?php echo Form::file('file',array('class'=>'form-control'))?>
			<br>
			<?php echo Form::submit('send');?>
		<?php echo Form::close();?>
	</div>
</div>
