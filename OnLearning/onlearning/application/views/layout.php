<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css");?> ">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css");?> ">
    <title>OnLearning - Hệ thống học trực tuyến</title>
</head>
<body>
    <header class="common">
        <div class="banner">
            <div class="title">
                <div>
                <img src="<?php echo base_url("images/graduation.png");?>">
                </div>
                <a class="navbar-brand" href="#"> On-learning<br>Hệ thống quản lý học trực tuyến</a>
            </div>
        </div>  
        <div class="menu">
            <ul>
                <li><a href="<?php echo base_url("index.php/course/index");?>">Trang chủ</a></li>
                <li><a href="<?php echo base_url("index.php/course/list");?>">Khóa học</a></li>
                <li><a href="<?php echo base_url("index.php/teacher/index");?>">Giáo viên</a></li>
                <form action="<?php echo base_url("index.php/course/search");?>" method="get" style="padding-top: 18px;">
                    <input style="margin-left: 50px;" type="text" name="query" id="" placeholder="Khóa học">
                    <input type="submit" value="Tìm kiếm" class="btn-sm btn-success">
                    <div style="float: right; padding-right: 50px; height: 40px;">
                        <h6 style="color: white;">Xin chào <?php echo $this->session->userData("username")?> &nbsp;&nbsp;<a class="btn-sm btn-warning" href="<?php echo base_url("index.php/login/logout/") ?>">Đăng xuất</a></h6>
                    </div>
                </form>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <?php if($this->session->userData("is_admin")): ?>
                <br>
                <a href="<?php echo base_url("index.php/admin/index/") ?>">Chuyển sang trang quản trị</a>
            <?php endif; ?>
            <?php $this->load->view($content);?>
        </div>
        <!--Day la content se thay doi theo tung request-->
        <div class="slidebar">
            <div class="card card1" style="width: 18rem;">
                <img src="<?php echo base_url("/images/global-education.png");?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Môn Toán - Lớp 10 Bài giảng: Luyện tập: Giá trị lượng giác của một cung (tiết 3) Giáo viên: Ngân Văn Kỳ - THPT Chuyên Hà Nội - Amsterda...</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_box">
            <div class="footer_logo">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url("index.php/course/index");?>" style="color: #ffc107;"><img style="width: 40px; height: 40px;" src="<?php echo base_url("images/graduation.png");?>"> OnLearning</a>
            </div>
            <p>
                OnLearning cung cấp các khóa học cơ bản của môn Toán, Vật lý, Hóa học lớp 10.
                Các bài giảng, bài tập, tài liệu được các giáo viên của OnLearning thu thập,
                nghiên cứu cho ra những sản phẩm tốt nhất để mang đến cho học sinh những kiến
                thức cần thiết, truyền đạt một cách gần gũi và dễ hiểu.
            </p>
          </div>
          <div class="footer_box">
              <div class="fr-resourse">
                  <h3>TÀI NGUYÊN</h3>
                  <li><a href="#">Tài liệu tham khảo</a></li>
                  <li><a href="#">Giáo viên</a></li>
                  <li><a href="#">Khóa học</a></li>
                  <li><a href="#">Khóa học liên quan</a></li>
                  <li><a href="#">Đường đua danh vọng</a></li>
              </div>
              <div class="fr-resourse">
                  <h3>KẾ HOẠCH</h3>
                  <li><a href="#">Khóa học sắp tới</a></li>
                  <li><a href="#">Học phí</a></li>
                  <li><a href="#">Dành cho lớp học</a></li>
                  <li><a href="#">Trở thành giảng viên</a></li>
                  <li><a href="#">Trở thành học viên</a></li>
              </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Copyright &copy; 2020 All Rights Reserved by 
            <a href="http://fit.hnue.edu.vn/" target="_blank">FIT-HNUE</a>.
        </p>
      </div>
    </div>
    </footer>
    <script src="<?php echo base_url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js");?>" crossorigin="anonymous"></script>
</body>
</html>