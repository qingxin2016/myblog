<div class="row">
	<div class="col-lg-12 text-right">
		<a href="/user/create" class="btn btn-success">新規</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12">
		<table class="table table-hover">
		  <thead class="thead-default">
		    <tr class="success">
		      <th>#</th>
		      <th>Username</th>
		      <th>Email</th>
		      <th>Group</th>
		      <th>Last_login</th>
		      <th>Created_at</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php foreach ($data as $items):?>
		    <tr>
		      <th scope="row"><?php echo $items['id'];?></th>
		      <td><?php echo $items['username'];?></td>
		      <td><?php echo $items['email'];?></td>
		      <td><?php echo $items['group'];?></td>
		      <td><?php echo Date::forge($items['last_login']);?></td>
		      <td><?php echo Date::forge($items['created_at']);?></td>
		    </tr>
		    <?php endforeach;?>
		  </tbody>
		</table>
	</div>
</div>
