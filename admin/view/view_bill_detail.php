<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel panel-heading">bill_detail</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>stt</th>
					<th>ảnh</th>
					<th>tên sản phẩm</th>
					<th>số lượng</th>
					<th>đơn giá</th>					
				</tr>
				<tr>
				<?php
				$stt=0;
				foreach($arr as $rows)
				{
					$stt++;
					$book=$this->model->fetch_one("select * from tbl_book where pk_book_id=".$rows["fk_book_id"]);
				?>
				<td><?php echo $stt?></td>
				<td>
						<?php
							if($book["c_img"] != ""){
						?>
						<img src="../<?php echo $book["c_img"];?>" style="width:50px;">
						<?php } ?>
				</td>
				<td><?php echo $book["c_name"]?></td>
				<td><?php echo $rows["c_number"]?></td>
				<td><?php echo number_format( $rows["c_price"]) ;?> VNĐ</td>
				</tr>
				<?php } ?>
			</table>
			
		</div>
	</div>
</div>