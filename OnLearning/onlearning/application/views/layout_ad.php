<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css"); ?> ">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/layout_ad.css");?>">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="title">
            <div>
            <img src="<?php echo base_url("images/graduation.png");?>">
            </div>
            <a class="navbar-brand" href="#"> On-learning<br>Hệ thống quản lý học trực tuyến</a>
        </div>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <form class="form-search" action="<?php echo base_url("index.php/course/searchCourse");?>" method="get">
            <input type="text" name="query" id="" placeholder="Khóa học">
            <input type="submit" value="Tìm kiếm">
            <a href="#"><img src="<?php echo base_url("images/agenda.png");?>"></a>
            <div class="hello">
            <h6>Xin chào <?php echo $this->session->userData("username") ?> &nbsp;&nbsp;<a href="<?php echo base_url("index.php/login/logout/") ?>" class="btn btn-outline-warning">Đăng xuất</a></h6>
            </div>
        </form>
        </div>  
    </nav>

    <div class="container">
        <div class="content">
            <a href="<?php echo base_url("index.php/course/index/") ?>">Chuyển sang trang người dùng</a>
            <?php $this->load->view($content); ?>
        </div>
    </div>
    
    <div class="jumbotron text-center footer">
    <p>Copyright@ 2020 by On-learning Group</p>
    </div>
</body>
</html>
