<br><br>
<div class="row">
	<div class="col-lg-12">
	<?php echo Form::open(array('action' => '/news/edit', 'method' => 'post'));?>
		<div class="form-group">
			<?php echo Form::label('Title', 'title');?>
			<?php echo Form::input('title', isset($items['title'])?$items['title']:'', array('class' => 'form-control'));?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Body', 'body');?>
			<?php echo Form::textarea('body', isset($items['body'])?$items['body']:'', array('class' => 'form-control','rows' => 6));?>
		</div>
		
		<div class="form-group">
			<?php echo Form::button('Submit','Submit',array('class'=>'btn btn-primary'));?>
			
		</div>
		<?php echo Form::close();?>
	</div>
</div>
