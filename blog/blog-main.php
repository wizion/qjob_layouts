<?php
include 'header-blog.php';
?>

<section class="main-news">
    <?php
        $array = [

            ['title'=>'Самые необычные задания. Выпуск 43','image'=>'../assets/img/posts/main/8.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'Самые необычные задания. Выпуск 43','image'=>'../assets/img/posts/main/rel__bg.png','is_video'=>false,'date'=>'12 июля'],
            ['title'=>'О чем молчат фрилансеры','image'=>'../assets/img/posts/main/rel_bg.jpeg','is_video'=>true,'date'=>'12 июля'],
            ['title'=>'10 глупых вопросов про звукоизоляцию','image'=>'../assets/img/posts/main/rel_slide2.jpg','is_video'=>false,'date'=>'12 июля'],
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
