<div class="row">
    <div class="col-sm-4 class1">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/admin/index/") ?>"><img src="<?php echo base_url("images/main.png"); ?>">&nbsp;&nbsp; Trang chính</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url("index.php/account/index/") ?>"><img src="<?php echo base_url("images/process.png"); ?>">&nbsp;&nbsp; Quản lý tài khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/course/index1/") ?>"><img src="<?php echo base_url("images/question.png"); ?>">&nbsp;&nbsp; Quản lý khóa học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/quiz/index/") ?>"><img src="<?php echo base_url("images/exam.png"); ?>">&nbsp;&nbsp; Ngân hàng bài kiểm tra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="<?php echo base_url("images/onlearning.png"); ?>">&nbsp;&nbsp; Lớp học trực tuyến</a>
            </li>
        </ul>
        <hr class="d-sm-none">
    </div>
    <div class="col-sm-6 class1">
        <h3>Danh sách người dùng</h3>
        <a href="<?php echo base_url("index.php/account/insert/") ?>" class="btn btn-warning">Thêm người dùng</a>
        <br>
        <br>
        <table border="1" class="table">
            <?php foreach ($new_user as $user) : ?>
                <tr>
                    <td><a href="<?php echo base_url("index.php/account/edit/" . $user["id"]) ?>"><img style="width: 10%; height: 8%;" src="<?php echo base_url("images/person.png"); ?>">
                            <?php echo $user["username"] ?></td>
                    <td><a href="<?php echo base_url("index.php/account/edit/" . $user["id"]) ?>">Sửa</a></td>
                    <td><a href="<?php echo base_url("index.php/account/delete/" . $user["id"]) ?>">Xóa</a></td>
                </tr>
            <?php endforeach ?>
        </table>
        <br>
    </div>
    <div class="page">
        <ul class="pagination justify-content-center">
            <?php for ($p = 1; $p <= ceil($total/4); $p++) : ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo base_url("index.php/account/index/" . $p) ?>"><?php echo $p ?></a>
                </li>
            <?php endfor ?>
        </ul>
    </div>
</div>