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
                <a class="nav-link" href="<?php echo base_url("index.php/course/index1/") ?>"><img src="<?php echo base_url("images/onlearning.png"); ?>">&nbsp;&nbsp; Quản lý khóa học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url("index.php/quiz/index/") ?>"><img src="<?php echo base_url("images/exam.png"); ?>">&nbsp;&nbsp; Ngân hàng bài kiểm tra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="<?php echo base_url("images/onlearning.png"); ?>">&nbsp;&nbsp; Lớp học trực tuyến</a>
            </li>
        </ul>
        <hr class="d-sm-none">
    </div>
    <div class="col-sm-6 class1">
        <?php if(isset($quiz)): ?>
            <h3>Chỉnh sửa đề kiểm tra</h3>
        <?php else: ?>
            <h3>Thêm mới đề kiểm tra</h3>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url("index.php/quiz/".(isset($quiz)?"update/".$quiz["id"]:"add"))?>">
            <table>
                <tr>
                    <td>Tên đề kiểm tra</td>
                    <td>
                        <input type="text" name="quiz_name" value="<?php echo (isset($quiz)?$quiz["quiz_name"]:"") ?>">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Thời gian làm bài</td>
                    <td>
                        <input type="text" name="quiz_time" value="<?php echo (isset($quiz)?$quiz["quiz_time"]:"") ?>">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
                        <textarea type="text" name="quiz_describe" cols="40" rows="7"><?php echo (isset($quiz)?$quiz["quiz_describe"]:"") ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                    <input type="submit" class="btn btn-primary" value="Lưu"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
