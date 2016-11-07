<?php
use Fuel\Core\Asset;
use Fuel\Core\Form;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <?php echo Asset::css('bootstrap.min.css');?>
    <?php echo Asset::css('signin.css');?>

    
  </head>

  <body>

    <div class="container">


      <?php echo Form::open(array('action'=>'login/index','class'=>'form-signin'));?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php if (isset($error)): ?>
		<p class="alert alert-danger"><?php echo $error ?></p>
		<?php endif ?>
        <?php echo Form::input('username','',array('class'=>'form-control','placeholder'=>'Username','required autofocus'))?>

        <?php echo Form::input('password','',array('class'=>'form-control','placeholder'=>'Password','type'=>'password','required'))?>
        <div class="checkbox">
          <label>
          <?php echo Form::checkbox('remember','','',array('checked'));?>
			Remember me
          </label>
        </div>
        <?php echo Form::submit('send','ログイン',array('class'=>'btn btn btn-lg btn-primary btn-block'));?>
      <?php echo Form::close();?>

    </div> <!-- /container -->

  </body>
</html>
