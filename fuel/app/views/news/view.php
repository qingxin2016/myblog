<?php
use Fuel\Core\Form;
use Fuel\Core\Input;
use Fuel\Core\Session;
?>
<div class="col-lg-12">
	<h2><?php echo $items['title']?></h2>
	<p>Created:<?php echo $items['created_at']?></p>
	<hr>
	<p><?php echo $items['body'];?></p>
	<p>
		<a class="btn btn-primary"
			href="/news/edit/<?php echo $items['id'];?>" role="button">edit</a> <a
			class="btn btn-danger" href="/news/delete/<?php echo $items['id'];?>"
			role="button">delete</a>
	</p>
</div>

<div class="col-lg-12 bs-example bs-example-bg-classes">
<?php if (Session::get_flash('success')):?>
	<div class="alert alert-success"><?php echo Session::get_flash('success');?></div>
<?php endif;?>
	<h2 class="bg-primary">
		Comments&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span>
	</h2>
	<br>
	<br>
	<ul>
	
	<?php foreach ($comment as $comments):?>
		<li class="text-muted"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;<?php echo $comments->comment;?></li>
		<br>
	<?php endforeach;?>
	</ul>


	
	<hr>
	<?php echo Form::open('/bbs/add');?>
  <div class="form-group">
				<?php echo Form::label('Email address');?>
				<?php echo Form::input('email','',array('class'=>'form-control','placeholder'=>'Email','type'=>'email'));?>
  </div>
	<div class="form-group">
				<?php echo Form::label('Comment');?>
				<?php echo Form::textarea('comment','',array('class'=>'form-control','placeholder'=>'comment','rows'=>'10'));?>
  </div>
	<div class="form-group">
				<?php echo Form::label('File Input');?>
				<?php echo Form::file('file',array('class'=>'form-control'));?>
		<p class="help-block">Example block-level help text here.</p>
	</div>
	<input type="hidden" name="post_id" value="<?php echo $items['id'];?>">
	<div class="action">
			<?php echo Form::submit('send')?>
		</div>
<?php echo Form::close();?>
</div>
