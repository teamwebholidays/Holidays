<?php
	$MaTour = $_GET['matour'];

	$sql = "SELECT thongtintour.MaTour,TenTour,Gia, TenDongTour, ThoiGianTour, NgayKhoiHanh, URLHinh 
			FROM thongtintour, dongtour,hinhanhtour
			WHERE thongtintour.DongTour = dongtour.MaDongTour and thongtintour.MaTour = hinhanhtour.MaTour
			and thongtintour.MaTour = '".$MaTour."' 
			group by thongtintour.MaTour";
			$result = DataProvider::ExcuteQuery($sql);	

	$sql2 = "SELECT tendiadiem 
			FROM thongtintour, diadiem 
			WHERE thongtintour.NoiDen = diadiem.stt	 
			and MaTour = '".$MaTour."'";
	$result2 = DataProvider::ExcuteQuery($sql2);	
	$row2 = mysqli_fetch_row($result2);

	$NoiDen = $row2[0];

?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-danger">DU LỊCH <span style="text-transform: uppercase;"><?php echo $NoiDen?></span></h4>
		</div>
	</div>
	<?php
		while($row = mysqli_fetch_array($result))
		{
			$MaTour = $row['MaTour'];
			$TenTour = $row['TenTour'];
			$Gia = $row['Gia'];
			$DongTour = $row['TenDongTour'];
			$ThoiGianTour = $row['ThoiGianTour'];
			$NgayKhoiHanh = $row['NgayKhoiHanh'];
			$Hinh = $row['URLHinh'];

			$time=strtotime($NgayKhoiHanh);
			$month=date("m",$time);
			$year=date("Y",$time);
			$day=date("d", $time);

				
			include('layout/thumbdstour.php');
		}
	?>
</div>