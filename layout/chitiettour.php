<?php
	$MaTour = $_GET['matour'];

	$sql = "SELECT MaTour,TenTour,Gia, DongTour, ThoiGianTour, NgayKhoiHanh, Hinh,NoiKhoiHanh, LuotXem FROM tour 
			WHERE MaTour = ".$MaTour;
			$result = DataProvider::ExcuteQuery($sql);	
			$row = mysqli_fetch_row($result);
?>

<div class="container maincttour">

	<div class="row">
		<h3><?php echo $row[1]?></h3>
	</div>

	<div class="row">
		<!-- div slideshow -->
		<div class="col-md-6">
			<img src="public/images/tour/<?php echo $row[6]?>" alt="Los Angeles" width="100%" height="100%">
		</div>
		<!--end div slideshow -->

		<div class="col-md-6">
			
			<div class="row"> 
				<div class="col-md-4"><p><b>Mã tour:</b></p></div>
				<div class="col-md-4"><p><?php echo $row[0]?></p></div>
				<div class="col-md-4"><i class="fa fa-eye">&nbsp;<b><?php echo $row[8]?> &nbsp;</b></i></div>
			</div>

			<div class="row"> 
				<div class="col-md-4"><p><b>Khởi hành:</b></p></div>
				<div class="col-md-4"><p><?php echo $row[5]?></p></div>
				<div class="col-md-4">
					<p><b>Dòng Tour:</b> <span class="text-danger"><?php echo $row[3]?></span></p></div>
			</div>

			<div class="row"> 
				<div class="col-md-4"><p><b>Nơi khởi hành:</b></p></div>
				<div class="col-md-4"><p><?php echo $row[7]?></p></div>
				<div class="col-md-4"><p><b>Thời gian:</b><?php echo $row[4]?> ngày</p></div>
			</div>

			<hr/>
			

			<div class="row" style="margin-top: 20px;">
				<div class="col-md-6" align="center" style="border:1px solid #B7B5B5">
					<h3 class="text-danger"><?php echo number_format($row[2])?> đ</h3>

					<p style="border-top: 1px solid #B7B5B5">Số chổ còn nhận : <span class="text-danger">9</span></p>
				</div>

				<div class="col-md-6 btndattour">
					<input type="submit" name="btndat" value="ĐẶT NGAY">
				</div>
			</div>
		</div>

	</div>
</div>

<?php
	$sqlupdate = "update tour set LuotXem = LuotXem + 1 
			WHERE MaTour = ".$MaTour;
			DataProvider::ExcuteQuery($sqlupdate);	
?>