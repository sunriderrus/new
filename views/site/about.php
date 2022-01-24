


<div class="slider">

    </div>

    <section class="post-area">
        <div class="container">

            <div class="row">

                <div class="col-lg-1 col-md-0"></div>
                <div class="col-lg-10 col-md-12">
<?php foreach ($lols as $lol):?>
    <style>
.slider {background-image: url(<?=$lol['categs']['pict']?>);}

</style>
                    <div class="main-post">

                        <div class="post-top-area">

                            <h5 class="pre-title"><?=$lol->categs->zagol?></h5>

                            <h3 class="title"><a href="#"><b><?=$lol->name?></b></a></h3>

                           <!-- post-info -->

                            <p class="para"><?=$lol->description?></p>

                        </div><!-- post-top-area -->

                         <div class="post-info">

                                

                                <div class="middle-area">
                                    <a class="name" href="#"><b>Опубликовано</b></a>
                                    <h6 class="date"><?=$lol->created_at?></h6>
                                </div>

                            </div>

                        <div class="post-bottom-area">

                        </div><!-- post-bottom-area -->

                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

<?php endforeach ?>
































