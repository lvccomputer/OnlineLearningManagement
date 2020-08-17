<h3>Danh sách người dùng</h3>
<a href="<?php echo base_url("index.php/userad/insert/")?>" class="btn btn-primary">Thêm người dùng</a>
<br>
<br>
<table border="1">
<?php foreach($news_user as $user): ?>
    <tr>
        <td><a href="#">
            <?php echo $user["username"] ?>
        <td><a href="#">Sửa</a></td>
        <td><a href="#">Xóa</a></td>
    </tr> 
<?php endforeach ?>
</table>