<?php
	$sql = "SELECT thongtintour.MaTour,tendiadiem,LuotXem,URLHinh 
			FROM thongtintour,hinhanhtour,diadiem
			WHERE thongtintour.MaTour = hinhanhtour.MaTour 
				 and thongtintour.NoiDen = diadiem.stt
			GROUP by thongtintour.MaTour 
			order by LuotXem Desc 
			limit 0,8";
			$result = DataProvider::ExcuteQuery($sql);	
?>

<div class="container">
	<div class="row titleddyeuthich">
		<div class="col-md-12" align="center">
			<h2>ĐIỂM ĐẾN YÊU THÍCH</h2>
		</div>
	</div>

	<div class="row mainyeuthich">
	<?php
		while($row = mysqli_fetch_array($result))
		{
			$MaTour = $row['MaTour'];
			$NoiDen = $row['tendiadiem'];
			$LuotXem = $row['LuotXem'];
			$Hinh = $row['URLHinh'];
	?>
		<div class="col-md-3 ndyeuthich">
			<a href="tour_thuoc_dia_diem.php?matour=<?php echo $MaTour ?>"><img src="public/images/tour/<?php echo $Hinh?>" alt="Avatar" class="image" width="100%" height="100%"></a>
			  <div class="text-yeu-thich"><?php echo $NoiDen?></div>
			  <div class="text-yeu-thich_02">Đã có <?php echo $LuotXem?> lượt xem</div>
		</div>

	<?php
		}
	?>
	</div>
</div>