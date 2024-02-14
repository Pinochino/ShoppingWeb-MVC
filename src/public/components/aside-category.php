<aside class="aside">
    <?php $categories = ['Accessories', 'Audio & Video', 'Digital Cameras', 'Game & Video', 'Headphone', 'Mobile & Tablet', 'Speakers', 'Television']  ?>
    <div class="aside-panel aside-category mb20">
        <div class="aside-head">Categories</div>
        <div class="aside-body">
            <ul uk-accordion>
                <?php for ($n = 0; $n < count($categories); $n++) { ?>
                    <li>
                        <a class="uk-accordion-title" href><?php echo $categories[$n]; ?></a>
                        <div class="uk-accordion-content">
                            <ul class="uk-list uk-clearfix">
                                <li><a href=""><i class='bx bxs-right-arrow'></i>Car electronics (0)</a></li>
                                <li><a href=""><i class='bx bxs-right-arrow'></i>Garden Tools (0)</a></li>
                                <li><a href=""><i class='bx bxs-right-arrow'></i>Office Electronics (0)</a></li>
                                <li><a href=""><i class='bx bxs-right-arrow'></i>Watch (0)</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="aside-panel aside-price mb20">
        <div class="aside-head">Price</div>
        <div class="aside-body">
            <div class="price-range-amount">
                <label for="amount">Price range:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </div>
            <div id="slider-range"></div>
        </div>
    </div>
    <div class="aside-panel aside-color mb20">
        <div class="aside-head">Colors</div>
        <div class="aside-body">
            <div class="uk-flex uk-flex-middle">
                <span class="color-item"style="background: #52b745;">
                    <input type="hidden" name="">
                </span>
                <span class="color-item"style="background: #DD9933;">
                    <input type="hidden" name="">
                </span>
                <span class="color-item"style="background: #F45A8D;">
                    <input type="hidden" name="">
                </span>
                <span class="color-item"style="background: #DD3333;">
                    <input type="hidden" name="">
                </span>
            </div>
        </div>
    </div>
    <div class="aside-panel aside-brands mb20">
        <div class="aside-head">Brands</div>
        <div class="aside-body">
            <ul class="uk-flex uk-flex-column">
               <li><input type="checkbox" name="" id=""><a href="">      Dells(2)</a></li>
               <li><input type="checkbox" name="" id=""><a href="">      Iphone(2)</a></li>
               <li><input type="checkbox" name="" id=""><a href="">      Samsungs(3)</a></li>
               <li><input type="checkbox" name="" id=""><a href="">      Xiaomi(2)</a></li>
            </ul>
        </div>
    </div>
</aside>