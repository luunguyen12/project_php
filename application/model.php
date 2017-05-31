<?php
class model 
{
	//duyet tat ca cac ban ghi
	public function fetch($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}
	//lay 1 ban ghi
	public function fetch_one($sql){
			global $con;
			$result = mysqli_query($con,$sql);
			$rows = mysqli_fetch_array($result);
			return $rows;
		}
	//thuc thi cau lenh truy van
	public function execute($sql)
	{
		global $con;
		mysqli_query($con,$sql);	
	}
	//dem so ban ghi
	public function count($sql)
	{
		global $con;
		$result=mysqli_query($con,$sql);
		return mysqli_num_rows($result);
	} 
}
?>