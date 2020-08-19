<div class="row">
    <div class="col-sm-4 class1">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url("index.php/admin/index/") ?>"><img src="<?php echo base_url("images/main.png"); ?>">&nbsp;&nbsp; Trang chính</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/account/index/") ?>"><img src="<?php echo base_url("images/process.png"); ?>">&nbsp;&nbsp; Quản lý tài khoản</a>
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
        <h3 class="list">Tất cả Khóa học</h3>
        <div class="list-courses">
            <?php foreach ($courses_array as $course) : ?>
                <h4>
                    <a href="<?php echo base_url("index.php/course/detail/".$course["id"]) ?>">
                        <?php echo $course['course_name'] ?>
                    </a>
                </h4>
            <?php endforeach ?>
        </div>
    </div>
    <div class="page">
        <ul class="pagination justify-content-center">
            <?php for ($p = 1; $p <= ceil($total/5); $p++) : ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo base_url("index.php/course/all/".$p) ?>"><?php echo $p ?></a>
                </li>
            <?php endfor ?>
        </ul>
    </div>
</div>