<?php
    $sql="
    SELECT MaTour,TenTour,TenTourURL,Gia,NgayKhoiHanh,ThoiGianTour,SoCho,URLThumb,NgayTaoTour
    FROM thongtintour
    ORDER BY NgayTaoTour DESC
    LIMIT 0,6";
    $result = DataProvider::ExcuteQuery($sql);
?>
<div class="tourmoinhat">
    <div class="container">      
        <div class="row titleddyeuthich">
		<div class="col-md-12">
			<h2><i class="fa fa-globe"></i>&nbsp;TOUR MỚI NHẤT</h2>
            <hr/>
		</div>
        </div>
        
        <div class="row">
            <?php
                while($row = mysqli_fetch_array($result))
                {
                    $MaTour = $row['MaTour'];
                    $TenTour = $row['TenTour'];
                    $TenTourURL = $row['TenTourURL'];
                    $Gia = $row['Gia'];
                    $NgayKhoiHanh = $row['NgayKhoiHanh'];
                    $ThoiGianTour = $row['ThoiGianTour'];
                    $SoCho = $row['SoCho'];
                    $URLThumb = $row['URLThumb'];
            ?>
            <div class="news col-md-4 col-sm-6">
                <div class="thumb">
                    <a href="<?php echo $path?>chi-tiet-tour/<?php echo $TenTourURL?>-<?php echo $MaTour ?>.html"><img src="<?php echo $path?>public/images/tourmoinhat/<?php echo $MaTour?>-thumb.jpg"/></a>
                </div>
                <div class="title">
                    <a href="<?php echo $path?>chi-tiet-tour/<?php echo $TenTourURL?>-<?php echo $MaTour ?>.html"><p><?php echo $TenTour?></p></a>
                    <p><?php echo $Gia?> VND</p>
                    <div class="thongtin-tourmoinhat">
                        <div class="row">
                            <div class="col-md-8"><?php echo date("d/m/Y",strtotime($NgayKhoiHanh))?>&nbsp;&nbsp;|&nbsp;&nbsp;  <?php echo $ThoiGianTour?> ngày</div>
                            <div class="col-md-4">Còn <b><?php echo $SoCho?></b> chỗ</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="row xtc-button justify-content-center">
            <div class="col-4 col-sm-2 text-center">
                <a href="<?php echo $path?>danh-sach-tour-moi-nhat.html">Xem Tất Cả</a>
            </div>
        </div>
    </div>
</div>