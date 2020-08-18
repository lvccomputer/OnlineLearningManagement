<div class="row">
    <div class="col-sm-4 class1">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/admin/index/") ?>"><img src="<?php echo base_url("images/main.png"); ?>">&nbsp;&nbsp; Trang chính</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/account/index/") ?>"><img src="<?php echo base_url("images/process.png"); ?>">&nbsp;&nbsp; Quản lý tài khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url("index.php/course/index1/") ?>"><img src="<?php echo base_url("images/question.png"); ?>">&nbsp;&nbsp; Quản lý khóa học</a>
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
        <h4>Danh sách đề kiểm tra</h4>
        <a href="<?php echo base_url("index.php/course/insert/")?>" class="btn btn-warning btn1">Thêm mới</a>
        <br>
        <br>
        <table class="table">
        <?php foreach($course_list as $course): ?>
            <tr>
                <td><a href="<?php echo base_url("index.php/course/edit/".$course["id"]) ?>">
                    <?php echo $course['course_name'] ?>
                <td><a href="<?php echo base_url("index.php/course/edit/".$course["id"]) ?>"><img class="image1" src="<?php echo base_url("images/update.png"); ?>"></a></td>
                <td><a href="<?php echo base_url("index.php/course/delete/".$course["id"]) ?>"><img class="image1" src="<?php echo base_url("images/criss-cross.png"); ?>"></a></td>
            </tr>
        <?php endforeach ?>
        </table>
        <br>
    </div>
    <div class="page">
        <ul class="pagination justify-content-center">
            <?php for($p = 1; $p <= ceil($total/5); $p++): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo base_url("index.php/course/index1/".$p)?>"><?php echo $p ?></a>
                </li>
            <?php endfor ?>
        </ul>
    </div>  
</div>