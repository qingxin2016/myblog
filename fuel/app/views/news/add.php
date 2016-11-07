<?php
use Fuel\Core\Input;
use Fuel\Core\Form;
?>
<br><br>
<div class="row">
	<div class="col-lg-12">
	<?php echo Form::open(array('/news/add'));?>
		<div class="form-group">
			<?php echo Form::label('Title', 'title');?>
			<?php echo Form::input('title', Input::post(isset($items['title'])?$items['title']:''), array('class' => 'form-control'));?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Body', 'body');?>
			<?php echo Form::textarea('body', Input::post(isset($items['body'])?$items['body']:''), array('class' => 'form-control','rows'=>'10'));?>
		</div>
		
		<div class="action">
			<?php echo Form::submit('send')?>
		</div>
		
		  
		<?php echo Form::close();?>
	</div>
</div>

