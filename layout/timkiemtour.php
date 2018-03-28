<?php
	$noikhoihanh = '';
	if(isset($_POST['btntimtour']))
	{
		$noikhoihanh = $_POST['slnoikhoihanh'];

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

				
?>
	<div class="row ndtimtour">

		<div class="col-md-1">
			<div class="boxngay">
				<p align="center"><span><?php echo $day?></span><br/> <!-- chổ này sẽ load ngày khở hành lên và tách ngày tháng năm ra nhé -->
				<?php echo $month?>/<?php echo $year?> </p>
			</div>
		</div>

		<div class="col-md-11 dstimtour">
			<div class="ribbon blue"><span><?php echo $DongTour?></span></div>

			<h6><?php echo $TenTour?></h6>

			<div class="row">
				<div class="col-md-3">
					<img src="public/images/tour/<?php echo $Hinh?>" title="an-do-nepal" width="100%">
				</div>

				<div class="col-md-9" style="margin-top: 20px;">
					 <div class="row">
						<div class="col-md-4">
							<p><i class="fa fa-barcode"></i>&nbsp;<?php echo $MaTour?></p>
							<p><i class="fa fa-calendar"></i>&nbsp;<?php echo $NgayKhoiHanh?></p>
						</div>

						<div class="col-md-4">
							<p><i class="fa fa-clock-o"></i>&nbsp;Thời gian : <?php echo $ThoiGianTour?> Ngày</p>
							<p><i class="fa fa-users"></i>&nbsp;28/3/2018</p>
						</div>

						<div class="col-md-4 btnchitiettour">
							<h6 class="text-danger"><?php echo number_format($Gia)?> VNĐ</h6>
							<form>
								<button type="submit" name="chitiet" class="btn btn-danger">CHI TIẾT</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	}
}
else
{
	echo'<h5 class="text-info">KẾT QUẢ TÌM KIẾM RỖNG</h5>';
}

?>
</div>