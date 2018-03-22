<div class="dattour">
<div class="container">
        <form name="frmDatTour" action="#" method="POST">
            <h3>Tìm tour</h3>
            <div class="row form-group">
                <div class="col-md-6 col-sm-4">
                    <label>Nơi khởi hành</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="0">Nơi khởi hành</option>
                        <option value="1"> Hồ Chí Minh</option>
                        <option value="3">Hà Nội</option>
                        <option value="4">Đà Nẵng</option>
                        <option value="5">Cần Thơ</option>
                        <option value="6">Hải Phòng</option>
                        <option value="7">Bình Dương</option>
                        <option value="8">Nha Trang</option>
                        <option value="10">Huế</option>
                        <option value="11">Quy Nhơn</option>
                        <option value="12">Đồng Nai</option>
                        <option value="13">Phú Quốc</option>
                        <option value="14">Long Xuyên</option>
                        <option value="15">Quảng Ngãi</option>
                        <option value="16">Vũng Tàu</option>
                        <option value="17">Quảng Ninh</option>
                        <option value="18">Buôn Ma Thuột</option>
                        <option value="19">Vinh</option>
                        <option value="20">Cà Mau</option>
                        <option value="22">Rạch Giá</option>
                        <option value="24">Đà; Lạt</option>
                        <option value="29">Thanh Hóa</option>
                        <option value="30">Quảng Bình</option>
                    </select> 
                </div>
                
                <div class="col-md-6 col-sm-4">
                    <label>Loại tour</label>
                        <div>
                            <select class="form-control input-md" id="departureID" name="departureID">
                                <option value="1">Tour trong nước</option>
                                <option value="3">Tuor nước ngoài</option>
                            </select>
                        </div>
                </div>

                <div class="col-md-6 col-sm-4">
                    <label>Nơi đến</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="0">Nơi đến</option>
                        <option value="1"> Hồ Chí Minh</option>
                        <option value="3">Hà Nội</option>
                        <option value="4">Đà Nẵng</option>
                        <option value="5">Cần Thơ</option>
                        <option value="6">Hải Phòng</option>
                        <option value="7">Bình Dương</option>
                        <option value="8">Nha Trang</option>
                        <option value="10">Huế</option>
                        <option value="11">Quy Nhơn</option>
                        <option value="12">Đồng Nai</option>
                        <option value="13">Phú Quốc</option>
                        <option value="14">Long Xuyên</option>
                        <option value="15">Quảng Ngãi</option>
                        <option value="16">Vũng Tàu</option>
                        <option value="17">Quảng Ninh</option>
                        <option value="18">Buôn Ma Thuột</option>
                        <option value="19">Vinh</option>
                        <option value="20">Cà Mau</option>
                        <option value="22">Rạch Giá</option>
                        <option value="24">Đà; Lạt</option>
                        <option value="29">Thanh Hóa</option>
                        <option value="30">Quảng Bình</option>
                    </select> 
                </div>
                <div class="col-md-6 col-sm-4">
                    <label>Ngày khởi hành</label>
<!--                    <input type="text" class="form-control"/>-->
                    <input type="text" name="ngaydatlich" id="datepicker" class="form-control" onchange="handler(event)" />
                </div>

                <div class="col-md-6 col-sm-4">
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
                <div class="col-md-6 col-sm-4">
                    <label>Dòng tour</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="1"> Tất cả</option>
                        <option value="2">Cao cấp</option>
                        <option value="3">Tiêu chuẩn</option>
                        <option value="4">Tiết kiệm</option>
                        <option value="5">Giá tốt</option>
                    </select>
                </div>

                <div class="col-md-6 col-sm-6">
                    <label>Tình trạng</label>
                    <select class="form-control input-md" id="departureID" name="departureID">
                        <option value="1"> Tất cả</option>
                        <option value="2">Còn chỗ</option>
                        <option value="3">Hết chỗ</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6">
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