<div class="col-md-8 col-xs-offset-2">
	<div><a href="index.php?controller=add_edit_product&act=add" class="btn btn-primary">add_edit_product</a>
		<div class="panel panel-primary">
			<div class="panel-heading">product</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
					<tr>
						<th>stt</th>
						<th>img</th>
						<th>tên sản phẩm</th>
						
						<th>danh mục</th>
						<th></th>
					</tr>
					<?php
					$stt=0;
					foreach($arr as $rows)	
					{
						$stt++;
					?>
					<tr>
						<td style="text-align: center;"><?php echo $stt ?></td>
						<td>
				<?php if(file_exists("../".$rows["c_img"])) { ?>
				<img src="<?php echo "../".$rows["c_img"]?>" style="width: 100px;">
					<?php } ?>
						</td>
						<td>
							<?php
							echo $rows["c_name"];
							?>
						</td>
						
						<td>
							<?php
				$category=$this->model->fetch_one("select * from tbl_category_book where pk_category_book_id=".$rows["fk_category_book_id"]);
				echo isset($category["c_name"])?$category["c_name"]:"";
		
							?>
						</td>
						<td>
							<a href="index.php?controller=add_edit_product&act=edit&id=<?php echo $rows["pk_book_id"]?>" >edit</a>
							&nbsp;
							<a href="index.php?controller=product&act=delete&id=<?php echo $rows["pk_book_id"]?>" onclick="window.confirm('are you sure')">delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
				<ul class="pagination">

					<li><a href="">trang</a></li>
						<?php
						for($i=1;$i<=$num_page;$i++)
						{
						?>
					<li>
					<a href="index.php?controller=product&p=<?php echo $i?>"><?php echo $i?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	</div>
</div>