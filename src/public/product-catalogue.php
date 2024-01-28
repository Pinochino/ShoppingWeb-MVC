<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'components/head.php' ?>
</head>

<body>
    <?php require_once 'components/header.php' ?>
    <div id="product-catalogue">
            <?php require_once 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\breadcumb.php'?>
            <div class="product-catalogue-wrapper pb30 pt30">
                <div class="uk-container uk-container-1520">
                    <div class="product-catalogue-banner mb30">
                        <span class="img img-cover"><img src="/src/public/resource/Images/Banner/img-single1.jpg.webp" alt=""></span>
                    </div>
                    <div class="uk-grid-medium" uk-grid>
                            <div class="uk-grid-1-4@l">
                                <?php require_once 'components/aside-category.php'?>
                            </div>
                            <div class="uk-grid-3-4@l"></div>
                    </div>
                </div>
            </div>
    </div>
    <?php require_once 'components/footer.php' ?>
    </div>
    <?php require_once 'components/script.php' ?>
</body>
</html>