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
					<img src="<?php echo $path?>public/images/tour/<?php echo $Hinh?>" title="an-do-nepal" width="100%">
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
							<div class="ribbon-repon">		

								<p><i class="fa fa-suitcase"></i>&nbsp;<?php echo $DongTour?></p>
							</div>
						</div>



						<div class="col-md-4 btnchitiettour">
							<h6 class="text-danger"><?php echo number_format($Gia)?> VNĐ</h6>
							<form>
								<button type="submit" name="chitiet" class="btn btn-danger">
									<a href="<?php echo $path?>chi-tiet-tour/<?php echo $TenTourURL?>-<?php echo $MaTour ?>.html">CHI TIẾT</a></button>
							</form>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>