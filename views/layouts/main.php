<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <?php
        // NavBar::begin([
        //     'brandLabel' => Yii::$app->name,
        //     'brandUrl' => Yii::$app->homeUrl,
        //     'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
        // ]);
        // echo Nav::widget([
        //     'options' => ['class' => 'navbar-nav'],
        //     'items' => [
        //         ['label' => 'Home', 'url' => ['/site/index']],
        //         ['label' => 'About', 'url' => ['/site/about']],
        //         ['label' => 'Contact', 'url' => ['/site/contact']],
        //         Yii::$app->user->isGuest
        //             ? ['label' => 'Login', 'url' => ['/site/login']]
        //             : '<li class="nav-item">'
        //                 . Html::beginForm(['/site/logout'])
        //                 . Html::submitButton(
        //                     'Logout (' . Yii::$app->user->identity->username . ')',
        //                     ['class' => 'nav-link btn btn-link logout']
        //                 )
        //                 . Html::endForm()
        //                 . '</li>'
        //     ]
        // ]);
        // NavBar::end();
        ?>
        <header class="header">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand page-scroll" href="#home">
                                    <img src="assets/img/logo/logo.svg" alt="Logo" />
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#services">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#about">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#how">How It Works</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#testimonial">Testimonials</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- navbar collapse -->
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <!-- <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
                <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
            </div>
        </div>
    </footer> -->

    <footer id="footer" class="footer pt-100 pb-70">
        <div class="footer-shape">
            <img src="assets/img/footer/footer-left.svg" alt="" class="shape shape-1">
            <img src="assets/img/footer/footer-right.svg" alt="" class="shape shape-2">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo-2.svg" alt="logo"></a>
                        </div>
                        <div class="download-btns">
                            <a href="javascript:void(0)">
                                <span class="icon"><i class="lni lni-apple"></i></span>
                                <span class="text">Download on the <b>App Store</b> </span>
                            </a>
                            <a href="javascript:void(0)">
                                <span class="icon"><i class="lni lni-play-store"></i></span>
                                <span class="text">GET IT ON <b>Play Store</b> </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                        <h3>About Us</h3>
                        <ul class="links">
                            <li>
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Services</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
                        <h3>About</h3>
                        <ul class="links">
                            <li>
                                <a href="javascript:void(0)">Partners</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Terms of Service</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Refund Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget wow fadeInUp" data-wow-delay=".8s">
                        <h3>Support</h3>
                        <ul class="links">
                            <li>
                                <a href="javascript:void(0)">Open Ticket</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Community</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Return Policy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Accessibility</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p>Designed and Developed by <a href="https://uideck.com" style="color: #fff;" rel="nofollow">UIdeck</a></p>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>