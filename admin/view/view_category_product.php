<div class="col-md-9 col-xs-offset-2">
	<div  style="margin-bottom: 5px;">
	<a href="index.php?controller=add_edit_category_product&act=add" class="btn btn-primary">Thêm danh sách sản phẩm</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel panel-heading">Danh Sách Sản Phẩm</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
			
					<th>STT</th>
					<th>Danh Sách Sản Phẩm</th>
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
					<td><?php echo $rows["c_name"]?></td>
					<td>
						<a href="index.php?controller=add_edit_category_product&act=edit&id=<?php echo $rows["pk_category_book_id"]?>">Edit</a>&nbsp;
						<a href="index.php?controller=category_product&act=delete&id=<?php echo $rows["pk_category_book_id"]?>" onclick="return window.confirm('are you sure')" >Delete</a>
					</td>		
				</tr>
				<?php } ?>
			</table>
			<ul class="pagination">
				<li ><a href="#">trang</a>
					
				</li>
				<?php
				for($i=1;$i<=$num_page;$i++)
				{

				?>
				<li ><a href="index.php?controller=category_product&p=<?php echo $i?>"><?php echo $i ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>