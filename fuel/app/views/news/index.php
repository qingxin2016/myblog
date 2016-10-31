<?php
use Fuel\Core\Str;
?>

<!-- Example row of columns -->
<div class="row">
<?php foreach ($news as $items):?>
	<div class="col-lg-12">
		<h2><?php echo $items['title']?></h2>
		<p>Created:<?php echo $items['created_at']?></p>
		<p><?php echo Str::truncate($items['body'], 200);?></p>
		<p>
			<a class="btn btn-primary" href="/news/view/<?php echo $items['id'];?>" role="button">View details
				&raquo;</a>
		</p>
	</div>
	<?php endforeach;?>
</div>
