<?php
    if(isset($_GET['matour']))
    {
        $MaTour = $_GET['matour'];
        $sql = "SELECT thongtintour.MaTour,TenTour,Gia, TenDongTour, ThoiGianTour, NgayKhoiHanh,tendiadiem, LuotXem 
                FROM thongtintour,dongtour,hinhanhtour,diadiem
                WHERE thongtintour.DongTour = dongtour.MaDongTour and thongtintour.NoiDen = diadiem.stt
                and thongtintour.MaTour = '".$MaTour."'
                Group by thongtintour.MaTour";
                $result = DataProvider::ExcuteQuery($sql);  
                $row = mysqli_fetch_row($result);
        $sqlhinh = "select URLHinh FROM hinhanhtour where MaTour ='".$MaTour."'";
        $resulthinh = DataProvider::ExcuteQuery($sqlhinh);
    }
?>

<div class="container maincttour">
    <div class="row">
        <h3><?php echo $row[1]?></h3>
    </div>

    <div class="row">
        <!-- div slideshow -->
        <div class="col-md-7 slide-cttour">
            <div id="slideshow" class="carousel slide" data-ride="carousel">
  
              <!-- The slideshow -->
                <div class="carousel-inner">
                 <?php 
                    $row2 = mysqli_fetch_array($resulthinh);
                    $hinh = $row2['URLHinh'];
                  ?>
                <div class="carousel-item active" style="background-image: url(<?php echo $path?>public/images/tour/<?php echo $hinh?>)"></div>
                  
                <?php
                while($row2 = mysqli_fetch_array($resulthinh))
                {
                    $hinh = $row2['URLHinh'];
                       
                ?>
                  
                <div class="carousel-item" style="background-image: url(<?php echo $path?>public/images/tour/<?php echo $hinh?>)"></div>
                <?php
                    }
                ?>
                  
                </div>

              <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slideshow" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="col-md-5 col-12">
            <div class="row"> 
                <div class="col-md-4"><p><b>Mã tour:</b></p></div>
                <div class="col-md-8"><p><?php echo $row[0]?></p></div>
            </div>

            <div class="row">
                <div class="col-md-4">
                     <p><b>Nơi khởi hành:</b></p> 
                </div>
                <div class="col-md-8">
                    <p><?php echo $row[6]?></p>
                </div>
            </div>

            <div class="row"> 
                <div class="col-md-4"><b>Dòng Tour:</b></div>
                <div class="col-md-4"><span class="text-danger"><b><?php echo $row[3]?></b></span></div>
                <div class="col-md-4"><p><b>Thời gian: </b><?php echo $row[4]?> ngày</p></div>
            </div>

            <div class="row"> 
                <div class="col-md-4"><p><b>Khởi hành:</b></p></div>
                <div class="col-md-4"><p><?php echo $row[5]?></p></div>
                <div class="col-md-4"><i class="fa fa-eye"></i>&nbsp;<b><?php echo $row[7]?></b> Lượt xem</div>
            </div>

           

            <hr/>
            

            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6" align="center" style="border:1px solid #B7B5B5">
                    <h3 class="text-danger"><?php echo number_format($row[2])?> đ</h3>

                    <p style="border-top: 1px solid #B7B5B5">Số chổ còn nhận : <b><span class="text-danger">9</span></b></p>
                </div>

                <div class="col-md-6 btndattour">
                    <input type="submit" name="btndat" value="ĐẶT NGAY">
                </div>
            </div>
        </div>
    </div>
</div>
<!--    PHAN CONG PHAT-->
<div class="container noidungchitiettour">
    <div class="row">
        <div class="col-md-9">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-ctrinhtour-tab" data-toggle="tab" href="#nav-ctrinhtour" role="tab" aria-controls="nav-ctrinhtour" aria-selected="true">Chương trình tour</a>
                    <a class="nav-item nav-link" id="nav-ctiettour-tab" data-toggle="tab" href="#nav-ctiettour" role="tab" aria-controls="nav-ctiettour" aria-selected="false">Chi tiết tour</a>
                    <a class="nav-item nav-link" id="nav-luuy-tab" data-toggle="tab" href="#nav-luuy" role="tab" aria-controls="nav-luuy" aria-selected="false">Lưu ý</a>
                    <a class="nav-item nav-link" id="nav-lhe-tab" data-toggle="tab" href="#nav-lhe" role="tab" aria-controls="nav-lhe" aria-selected="false">Liên hệ</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-ctrinhtour" role="tabpanel" aria-labelledby="nav-ctrinhtour-tab">
                    <div class="container nav-ctrinhtour-content">
                        <div class="row">
                            <div class="col-md-2 ctt-day">Ngày 1</div>
                            <div class="col-md-10 ctt-trip"><span>tp.hồ chí minh - HÀ NỘI –BÁI ĐÍNH –TRÀNG AN</span> <span>Số bữa ăn: 2 bữa (trưa, chiều)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: 
    - Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất.
    - Khu Du Lịch Tràng An: di sản văn hóa &amp; thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt.
    Nghỉ đêm tại Ninh Bình</div>
                        </div>
                    </div>
                    <div class="container nav-ctrinhtour-content">
                        <div class="row">
                            <div class="col-md-2 ctt-day">Ngày 2</div>
                            <div class="col-md-10 ctt-trip"><span>tp.hồ chí minh - HÀ NỘI –BÁI ĐÍNH –TRÀNG AN</span> <span>Số bữa ăn: 2 bữa (trưa, chiều)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: 
    - Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất.
    - Khu Du Lịch Tràng An: di sản văn hóa &amp; thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt.
    Nghỉ đêm tại Ninh Bình</div>
                        </div>
                    </div>
                    <div class="container nav-ctrinhtour-content">
                        <div class="row">
                            <div class="col-md-2 ctt-day">Ngày 3</div>
                            <div class="col-md-10 ctt-trip"><span>tp.hồ chí minh - HÀ NỘI –BÁI ĐÍNH –TRÀNG AN</span> <span>Số bữa ăn: 2 bữa (trưa, chiều)</span>
                            </div>
                        </div>
                        <div class="row">
                            <div>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: 
    - Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất.
    - Khu Du Lịch Tràng An: di sản văn hóa &amp; thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt.
    Nghỉ đêm tại Ninh Bình</div>
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="nav-ctiettour" role="tabpanel" aria-labelledby="nav-ctiettour-tab">
                    <div class="container">
                        <div class="row">
                            <p style="text-transform: uppercase; color: #333; font-weight: 600; font-size: 17px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-plane" aria-hidden="true"></i> &nbsp; THÔNG TIN CHUYẾN BAY</p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                      <td>Ngày đi: 04/04/2018 06:55</td>
                                      <td>Đến: 04/04/2018 07:55</td>
                                      <td>Chuyến bay: VJ321</td>
                                    </tr>
                                    <tr>
                                      <td>Ngày về: 06/04/2018 11:45</td>
                                      <td>Đến: 06/04/2018 12:45</td>
                                      <td>Chuyến bay: VJ322</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row">
                            <p style="text-transform: uppercase; color: #333; font-weight: 600; font-size: 17px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-building" aria-hidden="true"></i> &nbsp; THÔNG TINH KHÁCH SẠN</p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                      <td>Đang cập nhật</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row">
                            <p style="text-transform: uppercase; color: #333; font-weight: 600; font-size: 17px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-user" aria-hidden="true"></i> &nbsp; THÔNG TINH HƯỚNG DẪN VIÊN</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="font-weight: 600;font-size: 17px;">
                                        <td>Họ tên</td>
                                        <td>Địa chỉ</td>
                                        <td>Điện thoại</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CHỜ BÁO SAU</td>
                                        <td>Quản Nam</td>
                                        <td>Đang cập nhật</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row">
                            <p style="text-transform: uppercase; color: #333; font-weight: 600; font-size: 17px; margin-bottom: 15px; margin-top: 10px"><i class="fa fa-suitcase" aria-hidden="true"></i> &nbsp; GIÁ TOUR VÀ PHỤ THU PHÒNG ĐƠN</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="font-weight: 600;font-size: 17px;">
                                        <td>Loại khách</td>
                                        <td>Giá tour</td>
                                        <td>Land tour</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Người lớn(Từ 12 tuổi trở lên)</td>
                                        <td>4.000.000 đ</td>
                                        <td>3.500.000 đ</td>
                                    </tr>
                                    <tr>
                                        <td>Trẻ em(Từ 5 - 12 tuổi)</td>
                                        <td>3.000.000 đ</td>
                                        <td>3.200.000 đ</td>
                                    </tr>
                                    <tr>
                                        <td>Trẻ nhỏ(Từ 2 - 5 tuổi)</td>
                                        <td>2.000.000 đ</td>
                                        <td>0 đ</td>
                                    </tr>
                                    <tr>
                                        <td>Em bé(Dưới 2 tuổi)</td>
                                        <td>220.000 đ</td>
                                        <td>0 đ</td>
                                    </tr>
                                    <tr style="color: #fb0">
                                        <td>Phụ thu phòng đơn</td>
                                        <td>1.000.000 đ</td>
                                        <td>1.500.000 đ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-luuy" role="tabpanel" aria-labelledby="nav-luuy-tab">
                    <div style="text-align: justify;">
            <strong>**Qu&yacute; kh&aacute;ch lưu &yacute;: Giờ bay phụ thuộc v&agrave;o h&atilde;ng h&agrave;ng kh&ocirc;ng, số bữa ăn phụ thuộc v&agrave;o giờ bay**</strong></div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>Gi&aacute; tour bao gồm:&nbsp;</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Xe tham quan (15, 25, 35, 45 chỗ t&ugrave;y theo số lượng kh&aacute;ch) theo chương tr&igrave;nh</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>V&eacute; m&aacute;y bay khứ hồi&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Kh&aacute;ch sạn 2 - 3 sao theo ti&ecirc;u chuẩn 2 kh&aacute;ch/ph&ograve;ng hoặc 3 kh&aacute;ch/ph&ograve;ng&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>V&eacute; tham quan theo chương tr&igrave;nh &nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Hướng dẫn vi&ecirc;n tiếng Việt nối tuyến</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>N&oacute;n PCP + Nước suối + Khăn lạnh&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Thuế VAT&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>V&eacute; c&aacute;p treo H&ograve;n Thơm</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>Gi&aacute; tour kh&ocirc;ng bao gồm:&nbsp;</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Chi ph&iacute; c&aacute; nh&acirc;n: ăn uống ngo&agrave;i chương tr&igrave;nh, giặt ủi, chi ph&iacute; hủy đổi h&agrave;nh tr&igrave;nh v&agrave; n&acirc;ng hạng chuyến bay, h&agrave;nh l&yacute; qu&aacute; cước, phụ thu ph&ograve;ng đơn,&hellip;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Chi ph&iacute; tham quan ngo&agrave;i chương tr&igrave;nh</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Ph&iacute; tắm b&ugrave;n kho&aacute;ng&nbsp;</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>Gi&aacute; v&eacute; trẻ em:&nbsp;</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trẻ em dưới 5 tuổi: &nbsp;kh&ocirc;ng thu ph&iacute; dịch vụ, bố mẹ tự lo cho b&eacute; v&agrave; thanh to&aacute;n c&aacute;c chi ph&iacute; ph&aacute;t sinh (đối với c&aacute;c dịch vụ t&iacute;nh ph&iacute; theo chiều cao&hellip;). Hai người lớn chỉ được k&egrave;m 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 sẽ đ&oacute;ng ph&iacute; theo qui định d&agrave;nh cho độ tuổi từ 5 đến dưới 12 tuổi v&agrave; phụ thu ph&ograve;ng đơn. &nbsp;V&eacute; m&aacute;y bay, t&agrave;u hỏa, phương tiện vận chuyển c&ocirc;ng cộng mua v&eacute; theo qui định của c&aacute;c đơn vị vận chuyển.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trẻ em từ 5 - dưới 12 tuổi: phải mua 75% v&eacute; tour trọn g&oacute;i bao gồm phương tiện vận chuyển, ăn uống theo chương tr&igrave;nh, v&eacute; tham quan đối với c&aacute;c điểm t&iacute;nh ph&iacute; theo độ tuổi/chiều cao (lưu &yacute; b&eacute; ngủ chung với cha mẹ). Hai người lớn chỉ được k&egrave;m 1 trẻ em từ 5 - dưới 12 tuổi, em thứ hai trở l&ecirc;n phải mua 1 suất giường đơn.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trẻ em 12 tuổi trở l&ecirc;n: phải mua v&eacute; tour trọn g&oacute;i như người lớn bao gồm phương tiện vận chuyển, kh&aacute;ch sạn, ăn uống theo chương tr&igrave;nh, v&eacute; tham quan theo qui định c&aacute;c điểm tham quan.</div>
        <div style="text-align: justify;">
            <strong>-<span class="Apple-tab-span" style="white-space:pre"> </span>Lưu &yacute;: </strong>trong trường hợp Qu&yacute; kh&aacute;ch c&oacute; nhu cầu tự mua v&eacute; tham quan, ch&uacute;ng t&ocirc;i sẵn s&agrave;ng tư vấn để Qu&yacute; kh&aacute;ch chọn mua tour F&amp;E hoặc tour theo nh&oacute;m ri&ecirc;ng, theo dạng tour n&agrave;y Qu&yacute; kh&aacute;ch c&oacute; thể tự chọn c&aacute;c dịch vụ theo nhu cầu.</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>Điều kiện thanh to&aacute;n:&nbsp;</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Khi đăng k&yacute; đặt cọc 50% số tiền tour</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Số tiền c&ograve;n lại thanh to&aacute;n hết trước ng&agrave;y khởi h&agrave;nh 7-10 ng&agrave;y (&aacute;p dụng tour ng&agrave;y thường), trước ng&agrave;y khởi h&agrave;nh 20-25 ng&agrave;y (&aacute;p dụng tour lễ tết)&nbsp;</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>C&aacute;c điều kiện khi đăng k&yacute; tour:&nbsp;</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Đối với Kh&aacute;ch Quốc tịch Việt Nam: Khi đi tour Trẻ em từ 14 tuổi trở l&ecirc;n v&agrave; người lớn cần đem theo CMND/Passport (Hộ chiếu) bản ch&iacute;nh c&ograve;n hạn sử dụng, h&igrave;nh ảnh r&otilde; (CMND c&oacute; thời hạn sử dụng kh&ocirc;ng qu&aacute; 15 năm, t&iacute;nh từ ng&agrave;y cấp)/ Giấy khai sinh bản ch&iacute;nh (trẻ em dưới 14 tuổi), trẻ em tr&ecirc;n 14 tuổi bắt buộc phải c&oacute; CMND hoặc Passport l&agrave;m thủ tục l&ecirc;n m&aacute;y bay. &nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Đối với kh&aacute;ch Nước ngo&agrave;i/Việt Kiều: Khi đi tour phải mang theo đầy đủ Passport (Hộ Chiếu) bản ch&iacute;nh c&ograve;n hạn sử dụng hoặc thẻ xanh k&egrave;m theo Visa v&agrave; giấy t&aacute;i xuất nhập Việt Nam l&agrave;m thủ tục l&ecirc;n m&aacute;y bay. &nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Khi đăng k&yacute; tour Qu&yacute; kh&aacute;ch vui l&ograve;ng mang theo CMND/Passport bản ch&iacute;nh hoặc cung cấp t&ecirc;n ch&iacute;nh x&aacute;c đầy đủ, đ&uacute;ng từng k&yacute; tự tr&ecirc;n CMND/ Passport (Hộ chiếu)/Giấy khai sinh (trẻ em dưới 14 tuổi) theo thứ tự: Họ/t&ecirc;n l&oacute;t/t&ecirc;n. Qu&yacute; kh&aacute;ch khi đăng k&yacute; cung cấp t&ecirc;n theo giấy tờ t&ugrave;y th&acirc;n n&agrave;o, khi đi tour phải mang theo giấy tờ t&ugrave;y th&acirc;n đ&oacute; theo qui định h&atilde;ng h&agrave;ng kh&ocirc;ng&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trong trường hợp Qu&yacute; kh&aacute;ch cung cấp t&ecirc;n sai, đến trễ giờ bay, vui l&ograve;ng chịu ph&iacute; đổi v&eacute; hoặc mua lại v&eacute; mới theo quy định của H&atilde;ng H&agrave;ng Kh&ocirc;ng (nếu chuyến bay c&ograve;n chỗ).&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trong trường hợp Qu&yacute; kh&aacute;ch bay h&atilde;ng h&agrave;ng kh&ocirc;ng Vietjet v&agrave; Jetstar, v&eacute; kh&ocirc;ng ho&agrave;n, kh&ocirc;ng dời, đổi, huỷ, sai t&ecirc;n mất 100% theo qui định h&atilde;ng h&agrave;ng kh&ocirc;ng. Gi&aacute; v&eacute; m&aacute;y bay trẻ em bằng 100% người lớn.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trong trường hợp Qu&yacute; kh&aacute;ch bay h&atilde;ng h&agrave;ng kh&ocirc;ng Vietnam Air. V&eacute; m&aacute;y bay khuyến m&atilde;i kh&ocirc;ng ho&agrave;n, kh&ocirc;ng đổi, hủy, sai t&ecirc;n mất 100% theo qui định h&atilde;ng h&agrave;ng kh&ocirc;ng. V&eacute; Vietnam Airlines &nbsp;kh&ocirc;ng bay chặng đi, tự động hủy chặng về. Gi&aacute; v&eacute; m&aacute;y bay trẻ em bằng 75% v&eacute; người lớn.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Gi&aacute; v&eacute;, giờ bay c&oacute; thể thay đổi theo H&atilde;ng H&agrave;ng Kh&ocirc;ng (Vietnam Airlines, Vietjet, Jetstar) kh&ocirc;ng thể b&aacute;o trước.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Do c&aacute;c chuyến bay phụ thuộc v&agrave;o c&aacute;c h&atilde;ng H&agrave;ng Kh&ocirc;ng n&ecirc;n trong một số trường hợp giờ bay c&oacute; thể thay đổi m&agrave; kh&ocirc;ng được b&aacute;o trước. T&ugrave;y v&agrave;o t&igrave;nh h&igrave;nh thực tế, Chương tr&igrave;nh v&agrave; điểm tham quan c&oacute; thể linh động thay đổi thứ tự c&aacute;c điểm ph&ugrave; hợp điều kiện giờ bay v&agrave; thời tiết thực tế. PCP sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm bảo đảm c&aacute;c điểm tham quan trong trường hợp:</div>
        <div style="text-align: justify;">
            + Xảy ra thi&ecirc;n tai: b&atilde;o lụt, hạn h&aacute;n, động đất&hellip;</div>
        <div style="text-align: justify;">
            + Sự cố về an ninh: khủng bố, biểu t&igrave;nh</div>
        <div style="text-align: justify;">
            + Sự cố về h&agrave;ng kh&ocirc;ng: trục trặc kỹ thuật, an ninh, dời, hủy, ho&atilde;n chuyến bay.</div>
        <div style="text-align: justify;">
            Nếu những trường hợp tr&ecirc;n xảy ra, PCP sẽ xem x&eacute;t để ho&agrave;n trả chi ph&iacute; kh&ocirc;ng tham quan cho kh&aacute;ch trong điều kiện c&oacute; thể (sau khi đ&atilde; trừ lại c&aacute;c dịch vụ đ&atilde; thực hiện&hellip;.v&agrave; kh&ocirc;ng chịu tr&aacute;ch nhiệm bồi thường th&ecirc;m bất kỳ chi ph&iacute; n&agrave;o kh&aacute;c).</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Sau khi Qu&yacute; kh&aacute;ch đ&atilde; l&agrave;m thủ tục H&agrave;ng Kh&ocirc;ng v&agrave; nhận thẻ l&ecirc;n m&aacute;y bay, đề nghị Qu&yacute; kh&aacute;ch giữ cẩn thận v&agrave; lưu &yacute; l&ecirc;n m&aacute;y bay đ&uacute;ng giờ. PCP kh&ocirc;ng chịu tr&aacute;ch nhiệm trong trường hợp kh&aacute;ch l&agrave;m mất thẻ l&ecirc;n m&aacute;y bay v&agrave; kh&ocirc;ng l&ecirc;n m&aacute;y bay đ&uacute;ng theo giờ quy định của H&agrave;ng Kh&ocirc;ng.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Giờ nhận ph&ograve;ng kh&aacute;ch sạn: sau 14:00 giờ v&agrave; trả ph&ograve;ng trước 12:00 giờ &nbsp;&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Ph&ograve;ng kh&aacute;ch sạn/resort c&oacute; thể xảy ra trường hợp ph&ograve;ng kh&ocirc;ng gần nhau, kh&ocirc;ng c&ugrave;ng tầng, loại ph&ograve;ng một giường đ&ocirc;i hoặc hai giường đơn kh&ocirc;ng theo y&ecirc;u cầu, t&ugrave;y t&igrave;nh h&igrave;nh thực tế từng kh&aacute;ch sạn/Resort.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trường hợp qu&yacute; kh&aacute;ch tham gia tour 01 kh&aacute;ch, bắt buộc đ&oacute;ng th&ecirc;m tiền phụ thu ph&ograve;ng đơn để ở ri&ecirc;ng 01 ph&ograve;ng. Trường hợp trong đo&agrave;n cũng c&oacute; kh&aacute;ch đi 01 m&igrave;nh, c&ugrave;ng giới t&iacute;nh v&agrave; c&oacute; nhu cầu muốn gh&eacute;p c&ugrave;ng ph&ograve;ng với qu&yacute; kh&aacute;ch th&igrave; PCP sẽ ho&agrave;n lại tiền phụ thu ph&ograve;ng đơn cho qu&yacute; kh&aacute;ch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Trường hợp qu&yacute; kh&aacute;ch đi nh&oacute;m 03 kh&aacute;ch, PCP sẽ cung cấp 01 ph&ograve;ng d&agrave;nh cho 03 kh&aacute;ch l&agrave; 01 giường lớn 1m6 v&agrave; 01 giường phụ di động từ 0.8 - 1,2m (extrabed) hoặc 01 nệm đơn t&ugrave;y từng kh&aacute;ch sạn/Resort. Trong trường &nbsp;qu&yacute; kh&aacute;ch c&oacute; nhu cầu ở ri&ecirc;ng, vui l&ograve;ng đ&oacute;ng th&ecirc;m tiền phụ thu ph&ograve;ng đơn theo qui định&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Th&ocirc;ng tin h&agrave;nh l&yacute; khi đi tour : X&aacute;ch tay dưới 7kg/1kh&aacute;ch - K&iacute;ch thước kh&ocirc;ng qu&aacute;: 56cm x 36cm x 23 cm, chất lỏng với thể t&iacute;ch kh&ocirc;ng qu&aacute; 100ml. K&yacute; gửi: 20kg/1kh&aacute;ch - K&iacute;ch thước kh&ocirc;ng qu&aacute;: 119cm x 119cm x 81cm. C&aacute;c vật phẩm kh&ocirc;ng được chấp nhận dưới dạng h&agrave;nh l&yacute; k&yacute; gởi hoặc vận chuyển trong h&agrave;nh l&yacute; theo qui định h&agrave;ng kh&ocirc;ng</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Th&ocirc;ng tin tập trung : Tại s&acirc;n bay T&acirc;n Sơn Nhất, Ga đi trong nước, trước giờ bay 2 tiếng (&aacute;p dụng ng&agrave;y thường), trước 2 tiếng 30 ph&uacute;t (&aacute;p dụng lễ tết), tại cột số 4 Trong trường hợp bay h&atilde;ng h&agrave;ng kh&ocirc;ng Vietjet, tại cột 10 trong trường hợp bay h&atilde;ng h&agrave;ng kh&ocirc;ng Vietnam, Jetstar.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Qu&yacute; kh&aacute;ch dưới 18 tuổi khi đi tour phải c&oacute; Bố Mẹ hoặc người th&acirc;n tr&ecirc;n 18 tuổi đi c&ugrave;ng. Trường hợp đi một m&igrave;nh phải được Bố Mẹ ủy quyền (c&oacute; x&aacute;c nhận của ch&iacute;nh quyền địa phương) cho PCP&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Kh&aacute;ch nữ từ 55 tuổi trở l&ecirc;n v&agrave; kh&aacute;ch nam từ 60 trở l&ecirc;n: n&ecirc;n c&oacute; người th&acirc;n dưới 55 tuổi (đầy đủ sức khỏe) đi c&ugrave;ng. Ri&ecirc;ng kh&aacute;ch từ 70 tuổi trở l&ecirc;n: Bắt buộc phải c&oacute; người th&acirc;n dưới 55 tuổi (đầy đủ sức khỏe) đi c&ugrave;ng v&agrave; nộp k&egrave;m giấy kh&aacute;m sức khỏe, c&oacute; x&aacute;c nhận đủ sức khỏe để đi du lịch của b&aacute;c sĩ + Giấy cam kết sức khỏe theo mẫu qui định của c&ocirc;ng ty. V&igrave; l&yacute; do an to&agrave;n Qu&yacute; kh&aacute;ch hạn chế v&agrave; kh&ocirc;ng nhận kh&aacute;ch từ 80 tuổi trở l&ecirc;n. Kh&aacute;ch tr&ecirc;n 80 tuổi kh&ocirc;ng c&oacute; chế độ bảo hiểm.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Qu&yacute; kh&aacute;ch đang mang thai vui l&ograve;ng b&aacute;o cho nh&acirc;n vi&ecirc;n b&aacute;n tour ngay tại thời điểm đăng k&yacute;. Lưu &yacute; phải c&oacute; &yacute; kiến của b&aacute;c sĩ trước khi đi tour. Cam kết tự chịu tr&aacute;ch nhiệm về sức khỏe của m&igrave;nh v&agrave; thai nhi trong suốt thời gian tham gia chương tr&igrave;nh du lịch.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Qu&yacute; kh&aacute;ch c&oacute; nhu cầu cần xuất h&oacute;a đơn vui l&ograve;ng cung cấp th&ocirc;ng tin xuất h&oacute;a đơn cho nh&acirc;n vi&ecirc;n b&aacute;n tour &nbsp;khi ngay khi đăng k&yacute;, kh&ocirc;ng nhận xuất h&oacute;a đơn sau khi tour đ&atilde; kết th&uacute;c.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Qu&yacute; kh&aacute;ch vui l&ograve;ng tham khảo kỹ c&aacute;c Điều Kiện B&aacute;n V&eacute; trước khi đăng k&yacute; chuyến du lịch. Trong trường hợp kh&ocirc;ng trực tiếp đăng k&yacute;, nhờ người th&acirc;n đăng k&yacute; hộ vui l&ograve;ng cập nhật th&ocirc;ng tin từ người đăng k&yacute;.&nbsp;</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Đối với c&aacute;c chương tr&igrave;nh tham quan biển-đảo: trong trường hợp Qu&yacute; kh&aacute;ch kh&ocirc;ng khỏe, c&oacute; tiền sử bệnh hoặc c&oacute; chất k&iacute;ch th&iacute;ch trong người (rượu, bia&hellip;) th&igrave; kh&ocirc;ng n&ecirc;n tắm &amp; lặn biển để đảm bảo sự an to&agrave;n tuyệt đối. Trong trường hợp Qu&yacute; kh&aacute;ch xảy ra sự cố ngo&agrave;i &yacute; muốn th&igrave; PCP sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm do lỗi cố t&igrave;nh vi phạm.</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>Lưu &yacute; khi chuyển/huỷ tour:</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Sau khi đ&oacute;ng tiền, nếu Qu&yacute; kh&aacute;ch muốn chuyển/huỷ tour xin vui l&ograve;ng mang V&eacute; Du Lịch đến văn ph&ograve;ng đăng k&yacute; tour để l&agrave;m thủ tục chuyển/huỷ tour v&agrave; chịu mất ph&iacute; theo quy định của PCP. Kh&ocirc;ng giải quyết c&aacute;c trường hợp li&ecirc;n hệ chuyển/huỷ tour qua điện thoại.</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>C&aacute;c điều kiện huỷ tour: (đối với ng&agrave;y thường):</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Được chuyển sang c&aacute;c tuyến du lịch kh&aacute;c trước ng&agrave;y khởi &nbsp;h&agrave;nh 20 ng&agrave;y : Kh&ocirc;ng mất chi ph&iacute;.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy hoặc chuyển sang c&aacute;c chuyến du lịch kh&aacute;c ngay sau khi đăng k&yacute; đến 19 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 50% tiền cọc tour.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy hoặc chuyển sang c&aacute;c chuyến du lịch kh&aacute;c từ 12-14 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 100% tiền cọc tour.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy chuyến du lịch trong v&ograve;ng từ 08-11 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 50% tr&ecirc;n gi&aacute; tour du lịch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy chuyến du lịch trong v&ograve;ng từ 05-07 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 70% tr&ecirc;n gi&aacute; tour du lịch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy chuyến du lịch trong v&ograve;ng từ 02-04 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 90% tr&ecirc;n gi&aacute; v&eacute; du lịch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy chuyến du lịch trong v&ograve;ng 1 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh : Chi ph&iacute; hủy tour: 100% tr&ecirc;n gi&aacute; v&eacute; du lịch.</div>
        <div style="text-align: justify;">
            &nbsp;</div>
        <div style="text-align: justify;">
            <strong>C&aacute;c điều kiện huỷ tour: (đối với ng&agrave;y lễ, Tết. &Aacute;p dụng cho c&aacute;c tour c&oacute; thời gian diễn ra rơi v&agrave;o một trong c&aacute;c ng&agrave;y Lễ, Tết theo qui định )&nbsp;</strong></div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span> Được chuyển sang c&aacute;c tuyến du lịch kh&aacute;c trước ng&agrave;y khởi &nbsp;h&agrave;nh 30 ng&agrave;y : Kh&ocirc;ng mất chi ph&iacute;.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span> Nếu hủy hoặc chuyển sang c&aacute;c chuyến du lịch kh&aacute;c ngay sau khi đăng k&yacute; đến 29 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 50% tiền cọc tour.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy hoặc chuyển sang c&aacute;c chuyến du lịch kh&aacute;c từ 20-24 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 100% tiền cọc tour.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span> &nbsp;Nếu hủy chuyến du lịch trong v&ograve;ng từ 17-19 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 50% tr&ecirc;n gi&aacute; tour du lịch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span>Nếu hủy chuyến du lịch trong v&ograve;ng từ 08-16 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 70% tr&ecirc;n gi&aacute; tour du lịch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span> Nếu hủy chuyến du lịch trong v&ograve;ng từ 02-07 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: Chi ph&iacute; hủy tour: 90% tr&ecirc;n gi&aacute; v&eacute; du lịch.</div>
        <div style="text-align: justify;">
            -<span class="Apple-tab-span" style="white-space:pre"> </span> &nbsp;Nếu hủy chuyến du lịch trong v&ograve;ng 1 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh : Chi ph&iacute; hủy tour: 100% tr&ecirc;n gi&aacute; v&eacute; du lịch.</div>
        <div style="text-align: justify;">
            <strong>Thời gian hủy chuyến du lịch được t&iacute;nh cho ng&agrave;y l&agrave;m việc, kh&ocirc;ng t&iacute;nh thứ 7, Chủ Nhật v&agrave; c&aacute;c ng&agrave;y Lễ, Tết.&nbsp;</strong></div>
        <div style="text-align: center;">
            &nbsp;</div>
        <div style="text-align: center;">
            <strong>Mọi chi tiết vui l&ograve;ng li&ecirc;n hệ:</strong></div>
        <div style="text-align: center;">
            <strong>KHỐI KH&Aacute;CH LẺ - DU LỊCH TRONG NƯỚC</strong></div>
        <div style="text-align: center;">
            Quảng Nam</div>
        <div style="text-align: center;">
            Điện thoại: (84-28) 3822 8898 ( ext: 143,174,359,297)</div>
        <div style="text-align: center;">
            Hotline: 0938 301 399</div>
        <div style="text-align: center;">
            &nbsp;</div>
        <div style="text-align: center;">
            <strong>PCP K&Iacute;NH CH&Uacute;C QU&Yacute; KH&Aacute;CH MỘT CHUYẾN DU LỊCH VUI VẺ</strong></div>
                </div>
                <div class="tab-pane fade" id="nav-lhe" role="tabpanel" aria-labelledby="nav-lhe-tab">LIÊN HỆ</div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="chitiettour-left-hotline">
                <p>HOTLINE:<br/>
                    <span>0869275343</span>
                </p>
            </div>

<?php
    $sqltheogia = "SELECT thongtintour.MaTour,TenTour, URLHinh
                   FROM thongtintour,hinhanhtour
                   WHERE thongtintour.MaTour = hinhanhtour.MaTour
                   and Gia = ".$row[2]."
                   and thongtintour.MaTour <> '".$MaTour."'
                   GROUP BY thongtintour.MaTour
                   limit 0,3";
    $resulttheogia = DataProvider::ExcuteQuery($sqltheogia);
    $sqltheongay = "SELECT thongtintour.MaTour,TenTour, URLHinh
                   FROM thongtintour,hinhanhtour
                   WHERE thongtintour.MaTour = hinhanhtour.MaTour
                   and NgayKhoiHanh = '".$row[5]."'
                    and thongtintour.MaTour <> '".$MaTour."'
                   GROUP BY thongtintour.MaTour
                   limit 0,3";
    $resulttheongay = DataProvider::ExcuteQuery($sqltheongay);
?>
            <div class="tourlienquan">
                <div>CÁC TOUR LIÊN QUAN</div>
                
<!--                THEO GIÁ-->
                <div class="tourlienquan-option">Theo giá</div>
                <?php 
                    while($row = mysqli_fetch_array($resulttheogia))
                    {
                        $MaTour = $row['MaTour'];
                        $TenTour = $row['TenTour'];
                        $URLHinh = $row['URLHinh'];
                ?>
                    <div class="row">
                        <div class="tourlienquan-content col-md-12">
                            <a href="chi_tiet_tour.php?matour=<?php echo $MaTour ?>"><img src="<?php echo $path?>public/images/tour/<?php echo $URLHinh?>" class="img-fluid" alt="<?php echo $TenTour?>"/></a>
                            <a href="chi_tiet_tour.php?matour=<?php echo $MaTour ?>"><p><?php echo $TenTour?></p></a>
                        </div>
                    </div>
                <?php
                    }
                ?>
<!--                END THEO GIÁ-->
                
<!--                THEO NGÀY KHỞI HÀNH-->
                <div class="tourlienquan-option">Theo ngày khởi hành</div>
                 <?php 
                    while($row = mysqli_fetch_array($resulttheongay))
                    {
                        $MaTour = $row['MaTour'];
                        $TenTour = $row['TenTour'];
                        $URLHinh = $row['URLHinh'];
                ?>
                    <div class="row">
                        <div class="tourlienquan-content col-md-12">
                            <a href="https://youtube.com"><img src="<?php echo $path?>public/images/tour/<?php echo $URLHinh?>" class="img-fluid" alt="<?php echo $TenTour?>"/></a>
                            <a href="https://fb.com"><p><?php echo $TenTour?></p></a>
                        </div>
                    </div>
                 <?php
                    }
                ?>
<!--                END THEO NGÀY KHỞI HÀNH-->
            </div>
        </div>
    </div>
</div>
<?php
    $sqlupdate = "update thongtintour set LuotXem = LuotXem + 1 
            WHERE MaTour = '".$_GET['matour']."'";
            DataProvider::ExcuteQuery($sqlupdate);  
?>


<!-- script slide show-->
<script>
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3500);    
    }
</script>
<!--end script slide show-->