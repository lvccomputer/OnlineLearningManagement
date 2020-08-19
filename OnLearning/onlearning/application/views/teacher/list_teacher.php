<div style="height: 350px;">
    <?php foreach ($teacher_list as $teacher) : ?>
        <div class="card" style="width: 35%; height: 380px; float: left; margin-left: 50px; margin-top: 50px;">
            <img src="<?php echo base_url("images/teachers/teacher2.jpg") ?>" class="card-img-top" alt="..." style="width: 100%; height: 180px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $teacher['teacher_name'] ?></h5>
                <h6 class="card-title"><?php echo $teacher['subject'] ?></h6>
                <p class="card-text" style="height: 60px;"><?php echo $teacher['teacher_info'] ?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>

<div class="page" style="margin-top: 130px;">
    <ul class="pagination justify-content-center">
        <?php for ($p = 1; $p <= ceil($total / 2); $p++) : ?>
        <li class="page-item">
            <a class="page-link" href="<?php echo base_url("index.php/teacher/index/" . $p) ?>"><?php echo $p ?></a>
        </li>
        <?php endfor ?>
    </ul>
</div>