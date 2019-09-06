<?php
include 'header-blog.php';
?>
<section class="progress-bar">
    <div class="indicator"></div>
</section>
<section class="main-news">
    <?php
        $array = [
            ['title'=>'Как студенту зарабатывать на кино и кафешки','image'=>'../assets/img/posts/main/1.png','is_video'=>true,'date'=>'12 июля'],
            ['title'=>'Заработать на новую камеру за два месяца','image'=>'../assets/img/posts/main/2.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'Коллекторы, нечестный вуз, авто со скрученным пробегом','image'=>'../assets/img/posts/main/3.png','is_video'=>true,'date'=>'12 июля'],
            ['title'=>'8 признаков, что в квартире пора делать ремонт','image'=>'../assets/img/posts/main/4.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'15 полезных заданий на лето','image'=>'../assets/img/posts/main/5.png','is_video'=>true,'date'=>'12 июля'],
            ['title'=>'10 глупых вопросов про звукоизоляцию','image'=>'../assets/img/posts/main/6.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'О чем молчат фрилансеры','image'=>'../assets/img/posts/main/7.png','is_video'=>true,'date'=>'12 июля'],
            ['title'=>'Самые необычные задания. Выпуск 43','image'=>'../assets/img/posts/main/8.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'10 глупых вопросов про звукоизоляцию','image'=>'../assets/img/posts/main/6.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'О чем молчат фрилансеры','image'=>'../assets/img/posts/main/7.png','is_video'=>true,'date'=>'12 июля'],
            ['title'=>'Самые необычные задания. Выпуск 43','image'=>'../assets/img/posts/main/8.png','is_video'=>false,'date'=>'12 июля'],
        ];

        $i = 0;
        foreach($array as $item){
            if($i === 0){
                ?>
                    <a href="#" class="big-item" style="background-image: url('<?=$item['image']?>')">
                        <div>
                            <h2><?=$item['title']?></h2>
                            <p class="paragraph">
                                <?=$item['date']?>
                            </p>
                        </div>
                    </a>
                <?php
            }else{
                ?>
                    <div class="item">
                        <a href="#" class="item-title">
                            <div class="image">
                                <img src="<?=$item['image']?>" alt="">
                                <?php if($item['is_video']){ ?>
                                    <div class="is-video"></div>
                                <?php } ?>
                            </div>
                            <h3><?=$item['title']?></h3>
                        </a>
                            <p class="paragraph">
                                <?=$item['date']?>
                            </p>

                    </div>
                <?php
            }
            $i++;
        }
    ?>
</section>
<section class="pagination">
    <span class="arrow left"></span>
    <span class="active">1</span>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <span class="nav_ext">...</span>
    <a href="#">15</a>
    <a class="arrow right"></a>
</section>

<?php
include 'blog-footer.php';
?>
