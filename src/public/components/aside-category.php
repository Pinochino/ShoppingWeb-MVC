<aside class="aside">
    <?php $categories = ['Accessories', 'Audio & Video', 'Digital Cameras', 'Game & Video', 'Headphone', 'Mobile & Tablet', 'Speakers', 'Television']  ?>
    <div class="aside-panel aside-category">
        <div class="aside-head">Categories</div>
        <div class="aside-body">
            <ul uk-accordion>
                <?php for ($n = 0; $n < count($categories); $n++) { ?>
                    <li>
                        <a class="uk-accordion-title" href><?php echo $categories[$n]; ?></a>
                        <div class="uk-accordion-content">
                            <ul class="uk-list uk-clearfix">
                                <li><a href="">Car electronics (0)</a></li>
                                <li><a href="">Garden Tools (0)</a></li>
                                <li><a href="">Office Electronics (0)</a></li>
                                <li><a href="">Watch (0)</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</aside>