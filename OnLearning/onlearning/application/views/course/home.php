<?php $course = array_shift($courses_array); ?>

<h3 style="padding-top: 30px;"><?php echo $course['course_name'] ?></h3>
<p><?php echo $course['course_describe'] ?></p>

<?php foreach($courses_array as $course): ?>
    <h3>
        <a href="<?php echo base_url("index.php/course/detail/".$course["id"]) ?>">
        <?php echo $course['course_name']; ?>
        </a>
    </h3>
<?php endforeach ?>

<div class="page">
    <ul class="pagination justify-content-center">
        <?php for($p = 1; $p <= ceil($total/8); $p++): ?>
        <li class="page-item">
            <a class="page-link" href="<?php echo base_url("index.php/course/index/".$p)?>"><?php echo $p ?></a>
        </li>
        <?php endfor?>
    </ul>
</div>