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
        <?php if (isset($user)) : ?>
            <h3>Chỉnh sửa tài khoản</h3>
        <?php else : ?>
            <h3>Thêm tài khoản mới</h3>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url("index.php/account/" . (isset($user) ? "update/" . $user["id"] : "add")) ?>">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="<?php echo (isset($user) ? $user["username"] : "") ?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="<?php echo (isset($user) ? $user["password"] : "") ?>"></input>
                    </td>
                </tr>
                <tr>
                    <td>Quyền quản trị viên</td>
                    <td>
                        <input type="checkbox" name="is_admin" id="" <?php echo (isset($user) && $user["is_admin"]) ? "checked = checked" : "" ?>>
                    </td>
                </tr>
                <tr>
                    <td>Quyền giáo viên</td>
                    <td>
                        <input type="checkbox" name="is_teacher" id="" <?php echo (isset($user) && $user["is_teacher"]) ? "checked = checked" : "" ?>>
                    </td>
                </tr>
                <tr>
                    <td>Quyền học sinh</td>
                    <td>
                        <input type="checkbox" name="is_student" id="" <?php echo (isset($user) && $user["is_student"]) ? "checked = checked" : "" ?>>
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