<?php
use Fuel\Core\Asset;
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

    <title><?php echo $title;?></title>

    <?php echo Asset::css('bootstrap.min.css');?>
    <?php echo Asset::css('justified-nav.css');?>

  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted"><?php echo $title;?></h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="nav-item"><a class="nav-link<?php echo (strstr(Uri::current(), '/news')&&$_SERVER['REQUEST_URI']!='/news/add'? ' active' : '');?>" href="/news">Home</a></li>
            <li class="nav-item"><a class="nav-link<?php echo (strstr(Uri::current(), '/news/add')? ' active' : '');?>" href="/news/add">Add</a></li>
            <li class="nav-item"><a class="nav-link" href="/bbs">BBS</a></li>
            <li class="nav-item"><a class="nav-link<?php echo (strstr(Uri::current(), '/upload')? ' active' : '');?>" href="/upload">Upload</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <br>
	  <?php if (Session::get_flash('success')):?>
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-success"><?php echo Session::get_flash('success');?></div>
			</div>
		</div>
	  <?php endif;?>
	  
      <?php echo $content;?>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2016</p>
      </footer>

    </div> <!-- /container -->


    
  </body>
</html>
