<h3 class="list">Danh sách Khóa học</h3>
<div class="list-courses">
    <?php foreach($courses_array as $course): ?>
        <h4>
            <a href="<?php echo base_url("index.php/course/detail/".$course["id"]) ?>">
                <?php echo $course['course_name'] ?>
            </a>
        </h4>
    <?php endforeach ?>
</div>

<div class="page">
    <ul class="pagination justify-content-center">
        <?php for($p = 1; $p <= ceil($total/5); $p++): ?>
        <li class="page-item">
            <a class="page-link" href="<?php echo base_url("index.php/course/list/".$p)?>"><?php echo $p ?></a>
        </li>
        <?php endfor ?>
    </ul>
</div>


    
