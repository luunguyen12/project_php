<div class="col-md-10 col-xs-offset-2">
	<div class="panel panel-primary">
	<div class="panel panel-heading">add_edit_category_product</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form?>">
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-3">danh sách sản phẩm</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="c_name" value="<?php echo isset($arr["c_name"])?$arr["c_name"]:""?>">
					</div>
					</div>
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-3"></div>
						<div class="col-md-9">
						<input type="submit" class ="btn btn-primary" value="process">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>