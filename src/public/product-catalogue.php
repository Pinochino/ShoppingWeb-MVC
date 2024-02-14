<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'components/head.php' ?>
</head>

<body>
    <div class="header-catalogue">
        <?php require_once 'components/header.php' ?>
    </div>
    <div id="product-catalogue">
        <?php require_once 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\breadcumb.php' ?>
        <div class="product-catalogue-wrapper pb30 pt30">
            <div class="uk-container uk-container-1520">
                <div class="product-catalogue-banner mb30">
                    <span class="img img-cover"><img src="/src/public/resource/Images/Banner/img-single1.jpg.webp" alt=""></span>
                </div>
                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-grid-1-4@l">
                        <?php require_once 'components/aside-category.php' ?>
                    </div>
                    <div class="uk-grid-3-4@l">
                        <div class="uk-container uk-container-1040">
                            <div class="content-shop">
                                <div class="content-high mb20">
                                    <div class="uk-container uk-container-1520">
                                        <div class="uk-flex  uk-flex-between">
                                            <span>Computers & Laptops</span>
                                            <span>Showing all 10 result</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-low">
                                    <nav uk-dropnav class="mb30">
                                        <ul class="uk-subnav">
                                            <li>
                                                <a href>Parent <span uk-drop-parent-icon></span></a>
                                                <div class="uk-dropdown">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Active</a></li>
                                                        <li><a href="#">Item</a></li>
                                                        <li><a href="#">Item</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href>Parent <span uk-drop-parent-icon></span></a>
                                                <div uk-dropdown="pos: top-center;">
                                                    <ul class="uk-nav uk-dropdown-nav">
                                                        <li class="uk-active"><a href="#">Active</a></li>
                                                        <li><a href="#">Item</a></li>
                                                        <li><a href="#">Item</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="catalogue-list-product">
                                    <div class="uk-grid-collapse" uk-grid>
                                                <?php for ($j = 0; $j <= 1; $j++) { ?>
                                                    <?php for ($i = 0; $i <= 3; $i++) { ?>
                                                        <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m mb10">
                                                            <div class="product-item">
                                                                <div class="product-item st-2 uk-position-relative">
                                                                    <div class="badge uk-position-absolute  l10 fz14 text-white border-radius-50 uk-display-inline-block">-10%</div>
                                                                    <div class="thumb uk-position-relative">
                                                                        <a href="" class="image img-scaledown">
                                                                            <img src="/src/public/resource/Images/Product/special-<?php echo rand(0, 3); ?>.webp" alt="" srcset=""></a>
                                                                        <div class="product-overlay">
                                                                            <?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\toolbox.php' ?>
                                                                            <?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\countdown.php' ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info uk-text-center">
                                                                        <?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\review.php' ?>
                                                                        <span>Computers</span>
                                                                        <div class="product-name">
                                                                            <a href="">I lov y</a>
                                                                        </div>
                                                                        <?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\price.php' ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-catalogue">
        <?php require_once 'components/footer.php' ?>
    </div>
    </div>
    <?php require_once 'components/script.php' ?>
</body>

</html>