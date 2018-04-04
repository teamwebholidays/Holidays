<?php
	$noikhoihanh = '';
	if(isset($_POST['btntimtour']))
	{
		$noikhoihanh = $_POST['slNoiKhoiHanh'];

		$sql = "SELECT MaTour,TenTour,Gia, DongTour, ThoiGianTour, NgayKhoiHanh, Hinh FROM tour 
			WHERE NoiKhoiHanh like '%".$noikhoihanh."%'";
        $result = DataProvider::ExcuteQuery($sql);	
        $row = mysqli_fetch_array($result);
	}
?>

<div class="container maintimtour">
	<div class="row">
			<h6 class="text-danger">DANH SÁCH TOUR KHỞI HÀNH TỪ HỒ CHÍ MINH</h6>
	</div>

<?php
	if($row != null)
	{
		while($row = mysqli_fetch_array($result))
		{
			$MaTour = $row['MaTour'];
			$TenTour = $row['TenTour'];
			$Gia = $row['Gia'];
			$DongTour = $row['DongTour'];
			$ThoiGianTour = $row['ThoiGianTour'];
			$NgayKhoiHanh = $row['NgayKhoiHanh'];
			$Hinh = $row['Hinh'];

			$time=strtotime($NgayKhoiHanh);
			$month=date("m",$time);
			$year=date("Y",$time);
			$day=date("d", $time);

				
			include('layout/thumbdstour.php');
	}
}
else
{
	echo'<h5 class="text-info">KẾT QUẢ TÌM KIẾM RỖNG</h5>';
}

?>
</div>