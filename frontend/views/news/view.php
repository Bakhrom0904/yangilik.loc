
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup">
    <meta name="author" content="elemis">
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">

                </div>

            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category"><?=$new->category->name;?></a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4"><?=$new->title;?></h1>
                        <ul class="post-meta mb-5">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?=$new->created_at;echo " ";?><?=Yii::t('app',"Yaratilgan vaqti");?></span></li>
                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span><?=$new->user->username;?><?=Yii::t('app','Yaratuvchi');?></span></a></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-eye"></i><span><<?=$new->view;echo " ";?><span><?=Yii::t('app','Ko`rishlar');?></span></a></li>

                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card">
                            <figure class="card-img-top"><img src="<?=$new->img;?>" alt="" /></figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <p><?=$new->description;?></p>
                                        </div>
                                    </article>
                                    <!-- /.post -->
                                </div>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>


</body>

</html>