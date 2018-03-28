<?php
    include_once('database/DataProvider.php');

    $sqlNKH = "SELECT distinct NoiKhoiHanh FROM tour";
        
    $resultNKH = DataProvider::ExcuteQuery($sqlNKH);

    $sqlND = "SELECT distinct NoiDen FROM tour";
        
    $resultND = DataProvider::ExcuteQuery($sqlND);

    $sqlLT = "SELECT TenLoai FROM loaitour";
        
    $resultLT = DataProvider::ExcuteQuery($sqlLT);

    $sqlDT = "SELECT distinct DongTour FROM tour";
        
    $resultDT = DataProvider::ExcuteQuery($sqlDT);
?>


<div class="dattour">
<div class="container">
        <form name="frmDatTour" action="#" method="POST">
            <h3>Tìm tour</h3>
            <div class="row form-group">
                <div class="col-md-6 col-sm-4 col-6">
                    <label>Nơi khởi hành</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                         <option value="0">Nơi Khởi Hành</option>
                        <?php
                            while($row = mysqli_fetch_array($resultNKH))
                            {
                                $NoiKhoiHanh = $row['NoiKhoiHanh'];
                        ?>
                             <option><?php echo $NoiKhoiHanh?></option>

                        <?php
                            }
                        ?>
                    </select> 
                </div>
                
                <div class="col-md-6 col-sm-4 col-6">
                    <label>Nơi Đến</label>
                        <div>
                            <select class="form-control input-md" id="departureID" name="departureID">
                                 <option value="0">Nơi đến</option>
                                <?php
                                    while($row = mysqli_fetch_array($resultND))
                                        {
                                             $NoiDen = $row['NoiDen'];
                                ?>
                                    <option><?php echo $NoiDen?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                </div>

                <div class="col-md-6 col-sm-4 col-6">
                    <label>Loại tour</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="0">Loại tour</option>
                                <?php
                                    while($row = mysqli_fetch_array($resultLT))
                                        {
                                             $TenLoai = $row['TenLoai'];
                                ?>
                                    <option><?php echo $TenLoai?></option>
                                <?php
                                    }
                                ?>
                    </select> 
                </div>
                <div class="col-md-6 col-sm-4 col-6 datepicker-form">
                    <label>Ngày khởi hành</label>
                    <input type="text" value="<?php echo date("d-m-Y") ?>" id="datepicker" class="form-control">
                    <i class="fa fa-calendar"></i>
                </div>

                <div class="col-md-6 col-sm-4 col-6">
                    <label>Giá tour</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
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
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="0">Tất cả</option>
                                <?php
                                    while($row = mysqli_fetch_array($resultDT))
                                        {
                                             $DongTour = $row['DongTour'];
                                ?>
                                    <option><?php echo $DongTour?></option>
                                <?php
                                    }
                                ?>
                    </select>
                </div>

                <div class="col-md-6 col-sm-6 col-6">
                    <label>Tình trạng</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="1"> Tất cả</option>
                        <option value="2">Còn chỗ</option>
                        <option value="3">Hết chỗ</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <label>&nbsp;</label>
                    <div class="search-tour">
                        <button type="submit" class="btn btn-default col-md-8 col-sm-8">
                            <i class="fa fa-search"></i> <span>Tìm kiếm</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>