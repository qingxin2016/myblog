<?php
use Fuel\Core\Session;
?>

<br>

<div class="row">
	<div class="col-lg-12 text-right">
		<a class="btn btn-info" href="/upload/create">Upload</a>
	</div>
</div>
<br>


<hr>
<div class="row">
	<div class="col-lg-12">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>PID</th>
		      <th>Title</th>
		      <th>Price</th>
		      <th>Num</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php foreach ($files as $items):?>
		    <tr>
		      <th scope="row"><?php echo $items['id']?></th>
		      <td><?php echo $items['pid']?></td>
		      <td><?php echo $items['title']?></td>
		      <td><?php echo $items['price']?></td>
		      <td><?php echo $items['number']?></td>
		    </tr>
		    <?php endforeach;?>
		    
		  </tbody>
		</table>
		<!--Paginationを表示する-->
		<?php echo Pagination::instance('mypagination')->render();?>
	</div>
</div>
