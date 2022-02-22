<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="/sandbox/img/favicon.png">
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <div class="bg-primary text-white fw-bold fs-15 mb-2">
                <div class="container py-2 d-md-flex flex-md-row">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                        <address class="mb-0">Moonshine St. 14/05 Light City</address>
                    </div>
                    <div class="d-flex flex-row align-items-center me-6 ms-auto">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                        <p class="mb-0">00 (123) 456 78 90</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                        <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-white hover">sandbox@email.com</a></p>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="./index.html">
                            <img src="/sandbox/img/logo.png" srcset="/sandbox/img/logo@2x.png 2x" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas-nav">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="./index.html"><img src="/sandbox/img/logo-light.png" srcset="/sandbox/img/logo-light@2x.png 2x" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/"><?=Yii::t('app','Bosh sahifa')?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/news/list"><?=Yii::t('app','Yangiliklar') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/"><?=Yii::t('app','Biz haqimizda') ?></a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                            <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                                'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                                'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_LARGE
                            ]); ?>
                            <li class="nav-item d-none d-md-block">
                                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill"><?=Yii::t('app','Aloqa');?></a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
    </div>
  <div class="container">
      <?=$content;?>
  </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4">© 2021 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
                        <a href="mailto:#">info@email.com</a><br /> +00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none"></div>
                                            <div class="response" id="mce-success-response2" style="display:none"></div>
                                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
