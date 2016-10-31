<div class="col-lg-12">
		<h2><?php echo $items['title']?></h2>
		<p>Created:<?php echo $items['created_at']?></p>
		<hr>
		<p><?php echo $items['body'];?></p>
		<p>
			<a class="btn btn-primary" href="/news/edit/<?php echo $items['id'];?>" role="button">edit</a>
			<a class="btn btn-danger" href="/news/view/<?php echo $items['id'];?>" role="button">delete</a>
		</p>
	</div>