<?php
class slide extends controller
{
	public function __construct()
	{
		parent::__construct();
		include "view/view_slide.php";

	}
}
new slide();
?>