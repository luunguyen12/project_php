<?php 
class login extends controller
{
	public function __construct()
	{
		parent::__construct();
		if (isset($_POST["btn_submit"])) 
		{
		// lấy thông tin người dùng
			$username = $_POST["username"];
			$password = md5($_POST["password"]);
			$username = strip_tags($username);
			$username = addslashes($username);
			$password = strip_tags($password);
			$password = addslashes($password);
			if ($username == "" || $password =="") 
			{
					echo "username hoặc password bạn không được để trống!";
			}
			else
			{
					$arr=$this->model->fetch_one("select * from tbl_users where username='$username' and password='$password'");
			if (!empty($arr))
                            {
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                               
				$_SESSION['username'] = $username;
                                // Thực thi hành động sau khi lưu thông tin vào session
				header("location:index.php");
                             }
                            else
                            {
                                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng !')</script>";
                            }
                            
                    }
               }

		

		include "view/view_login.php";
	}
}

new login();
?>