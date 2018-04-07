<?php
   include_once('database/DataProvider.php');
?>
<header class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="<?php echo $path?>"><h4>VINATRIP.VN</h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse nav-main" id="navbarSupportedContent" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <div class="dropdown">
            <button class="dropbtn nav-hover"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;DU LỊCH</button>
            <div class="dropdown-content">
              <a href="#">TRONG NƯỚC</a>
              <a href="#">NƯỚC NGOÀI</a>
              <a href="#">DU LỊCH TỰ CHỌN</a>
            </div>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link nav-hover" href="#"><i class="fa fa-building"></i>&nbsp;KHÁCH SẠN<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link nav-hover" href="#"><i class="fa fa-truck" aria-hidden="true"></i>&nbsp;VẬN CHUYỂN<span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link nav-hover" href="tin_tuc_du_lich.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;TIN TỨC<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
</header>