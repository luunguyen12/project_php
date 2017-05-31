<div class="col-md-8 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel panel-heading">add_edit_user</div>
		<form method="post" action="<?php echo $form_action ?>">
			<div class="row">
				<div class="col-md-2">Username</div>
				<div class="col-md-8">
					<input type="text" name="c_username" class="form-control" value="<?php echo isset($arr["c_username"])?$arr["c_username"]:""?>"<?php echo isset($arr["c_username"])?"disabled":""?>></div>
			</div>
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2">password</div>
				<div class="col-md-8">
					<input type="password" name="c_password" class="form-control" placeholder="<?php echo isset($arr["c_username"])?"nhập pass mới nếu đổi không để trống":""?>"<?php echo isset($c_username)?"required":"" ?>></div>
			</div>
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2">fullname</div>
				<div class="col-md-8">
					<input type="text" name="c_fullname" class="form-control" value="<?php echo isset($arr["c_fullname"])?$arr["c_fullname"]:""?>"></div>
			</div>
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<input type="submit" class="btn btn-primary" value="process"></div>
			</div>
		</form>
	</div>
</div>