<?php
	$sql = "SELECT thongtintour.MaTour,diadiem.tendiadiem,thongtintour.LuotXem,hinhanhtour.URLHinh,thongtintour.NoiDen,tendiadiemurl
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
		<div class="col-md-12">
			<h2><i class="fa fa-globe"></i>&nbsp;ĐIỂM ĐẾN YÊU THÍCH</h2>
			<hr/>
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
			$TenDiaDiemURL = $row['tendiadiemurl']
	?>
		<div class="col-md-3 ndyeuthich">
			<div class="thumbnail text-center">
				<a href="<?php echo $path?>danh-sach-tour/<?php echo $TenDiaDiemURL?>-<?php echo $MaNoiDen?>.html"><img src="public/images/tour/<?php echo $Hinh?>" alt="Avatar" class="image" width="100%" height="200em"></a>
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
    <div class="row xtc-button justify-content-center">
        <div class="col-4 col-sm-2 text-center">
            <a href="#">Xem Tất Cả</a>
        </div>
    </div>
</div>