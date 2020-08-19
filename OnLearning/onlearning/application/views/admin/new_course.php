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
                <a class="nav-link active" href="<?php echo base_url("index.php/course/index1/") ?>"><img src="<?php echo base_url("images/onlearning.png"); ?>">&nbsp;&nbsp; Quản lý khóa học</a>
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
        <?php if (isset($quiz)) : ?>
            <h3>Chỉnh sửa khóa học</h3>
        <?php else : ?>
            <h3>Thêm mới khóa học</h3>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url("index.php/course/" . (isset($course) ? "update/" . $course["id"] : "add")) ?>">
            <table>
                <tr>
                    <td>Tên khóa học</td>
                    <td>
                        <input type="text" name="course_name" value="<?php echo (isset($course) ? $course["course_name"] : "") ?>">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Số bài học</td>
                    <td>
                        <input type="text" name="qty_lesson" value="<?php echo (isset($course) ? $course["qty_lesson"] : "") ?>">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
                        <textarea type="text" name="course_describe" cols="40" rows="6"><?php echo (isset($course) ? $course["course_describe"] : "") ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="submit" class="btn btn-primary" value="Lưu">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>