<?php 
use yii\widgets\LinkPager;
?>

<div class="slider"><div class="display-table  center-text">
            
        </div></div>
<section class="blog-area section">
		<div class="container">
			<div class="row">
<?php foreach ($list as $post):?>
	
			<style>
.slider {background-image: url(<?=$post['categs']['pict']?>);}

</style>
<div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-2 post-style-3">

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="http://localhost/new/web/index.php?r=site%2Fcat&id=<?=$post->razdel?>"><b><?=$post['categs']['zagol']?></b></a></h6>

                                <h4 class="title"><a href='http://localhost/new/web/index.php?r=site%2Fabout&id=<?=$post->id?>'><b><?=$post->name?></b></a></h4>

                              

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                       

                        </div><!-- single-post extra-blog -->

                    </div>
                    </div>
                </div>
                    <?php endforeach ?>
					<div class="container">
                        <ul>
               <?php echo LinkPager::widget([
    'pagination' => $pages,
]);?></ul>



</div>
        </div>
        </div>        
</section>
                
                 