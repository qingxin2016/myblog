<?php
use Fuel\Core\Input;
?>
<div class="form-group">
	<div class="col-lg-12">
		<?php echo Form::label('Username','',array('class'=>'control-label'));?>
	</div>
	<div class="col-sm-12">
		<?php echo Form::input('username','',array('class'=>'form-control','placeholder'=>'Username','required'));?>
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
		<?php echo Form::label('Password','',array('class'=>'control-label'));?>
	</div>
	<div class="col-sm-12">
		<?php echo Form::input('password','',array('class'=>'form-control','placeholder'=>'password','type'=>'password','required'));?>
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
		<?php echo Form::label('Email','',array('class'=>'control-label'));?>
	</div>
	<div class="col-sm-12">
		<?php echo Form::input('email','',array('class'=>'form-control','placeholder'=>'Email','type'=>'email','required'));?>
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
		<?php echo Form::label('Group','',array('class'=>'control-label'));?>
	</div>
	<div class="col-sm-12">
		<?php echo Form::select('group','',array(
				'1'=>'管理者',
				'2'=>'編集者',
				'3'=>'ユーザ'
		),array('class'=>'form-control'));?>
	</div>
</div>