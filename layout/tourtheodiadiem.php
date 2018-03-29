<?php
	$MaTour = $_GET['matour'];

	$sql = "SELECT MaTour,TenTour,Gia, DongTour, ThoiGianTour, NgayKhoiHanh, Hinh FROM tour 
			WHERE MaTour = ".$MaTour;
			$result = DataProvider::ExcuteQuery($sql);	

	$sql2 = "SELECT NoiDen FROM tour 
			WHERE MaTour = ".$MaTour;
	$result2 = DataProvider::ExcuteQuery($sql2);	
	$row2 = mysqli_fetch_row($result2);

	$NoiDen = $row2[0];

?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-danger">DU LỊCH <?php echo $NoiDen?></h4>
		</div>
	</div>
	<?php
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
	?>
</div>