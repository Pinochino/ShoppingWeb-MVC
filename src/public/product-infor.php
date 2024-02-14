<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once 'components/head.php' ?>

</head>

<body>
    <div id="content-page">

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
                    <div class="product-information">
                        <div class="uk-grid" uk-grid>
                            <div class="uk-grid-1-2@l">
                                <div class="img-high">
                                    <span class="img img-cover"><img src="/src/public/resource/Images/Product/special-2.webp" alt="" srcset=""></span>
                                </div>
                                <div class="img-low">
                                    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="parallax: true" tabindex="-1" uk-slider>
                                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid uk-grid-small">
                                            <li>
                                                <img src="/src/public/resource/Images/Product/special-2.webp" width="150" height="150" alt="">
                                            </li>
                                            <li>
                                                <img src="/src/public/resource/Images/Product/special-2.webp" width="150" height="150" alt="">
                                            </li>
                                            <li>
                                                <img src="/src/public/resource/Images/Product/special-2.webp" width="150" height="150" alt="">
                                            </li>
                                            <li>
                                                <img src="/src/public/resource/Images/Product/special-2.webp" width="150" height="150" alt="">
                                            </li>
                                            <li>
                                                <img src="/src/public/resource/Images/Product/special-2.webp" width="150" height="150" alt="">
                                            </li>
                                            <li>
                                                <img src="/src/public/resource/Images/Product/special-2.webp" width="150" height="150" alt="">
                                            </li>
                                        </ul>
                                        <a class="uk-position-center-left uk-position-small " href uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small " href uk-slidenav-next uk-slider-item="next"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid-1-2@l">
                                <div class="header-product-info mb20">
                                    <div class="uk-flex uk-flex-column">
                                        <span>Flat 4K UHD 11</span>
                                        <span>Brand: <span style="color: red; font-size: 13px; line-height: 30px;">Samsung</span></span>
                                        <span class="price-new-product"><?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\price.php' ?></span>
                                    </div>
                                </div>
                                <div class="body-product-info">
                                    <ul> Sold by: <span style="color: red;">WPBINGO</span>
                                        <li><span>5.0 inch</span></li>
                                        <li><span>Android </span></li>
                                        <li><span>Android </span></li>
                                        <li><span>Android </span></li>
                                    </ul>
                                </div>
                                <div class="body-product-low mb20 mt20">
                                    <div class="body-low-1 mb20">
                                        <?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\countdown.php' ?>
                                        <i name='donate-heart'></i>
                                    </div>
                                    <div class="body-low-2 mb20">
                                        <div class="uk-flex uk-flex-between">
                                            <div class="quatity-product mr20">
                                                <button id="minusButton" class="bx bx-minus"></button>
                                                <input id="quantity" type="number" value="0" min="1" step="1" autocomplete="off">
                                                <button id="plusButton" class="bx bx-plus"></button>
                                            </div>
                                            <div class="Add-cart mr20">
                                                <button class="mr10" type="button" uk-icon="icon: bag;"></button>
                                                <span>Add to cart</span>
                                            </div>
                                            <div class="Buy-now">
                                                <button class="mr10" type="button" uk-icon="icon: heart;"></button>
                                                <span>Buy Now</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="body-low-3 mb20">
                                        <div class="Add-to-whistle mr20">
                                            <button type="button" uk-icon="icon: heart;"></button>
                                            <span>Add to cart</span>
                                        </div>
                                        <div class="Compare">
                                            <button type="button" uk-icon="icon: social;"></button>
                                            <span>Buy Now</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="origin-product">
                                    <div class="uk-flex uk-flex-column">
                                        <span>SKU: D2100</span>
                                        <span>Categories: <span style="color: red;">Audio & Video, Computer & Laptop</span></span>
                                        <span class="mb10">Tags: Hot, Men</span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle">
                                        <a style="background: #3B5998;" href="" class="uk-icon ft-social-item" uk-icon="icon: twitter;"></a>
                                        <a style="background: #55ACEE;" href="" class="uk-icon ft-social-item" uk-icon="icon:  instagram;"></a>
                                        <a style="background: #007AB9;" href="" class="uk-icon ft-social-item" uk-icon="icon: facebook;"></a>
                                        <a style="background: #CB2027;" href="" class="uk-icon ft-social-item" uk-icon="icon: youtube;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="switcher-new-product">
            <div class="uk-container uk-container-1520">
                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li> 
                        <div class="image-banner-product" >
                        <img src="/src/public/resource/Images/Switcher/img1.webp" alt="">
                        </div>
                        
                        <div class="infor-banner-product m20">
                            <h2>Blast past faste</h2>
                            <p>A14 Bionic, the fastest chip in a smartphone.
An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all — in two perfect sizes.</p>
                        </div>
                        <div class="banner-product-middle mb20">
                            <img src="/src/public/resource/Images/Switcher/img2.webp" alt="" srcset="">
                        </div>
                        <div class="banner-product-low mb20">
                            <img src="/src/public/resource/Images/Switcher/img3.webp" alt="" srcset="">
                        </div>
                    </li>
                    <li>Hello again!</li>
                    <li>Bazinga!</li>
                </ul>
            </div>
        </div>
        <?php require_once 'components/script.php' ?>

</body>

</html>