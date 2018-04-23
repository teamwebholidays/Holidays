<?php
        $sql = "SELECT DISTINCT thongtintour.MaTour,TenTour,Gia, TenDongTour, ThoiGianTour, NgayKhoiHanh,TenTourURL,SoCho 
FROM thongtintour, dongtour,hinhanhtour
WHERE thongtintour.DongTour = dongtour.MaDongTour
ORDER BY NgayTaoTour DESC
LIMIT 0,15";
        $result = DataProvider::ExcuteQuery($sql);
?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-danger">DANH SÁCH TOUR MỚI NHẤT</h4>
		</div>
	</div>
	<?php
		while($row = mysqli_fetch_array($result))
		{
			$MaTour = $row['MaTour'];
			$TenTour = $row['TenTour'];
			$TenTourURL = $row['TenTourURL'];
			$Gia = $row['Gia'];
			$DongTour = $row['TenDongTour'];
			$ThoiGianTour = $row['ThoiGianTour'];
			$NgayKhoiHanh = $row['NgayKhoiHanh'];
			$time=strtotime($NgayKhoiHanh);
            $SoCho = $row['SoCho'];
			$month=date("m",$time);
			$year=date("Y",$time);
			$day=date("d", $time);
				
			include('layout/thumbdstourmoinhat.php');
		}
	?>
</div>