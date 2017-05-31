<div class="col-md-8 col-xs-offset-2">
	<div >
		<a href="index.php?controller=add_edit_user" class="btn btn-primary">add_user </a>
	</div>
		<div class="panel panel-primary">
			<div class="panel-heading">user</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
					<tr>
						<th>stt</th>
						<th>username</th>
						<th>fullname</th>
						<th></th>
					</tr>
					<?php
					$stt=0;
					foreach($arr as $rows)
					{
						$stt++;
					
					?>
					<tr>
						<td><?php echo $stt?></td>
						<td><?php echo $rows["c_username"]?></td>
						<td><?php echo $rows["c_fullname"]?></td>
						<td>
							<a href="index.php?controller=add_edit_user&act=edit&id=<?php echo $rows["pk_user_id"] ?>"> edit</a>
							&nbsp;
							<a href="index.php?controller=user&act=delete&id=<?php echo $rows["pk_user_id"]?>" onclick="window.confirm('are yoy sure')">delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
				<ul class="pagination">
  					<li class="disabled"><a href="#">&laquo;</a></li>
  			<?php
  			
  				for($i=1;$i<=$num_page;$i++)
  				{
  			?>
  				<li class="">
  					<a href="index.php?controller=user&p=<?php echo $i ?>"><?php echo $i?></a>
  				</li>
 			<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>