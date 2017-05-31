<div class="col-md-8 col-xs-offset-2">
	<div >
		<a href="index.php?controller=add_edit_news&act=add" class="btn btn-primary">add_news</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">news</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover"> 
				<tr>
					<th>stt</th>
					<th>ảnh</th>
					<th>tiêu đề</th>
					<th></th>
				</tr>
				<?php
				$stt=0;
				foreach($arr as $rows)
				{
					$stt++;
				?>
				<tr>
					<td style="text-align: center;">
						<?php echo $stt;?>
					</td>
					<td style="text-align: center;">
						<?php
					if($rows["c_img"]!= "")
					{
					?>
						<img src="<?php echo "../".$rows["c_img"]?>" style="width: 100px;">
			
					<?php } ?>
					</td>
					<td style="text-align: center;">
						<?php echo $rows["c_name"]?>
					</td>
					<td style="text-align: center;">
						<a href="index.php?controller=add_edit_news&act=edit&id=<?php echo $rows["pk_news_id"]?>">edit</a>
						<a href="index.php?controller=news&act=delete&id=<?php echo $rows["pk_news_id"]?>" onclick="window.confirm('are you sure')">delete</a>
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
					<a href="index.php?controller=news&p=<?php echo $i?>"><?php echo $i?></a>
					</li>
					<?php } ?>
			</ul>
		</div>
	</div>
</div>
