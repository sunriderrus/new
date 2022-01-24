<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>

<style> 
h1 {
color: white;
}
</style>
<div class="slider display-table center-text"><h1 class="title display-table-cell"><b>personal blog</b></h1></div>
 <section class="blog-area section">
        <div class="container">

            <div class="row">
<?php if (count($hits)==0) {echo '<h3>Статей нет</h3>';} else {
 foreach ($hits as $hit):?>
<div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-2 post-style-3">

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="http://localhost/new/web/index.php?r=site%2Fcat&id=<?=$hit->razdel?>"><b><?=$hit->categs->zagol?></b></a></h6>

                                <h4 class="title"><a href='http://localhost/new/web/index.php?r=site%2Fabout&id=<?=$hit->id?>'><b><?=$hit->name?></b></a></h4>

                              

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="https://sun9-8.userapi.com/impg/S-xJNDXjSMm-YVGjHG_Eul4uVLICGnhGDPLrbA/4Lpnq14VROQ.jpg?size=664x664&quality=96&sign=b0f2f91c1021a3e5117734ce1c47aa58&type=album" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b></b></a>
                                        <h6 class="date" href="#">Опубликовано <?=$hit->created_at?></h6>
                                    </div>
                                </div>

                             

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div>
                <?php endforeach; }?> 
</div>
                 </div><!-- container -->
    </section>

    <section class="blog-area section">
        <div class="container">

            <div class="row">
<?php if (count($cats)==0) {echo '<h3>Категорий нет</h3>';} else {
 foreach ($cats as $cat):?>
                <div class="col-lg-4 col-md-6">
                    
                    <div class="card h-60">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="<?=$cat->pict?>" alt="Blog Image"></div>

                     

                            <div class="blog-info">

                                <h4 class="title"><a href="http://localhost/new/web/index.php?r=site%2Fcat&id=<?=$cat->id?>"><b><?=$cat->zagol?></b></a></h4>

                              

                            </div>
                        </div>
                    </div>               
                </div>
<?php endforeach;} ?> 
     

   


            </div><!-- row -->

   

        </div><!-- container -->
    </section>
            