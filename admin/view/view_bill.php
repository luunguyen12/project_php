<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary" >
		<div class="panel-heading">
			bill
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
			
					<tr>
					
						<th>stt</th>
						<th>tên khách hàng</th>
						<th>địa chỉ</th>
						<th>số điện thoại</th>
						<th></th>
							
					</tr>
					<?php
					$stt=0;
					foreach($arr as $rows )
					{
						$stt++;
					
					?>
					<tr>
						<td style="text-align: center;"><?php echo $stt?></td>
						<td style="text-align: center;"><?php echo $rows["c_fullname"]?></td>
						<td style="text-align: center;"><?php echo $rows["c_address"]?></td>
						<td><?php echo $rows["c_phone"]?></td>
						
						<td>
							<a href="index.php?controller=bill_detail&order_id=<?php echo $rows["pk_order_id"]?>">chi tiết</a>&nbsp;
							<a href="index.php?controller=bill&act=delete&id=<?php echo $rows["pk_order_id"]?>">Delete</a>
						</td>
						<?php } ?>
					</tr>
				</table>
				<ul class="pagination">
					<li><a href="">trang</a></li>
					<?php
					for($i=1;$i<=$num_page;$i++)
					{
					?>
					<li><a href="index.php?controller=bill&p=<?php echo $i?>"><?php echo $i?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>