<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel panel-heading">Thêm sản phẩm</div>
		<div class="panel-body">
			<form method="post" action=" <?php echo $form_control ?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">tên sản phẩm</div>
					<div class="col-md-8">
						<input type="text" name="c_name"  value="<?php echo isset($arr["c_name"])?$arr["c_name"]:""?>" class="form-control">
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">thuộc danh mục</div>
					<div class="col-md-8">
						<select name="fk_category_book_id">
						<?php
						$category=$this->model->fetch("select * from tbl_category_book");
						foreach($category as $rows_category)
						{

						?>
							<option <?php echo isset($arr["fk_category_book_id"]) &&$rows_category["pk_category_book_id"]==$arr["fk_category_book_id"]?"selected":""?> value="<?php echo $rows_category["pk_category_book_id"]?>"><?php echo $rows_category["c_name"]?></option>
							<?php } ?>
						</select>
						
					</div>

				</div>
					<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">giá</div>
					<div class="col-md-8">
						<input type="number" name="c_price" class="form-control" value="<?php echo isset($arr["c_price"])?$arr["c_price"]:""?>">
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">giới thiệu</div>
					<div class="col-md-8">
						<textarea name="c_description" class="form-control" style="height:300px;">
						<?php
							echo isset($arr["c_description"])?$arr["c_description"]:"";
						?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('c_description');
					</script>
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">chi tiết</div>
					<div class="col-md-8">
						<textarea name="c_content" class="form-control" style="height:300px;">
						<?php
						echo isset($arr["c_content"])?$arr["c_content"]:"";
						?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('c_content');
					</script>
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">ảnh</div>
					<div class="col-md-8">
						<input type="file" name="c_img">
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3"></div>
					<div class="col-md-8">
						<input type="checkbox" <?php echo isset($arr["c_sapxuatban"])&&$arr["c_sapxuatban"]==1? "checked":""?> name="c_sapxuatban" id="c_sapxuatban"> <label for="c_sapxuatban">Tin nổi bật</label>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>