<div class="row">
	<div class="col-lg-12 text-right">
		<a href="/user/create" class="btn btn-success">新規</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12">
		<table class="table table-hover">
		<colgroup>
			<col style="width: 8%;">
			<col style="width: 15%;">
			<col style="width: 15%;">
			<col style="width: 5%;">
			<col style="width: 15%;">
			<col style="width: 15%;">
			<col style="width: 17%;">
		</colgroup>
		  <thead class="thead-default">
		    <tr class="success">
		      <th class="text-center">ID</th>
		      <th class="text-center">Username</th>
		      <th class="text-center">Email</th>
		      <th class="text-center">Group</th>
		      <th class="text-center">Last_login</th>
		      <th class="text-center">Created_at</th>
		      <th></th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php foreach ($data as $items):?>
		    <tr>
		      <th scope="row" class="text-center"><?php echo $items['id'];?></th>
		      <td><?php echo $items['username'];?></td>
		      <td><?php echo $items['email'];?></td>
		      <td class="text-center"><?php echo $items['group'];?></td>
		      <td class="text-center"><?php echo Date::forge($items['last_login']);?></td>
		      <td class="text-center"><?php echo Date::forge($items['created_at']);?></td>
		      <td>
		      	<div class="btn-group">
				  <a type="button" class="btn btn-primary">Edit</a>
				  <a type="button" class="btn btn-warning">Reset</a>
				  <a type="button" class="btn btn-danger" href="/user/delete/<?php echo $items['username'];?>" onclick="javascript:return confirm('Are you sure to delete this news?')">Delete</a>
				</div>
		      </td>
		    </tr>
		    <?php endforeach;?>
		  </tbody>
		</table>
	</div>
</div>
