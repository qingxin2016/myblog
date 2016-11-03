<ul>
<?php if ($comments):?>
		<?php foreach ($comments as $comment):?>
	
			<li class="text-muted"><span class="glyphicon glyphicon-pencil"></span>
			<?php echo $comment['ccomment'];?>
			<br>
			<?php if($comment['filename']):?>
			<img src="/files/<?php echo $comment['filename'];?>" alt="..." class="img-thumbnail " style="width: 140px;height:140px;">
			<br><br>
			<?php endif;?>
			
			<span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;<span><?php echo $comment['created_time'];?></span>
			</li>
			<br>
		<?php endforeach;?>
		
		
	<?php endif;?>
	</ul>