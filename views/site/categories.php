  <div class="slider display-table center-text"><h1 class="title display-table-cell"><b>personal blog</b></h1></div>
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