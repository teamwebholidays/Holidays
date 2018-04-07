<?php
	$sql = "SELECT thongtintour.MaTour,tendiadiem,LuotXem,URLHinh,NoiDen
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
			$MaNoiDen = $row['NoiDen'];
	?>
		<div class="col-md-3 ndyeuthich">
			<div class="thumbnail text-center">
				<a href="<?php echo $path?>danh-sach-tour/<?php echo $MaNoiDen?>.html"><img src="public/images/tour/<?php echo $Hinh?>" alt="Avatar" class="image" width="100%" height="200em"></a>
				  <div class="caption">
				  	<h4><?php echo $NoiDen?></h4>
				  	<p>Đã có <?php echo $LuotXem?> lượt xem<p>
				 </div>
			</div>
		</div>

	<?php
		}
	?>
	</div>
</div>