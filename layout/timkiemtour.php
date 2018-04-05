<?php
	$noikhoihanh = '';
	$noiden = '';
	$dongtour = '';
	$ngaykhoihanh = '';
	$loaitour='';
	$tinhtrang='';
	$gia='';

	if(isset($_POST['btntimtour']))
	{
		$noikhoihanh = $_POST['slNoiKhoiHanh'];
		$noiden = $_POST['slNoiDen'];
		$dongtour = $_POST['slDongTour'];
		$loaitour = $_POST['slLoaiTour'];
		$tinhtrang = $_POST['slTinhTrang'];
		$ngaykhoihanh = date( 'Y-m-d', strtotime($_POST['ngaykhoihanh'] ) );
		$gia = $_POST['slGiaTour'];
		$sqlgia='';
		if($gia == 1)
		{
			$sqlgia = 'Gia < 1000';
		}
		else if($gia == 2)
		{
			$sqlgia = 'Gia BETWEEN 1000 AND 2000';
		}
		else if($gia == 3)
		{
			$sqlgia = 'Gia BETWEEN 2000 AND 4000';
		}

		else if($gia == 4)
		{
			$sqlgia = 'Gia BETWEEN 4000 AND 6000';
		}

		else if($gia == 5)
		{
			$sqlgia = 'Gia BETWEEN 6000 AND 10000';
		}

		else if($gia == 6)
		{
			$sqlgia = 'Gia > 10000';
		}

		$sql = "SELECT thongtintour.`MaTour`,`TenTour`, Gia, TenDongTour, ThoiGianTour, NgayKhoiHanh, URLHinh
				FROM `thongtintour`, hinhanhtour, dongtour,diadiem
				WHERE hinhanhtour.MaTour = thongtintour.MaTour 
					and thongtintour.DongTour = dongtour.MaDongTour
					and NoiKhoiHanh = ".$noikhoihanh."
					and NoiDen = ".$noiden." 
					and	NgayKhoiHanh = '".$ngaykhoihanh."'
					and DongTour = '".$dongtour."'
					and MaLoai = ".$loaitour."
					and TinhTrang = ".$tinhtrang."
					and ".$sqlgia."
					limit 0,2";
        $result = DataProvider::ExcuteQuery($sql);	
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
}
else
{
	echo'<h5 class="text-info">KẾT QUẢ TÌM KIẾM RỖNG</h5>';
}

?>
</div>