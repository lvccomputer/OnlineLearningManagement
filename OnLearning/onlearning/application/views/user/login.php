<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css");?>">
  <script src="<?php echo base_url("vendor/twbs/bootstrap/dist/js/bootstrap.min.js");?>"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <h6>Quản lý học trực tuyến</h6>
  </nav>
  <div class="title">
    <div>
      <img src="<?php echo base_url("images/graduation.png");?>">
    </div>
    <a class="navbar-brand" href="#"> On-learning<br>Hệ thống quản lý học trực tuyến</a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col col-sm-6">
        <h6>Đăng nhập</h6>
        <form class="form1" action="<?php echo base_url("index.php/login/loginn") ?>" method="post">
          <table class="table1">
            <tr>
              <td>Tên đăng nhập</td>
              <td>&nbsp;</td>
              <td><input type="text" id="" class="input1" name="username"></p></td>
            </tr>
            <tr>
              <td>Mật khẩu</td>
              <td>&nbsp;</td>
              <td><input type="password" id="" class="input1" name="password"></p></td>
            </tr>
          </table>
          <button type="submit" class="btn btn-success">Đăng nhập</button>
        </form>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-4 title2">
        <img src="<?php echo base_url("/images/online-learning.png");?>">
        <p>On-Learning</p>
      </div>
    </div>
  </div>
  <hr>
  
  <div class="jumbotron text-center footer">
    <p>Copyright@ 2020 by On-learning Group</p>
  </div>
</body>
</html>