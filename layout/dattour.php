<?php
    include_once('database/DataProvider.php');

    $sqlNKH = "SELECT stt,tendiadiem FROM diadiem WHERE loaidiadiem = 'NKH'";
        
    $resultNKH = DataProvider::ExcuteQuery($sqlNKH);

    $sqlND = "SELECT stt,tendiadiem FROM diadiem";
        
    $resultND = DataProvider::ExcuteQuery($sqlND);

    $sqlLT = "SELECT MaLoai,TenLoai FROM loaitour";
        
    $resultLT = DataProvider::ExcuteQuery($sqlLT);

    $sqlDT = "SELECT MaDongTour,TenDongTour FROM dongtour";
        
    $resultDT = DataProvider::ExcuteQuery($sqlDT);
?>


<div class="dattour">
<div class="container">
        <form name="frmDatTour" action="tim_kiem_tour.php" method="POST">
            <h3>Tìm tour</h3>
            <div class="row form-group">
                <div class="col-md-6 col-sm-4 col-6">
                    <label>Nơi khởi hành</label>
                    <select class="form-control input-md" id="slNoiKhoiHanh" name="slNoiKhoiHanh">
                        <option value="0">Nơi Khởi Hành</option>
                        
                        
                        
                        <?php
                            $row = mysqli_fetch_array($resultNKH);
                            $STT = $row['stt'];
                            $NoiKhoiHanh = $row['tendiadiem'];
                        ?>
                         <option value="<?php echo $STT?>"><?php echo $NoiKhoiHanh?></option>
                        
                        
                        <?php
                            while($row = mysqli_fetch_array($resultNKH))
                            {

                                $STT = $row['stt'];
                                $NoiKhoiHanh = $row['tendiadiem'];
                                
                        ?>
                             <option value="<?php echo $STT?>"><?php echo $NoiKhoiHanh?></option>

                        <?php
                            }
                        ?>
                    </select> 
                </div>
                
                <div class="col-md-6 col-sm-4 col-6">
                    <label>Nơi Đến</label>
                    <select class="form-control input-md" id="slNoiDen" name="slNoiDen">
                         <option value="0">Nơi đến</option>
                        <?php
                            while($row = mysqli_fetch_array($resultND))
                                {
                                    $STT = $row['stt'];
                                    $NoiDen = $row['tendiadiem'];
                        ?>
                            <option value="<?php echo $STT?>"><?php echo $NoiDen?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="col-md-6 col-sm-4 col-6">
                    <label>Loại tour</label>
                    <select class="form-control input-md" id="slLoaiTour" name="slLoaiTour">
                        <option value="0">Loại tour</option>
                                <?php
                                    while($row = mysqli_fetch_array($resultLT))
                                        {
                                            $MaLoai = $row["MaLoai"];
                                            $TenLoai = $row['TenLoai'];
                                ?>
                                    <option value="<?php echo $MaLoai ?>"><?php echo $TenLoai?></option>
                                <?php
                                    }
                                ?>
                    </select> 
                </div>
                <div class="col-md-6 col-sm-4 col-6 datepicker-form">
                    <label>Ngày khởi hành</label>
                    <input type="text" placeholder="<?php echo date("d-m-Y") ?>" id="datepicker" class="form-control" name="ngaykhoihanh">
                    <i class="fa fa-calendar"></i>
                </div>

                <div class="col-md-6 col-sm-4 col-6">
                    <label>Giá tour</label>
                    <select class="form-control input-md" id="slGiaTour" name="slGiaTour">
                        <option value="0">Giá</option>
                        <option value="1"> Dưới 1 Triệu</option>
                        <option value="2">1-2 Triệu</option>
                        <option value="3">2-4 Triệu</option>
                        <option value="4">4-6 Triệu</option>
                        <option value="5">6-10 Triệu</option>
                        <option value="6">Trên 10 Triệu</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-4 col-6">
                    <label>Dòng tour</label>
                    <select class="form-control input-md" id="slDongTour" name="slDongTour">
                        <option value="0">Tất cả</option>
                                <?php
                                    while($row = mysqli_fetch_array($resultDT))
                                        {
                                            $MaDongTour = $row["MaDongTour"];
                                            $TenDongTour = $row["TenDongTour"];
                                ?>
                                    <option value="<?php echo $MaDongTour?>"><?php echo $TenDongTour?></option>
                                <?php
                                    }
                                ?>
                    </select>
                </div>

                <div class="col-md-6 col-sm-6 col-6">
                    <label>Tình trạng</label>
                    <select class="form-control input-md" id="slTinhTrang" name="slTinhTrang">
                        <option value="0">Tất cả</option>
                        <option value="1">Còn chỗ</option>
                        <option value="2">Hết chỗ</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <label>&nbsp;</label>
                    <div class="search-tour">
                        <button type="submit" class="btn btn-default col-md-8 col-sm-8" name="btntimtour">
                            <i class="fa fa-search"></i> <span>Tìm kiếm</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>