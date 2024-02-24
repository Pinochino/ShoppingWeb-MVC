<header class="header uk-visible@m">
    <div class="header-upper">
        <div class="uk-container uk-container-1520">
            <div class="uk-flex uk-flex-between">
                <div class="header-contact">
                    <a class="header-contact-item contact-link" href=""><span uk-icon="icon: location; ratio: 1"></span><span>Find Store</span>
                    </a>
                    <a class="header-contact-item contact-link"><span uk-icon="icon: mail"></span><span>Tranhung@gmail.com</span></a>
                </div>
                <div class="header-menu">
                    <a class="header-menu-item contact-link">Contact us</a>
                    <a class="header-menu-item contact-link">Track your order</a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="uk-container uk-container-1520">
            <div class="uk-flex uk-flex-between">
                <div class="logo">
                    <a href="home.php"><span><img src="/src/public/resource/Images/LOGO.webp" alt=""></span></a>
                </div>
                <div class="header-search">
                    <form action="index.php" method="get" class="uk-form" onkeyup="searchItem()">
                        <div class="form-row">
                            <input type="text" class="input-text" value="" placeholder="Search Product..." autocompleted="off">
                        </div>
                        <div class="search-dropdown">
                            <div class="search-category-title" uk-toggle="target: #my-dropdown">
                                <span>All category</span>
                                <span class="uk-icon" uk-icon="chevron-down"></span>
                            </div>
                            <div id="my-dropdown" class="dropdown-content uk-position-fixed" style="z-index: 9999;">
                                <!-- Your dropdown content goes here -->
                                <ul class="uk-nav uk-nav-default">
                                    <li><a href="#">All Category</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Car Electronics</a></li>
                                    <li><a href="#">Garden Tools</a></li>
                                    <li><a href="#">Office Electronics</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">Audio & Video</a></li>
                                    <li><a href="#">Displayport Cable</a></li>
                                    <li><a href="#">Ipod Touch</a></li>
                                    <li><a href="#">Film photography</a></li>
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Speakers</a></li>
                                    <li><a href="#">TV mounts</a></li>

                                </ul>
                            </div>
                        </div>
                        <button class="btn-search">
                            <span class="uk-icon" uk-icon="search"></span>
                        </button>
                    </form>
                    <div class="most-search">
                        <span class="search-item">Most search: </span>
                        <a href="" class="search-item">Iphone</a>
                        <a href="" class="search-item">Flycam</a>
                        <a href="" class="search-item">Xiaomi</a>
                        <a href="" class="search-item">Nokia</a>
                        <a href="" class="search-item">Samsung</a>
                        <a href="" class="search-item">Dell</a>

                    </div>
                </div>
                <div class="header-widget">
                    <div class="uk-flex">
                        <span id="iconLogin" class="widget-item">
                            <span class="uk-icon" uk-icon="user"></span>
                        </span>
                        <span href="" class="widget-item">
                            <span class="uk-icon" uk-icon="heart"></span>
                            <sup class="uk-badge uk-badge-danger">3</sup>
                        </span>
                        <span href="" class="widget-item">
                            <button type="button" id="button-cart" class="uk-icon" uk-icon="cart">
                                <!-- <span>0<sup>đ</sup></span> -->
                            </button>
                            <sup class="uk-badge uk-badge-danger">4</sup>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER LOWER -->
    <div class="header-lower">
        <div class="uk-container uk-container-1520">
            <div class="uk-flex uk-flex-between uk-flex-middle">
                <div class="header-category">
                    <div class="uk-flex uk-flex-middle">
                        <div class="department-wrapper" data-open="0">
                            <span>
                                <span>All Department <i class="uk-icom" uk-icon="icon: chevron-down;"></i></span>
                            </span>
                            <div class="category-dropdown">
                                <ul class="clear-list uk-clear-fix">
                                    <li><a href="" class="text-bold blue">Best Seller</a></li>
                                    <li><a href="" class="text-bold green">Top 100 Products </a></li>
                                    <li><a href="" class="text-bold purple">Handpick By Digic</a></li>
                                    <li>

                                        <a href="" uk-toggle="target: #dropdown3">Computers & Laptop <i class="uk-icon" uk-icon="icon: chevron-right"></i></a>
                                        <div id="dropdown3" uk-dropdown="pos: right-center; mode: hover; animation: slide-left; animate-out: true; duration: 400;">
                                            <ul class="uk-nav uk-dropdown-nav" uk-grid>
                                                <li class=" uk-width-1-3 uk-width-1-3@l">
                                                    <ul class="dropdown3-title">
                                                        <li>Computers</li>
                                                        <li>Computers & Tablets</li>
                                                        <li>Data storage</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Monitors</li>
                                                        <li>Networking Products</li>
                                                        <li>Power Strips & Surge</li>
                                                        <li>Protectors</li>
                                                        <li>Printers</li>
                                                    </ul>
                                                </li>
                                                <li class="uk-width-1-3 uk-width-1-3@l">
                                                    <ul class="dropdown3-title">
                                                        <li>Accessories</li>
                                                        <li>Blank media</li>
                                                        <li>Blue light blocking</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Cable Security</li>
                                                        <li>Cables & Interconnects</li>
                                                    </ul>
                                                    <br>
                                                    <ul class="dropdown3-title">
                                                        <li>Laptop</li>
                                                        <li>Samsung Electronics</li>
                                                        <li>Lanovo</li>
                                                        <li>Visual Land</li>
                                                        <li>Xiaomi</li>
                                                    </ul>
                                                </li>
                                                <li class="uk-width-1-3 uk-width-1-3@l">
                                                    <img src="/src/public/resource/Images/All-departments/img1.webp" alt="" srcset="">
                                                    <h3>Best for Gaming</h3>
                                                    <span>Blank case eidtion</span>
                                                    <div class="overlay-readmore">
                                                        <a href="" class="btn-readmore btn"><span>Shop now</span><span class="uk-icon" uk-icon="icon:  chevron-right"></span></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li>
                                        <a href="" uk-toggle="target: #dropdown4">Digital Camera <i class="uk-icon" uk-icon="icon: chevron-right"></i></a>
                                        <div id="dropdown4" uk-dropdown="pos: right-center; mode: hover; animation: slide-left; animate-out: true; duration: 400;">
                                            <div class="canon">
                                                <img src="/src/public/resource/Images/All-departments/img5.png" alt="" srcset="">
                                                <h3>Best for Gaming</h3>
                                                <span>Blank case eidtion</span>
                                                <div class="overlay-readmore">
                                                    <a href="" class="btn-readmore btn"><span>Shop now</span><span class="uk-icon" uk-icon="icon:  chevron-right"></span></a>
                                                </div>
                                            </div>
                                            <ul class="uk-nav uk-dropdown-nav" uk-grid>
                                                <li class=" uk-width-1-3 uk-width-1-3@l">
                                                    <ul class="dropdown3-title">
                                                        <li>Computers</li>
                                                        <li>Data storage</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Computers & Tablets</li>
                                                    </ul>
                                                </li>
                                                <li class="uk-width-1-3 uk-width-1-3@l">
                                                    <ul class="dropdown3-title">
                                                        <li>Accessories</li>
                                                        <li>Blank media</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Blue light blocking</li>

                                                    </ul>

                                                </li>
                                                <li class=" uk-width-1-3 uk-width-1-3@l">
                                                    <ul class="dropdown3-title">
                                                        <li>Computers</li>
                                                        <li>Monitors</li>
                                                        <li>Data storage</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Computers & Tablets</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" uk-toggle="target: #dropdown5">Audio & Video <i class="uk-icon" uk-icon="icon:  chevron-right"></i></a>
                                        <div id="dropdown5" uk-dropdown="pos: right-center; mode: hover; animation: slide-left; animate-out: true; duration: 400;">
                                            <div class="audio-video">
                                                <ul class="dropdown3-title">
                                                    <li>Computers</li>
                                                    <li>Monitors</li>
                                                    <li>Data storage</li>
                                                    <li>Laptop Accessories</li>
                                                    <li>Computers & Tablets</li>
                                                </ul>
                                            </div>
                                            <div class="canon">
                                                <h3>Headephones</h3>
                                                <span>Sale up to 30%</span>
                                                <div class="overlay-readmore">
                                                    <a href="" class="btn-readmore btn"><span>Shop now</span><span class="uk-icon" uk-icon="icon:  chevron-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" uk-toggle="target: #dropdown6">Mobiles & Tablets <i class="uk-icon" uk-icon="icon:  chevron-right"></i></a>
                                        <div id="dropdown6" uk-dropdown="pos: right-center; mode: hover; animation: slide-left; animate-out: true; duration: 400;">
                                            <div class="mobile-tablets" uk-grid>
                                                <div class="uk-width-1-3">
                                                    <ul class="dropdown3-title">
                                                        <li>Computers</li>
                                                        <li>Data storage</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Computers & Tablets</li>
                                                    </ul>
                                                    <br>
                                                    <ul class="dropdown3-title">
                                                        <li>Computers</li>
                                                        <li>Data storage</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Laptop Accessories</li>
                                                        <li>Computers & Tablets</li>
                                                    </ul>
                                                </div>
                                                <div class="uk-width-2-3">
                                                    <ul class="dropdown3-title">
                                                        <li>Best Seller Product</li>
                                                        <?php for ($t = 0; $t <= 3; $t++) { ?>
                                                            <li>
                                                                <div class="Best-Seller-Product">
                                                                    <img src="/src/public/resource/Images/Product/special-<?php echo rand(0, 3); ?>.webp" alt="" class="img img-scaledown">
                                                                    <div class="Best-Seller-Infor">
                                                                        <?php require 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\review.php' ?>
                                                                        <span>Bluetooth Wireless Speaker</span>
                                                                        <span>$115</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="">TV & Home Theater</a></li>
                                    <li><a href="">Portable Speaker</a></li>
                                    <li><a href="">Home applicates</a></li>
                                    <li><a href="">Musics & Video Games</a></li>
                                </ul>
                                <div class="close-categories"><span><i class="uk-icon" uk-icon="icon: minus"></i> Close</span></div>
                            </div>
                        </div>
                        <nav class="navigation">
                            <ul class="uk-clearfix clear-list uk-flex main-menu">
                                <nav uk-dropnav="align: center">
                                    <ul class="uk-subnav uk-flex-center">
                                        <li>
                                            <a href><span class="menu-item-text">Home</span><span uk-drop-parent-icon></span></a>
                                            <div class="uk-dropdown">
                                                <ul class="uk-nav uk-dropdown-nav">
                                                    <li><a href="#">Active</a></li>
                                                    <li><a href="#">Item</a></li>
                                                    <li><a href="#">Item</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown-differ">
                                            <a href>Shop<span uk-drop-parent-icon></span></a>
                                            <div class="uk-dropdown menu-infor">
                                                <div class="uk-child-width-1-3" uk-grid>
                                                    <div>
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Active</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-header">Header</li>
                                                            <li><a href="#">Item</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-divider"></li>
                                                            <li><a href="#">Item</a></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Active</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-header">Header</li>
                                                            <li><a href="#">Item</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-divider"></li>
                                                            <li><a href="#">Item</a></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Active</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-header">Header</li>
                                                            <li><a href="#">Item</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-divider"></li>
                                                            <li><a href="#">Item</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </li>
                                        <li class="dropdown-differ">
                                            <a class="menu-infor" href>Blog<span uk-drop-parent-icon></span></a>
                                            <div class="uk-dropdown">
                                                <div class="uk-child-width-1-2" uk-grid>
                                                    <div>
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Active</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-header">Header</li>
                                                            <li><a href="#">Item</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-divider"></li>
                                                            <li><a href="#">Item</a></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="uk-nav uk-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Active</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-header">Header</li>
                                                            <li><a href="#">Item</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li class="uk-nav-divider"></li>
                                                            <li><a href="#">Item</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </li>
                                        <li>
                                            <a href>Page<span uk-drop-parent-icon></span></a>
                                            <div class="uk-dropdown">
                                                <ul class="uk-nav uk-dropdown-nav">
                                                    <li class="uk-active"><a href="#">Active</a></li>
                                                    <li><a href="#">Item</a></li>
                                                    <li><a href="#">Item</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href>Vendor<span uk-drop-parent-icon></span></a>
                                            <div class="uk-dropdown">
                                                <ul class="uk-nav uk-dropdown-nav">
                                                    <li class="uk-active"><a href="#">Active</a></li>
                                                    <li><a href="#">Item</a></li>
                                                    <li><a href="#">Item</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <li>
                                    </li>

                                </nav>
                    </div>
                </div>
                <div class="header-notice">
                    <div class="uk-flex uk-flex-middle">
                        <span class="uk-icon" uk-icon="icon: twitter"></span>
                        <span>Free Shipping on Orders $300</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="mobile header uk-hidden@m">
    <div class="uk-container uk-container-1520 mb30">
        <div class="uk-flex uk-flex-middle uk-flex-between">
            <div class="sidebar-left toggle-btn">
                <span class="uk-icon" uk-icon="icon: table"></span>
            </div>
            <div class="ft-logo"><a href=""><img src="/src/public/resource/Images/LOGO.webp" alt=""></a></div>
            <div class="sidebar-right"><i class='bx bx-menu-alt-right' uk-toggle="target: #offcanvas-overlay"></i></div>
            <div id="offcanvas-overlay" uk-offcanvas="overlay: true; mode: slide">
                <div class="uk-offcanvas-bar">
                    <div class="offcanvas-header">
                        <div class="uk-flex">
                            <span class="offcanvas-header-name">Close</span>
                            <button class="uk-offcanvas-close" type="button" uk-close></button>
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="offcanvas-body-infor">
                            <li><a href=""></a>BEST SELLER</li>
                            <li><a href=""></a>Top 100 producs</li>
                            <li><a href=""></a>Handpick by digics</li>
                            <li><a href=""></a>Computer & Laptop <i class="uk-icon" uk-icon="icon: chevron-right;"></i></li>
                            <li><a href=""></a>Digital Cameras <i class="uk-icon" uk-icon="icon: chevron-right;"></i></li>
                            <li><a href=""></a>Audio & Video <i class="uk-icon" uk-icon="icon: chevron-right;"></i></li>
                            <li><a href=""></a>Mobiles & Tablets <i class="uk-icon" uk-icon="icon: chevron-right;"></i></li>
                            <li><a href=""></a>TV & home theater</li>
                            <li><a href=""></a>Portable speakers</li>
                            <li><a href=""></a>Home appliances</li>
                            <li><a href=""></a>Musics & Cameras</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-icon" uk-toggle="target: #modal-example" uk-icon="icon: bag;" uk-toggle></div>
            <!-- This is the modal -->
            <div id="modal-example" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <div class="modal-body-high">
                        <i class="uk-modal-title bx bx-shopping-bag"></i>
                        <p class="modal-title">No products in the cart</p>
                    </div>
                    <div class="modal-body-low">
                        <a class="Shop mb10" href="#">Go to shop <span class="uk-icon" uk-icon="icon: arrow-right;"></span></a>
                        <span>FRee Shipping on all <a href="">orders over $75</a></span>
                    </div>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" type="button">Save</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav class="sidebar">
        <div class="logo-menu">
            <h2 class="logo">Codehal</h2>
            <button class="btnClose" type="button" uk-close></button>
        </div>
        <ul class="list">
            <li class="list-item active">
                <a href="">
                    <span class="uk-icon menu-icon" uk-icon="icon: home"></span>
                    <span class="list-name" style="--i:1;">Dashboard</span>
                </a>
            </li>
            <li class="list-item">
                <a href="">
                    <span class="uk-icon menu-icon" uk-icon="icon: user"></span>
                    <span class="list-name" style="--i:2;">User</span>
                </a>
            </li>
            <li class="list-item">
                <a href="">
                    <span class="uk-icon menu-icon" uk-icon="icon: info"></span>
                    <span class="list-name" style="--i:3;">Messages</span>
                </a>
            </li>
            <li class="list-item">
                <a href="">
                    <span class="uk-icon menu-icon" uk-icon="icon: cart"></span>
                    <span class="list-name" style="--i:4;">Order</span>
                </a>
            </li>
            <li class="list-item">
                <a href="">
                    <span class="uk-icon menu-icon" uk-icon="icon: cog"></span>
                    <span class="list-name" style="--i:5;">Setting</span>
                </a>
            </li>
        </ul>
    </nav>
</header>