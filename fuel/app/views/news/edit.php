<?php
use Fuel\Core\Input;
use Fuel\Core\Form;
?>
<br><br>
<div class="row">
	<div class="col-lg-12">
	<?php echo Form::open(array('/news/edit/<?php echo $items[\'id\']?>'));?>
		<div class="form-group">
			<?php echo Form::label('Title', 'title');?>
			<?php echo Form::input('title', Input::post('title',isset($items['title'])?$items['title']:''), array('class' => 'form-control'));?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Body', 'body');?>
			<?php echo Form::textarea('body', Input::post('body',isset($items['body'])?$items['body']:''), array('class' => 'form-control'));?>
		</div>
		<input type="hidden" name="post_id" value="<?php echo $items['id']?>">
		<div class="action">
			<?php echo Form::submit('send')?>
		</div>
		<?php echo Form::close();?>
	</div>
</div>