<div class="col-lg-3" id="sidebar-2">
    <!-- start aside -->
    <aside class="sidebar product--sidebar">
        <div class="sidebar-card card--category">
            <a class="card-title" href="category-grid.html#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                <h4><?= Yii::t('app', 'Categories') ?>
                    <span class="lnr lnr-chevron-down"></span>
                </h4>
            </a>
            <div class="collapse show collapsible-content" id="collapse1">
                <ul class="card-content">
                    <?php
                    $categories = get_all_product_category();
                    foreach ($categories as $category) { ?>
                        <li>
                            <a href="<?= get_product_term_url(
                                'template',
                                'product-category',
                                $category['slug']
                            )?>"><span class="lnr lnr-chevron-right"></span><?= slug_to_text($category['name']) ?>
                                <span class="item-count"><?= count_number_obj_in_term($category['id'], 'template')?></span>
                            </a>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
            <!-- end /.collapsible_content -->
        </div>
        <!-- end /.sidebar-card -->

        <div class="sidebar-card card--filter">
            <a class="card-title" href="category-grid.html#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                <h4><?= Yii::t('app', 'Filter Products') ?>
                    <span class="lnr lnr-chevron-down"></span>
                </h4>
            </a>
            <div class="collapse show collapsible-content" id="collapse2">
                <ul class="card-content">
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt1" class="" name="filter_opt">
                            <label for="opt1">
                                <span class="circle"></span>Trending Products</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt2" class="" name="filter_opt">
                            <label for="opt2">
                                <span class="circle"></span>Popular Products</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                            <label for="opt3">
                                <span class="circle"></span>New Products</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt4" class="" name="filter_opt">
                            <label for="opt4">
                                <span class="circle"></span>Best Seller</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt5" class="" name="filter_opt">
                            <label for="opt5">
                                <span class="circle"></span>Best Rating</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt6" class="" name="filter_opt">
                            <label for="opt6">
                                <span class="circle"></span>Free Support</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-checkbox2">
                            <input type="checkbox" id="opt7" class="" name="filter_opt">
                            <label for="opt7">
                                <span class="circle"></span>On Sale</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end /.sidebar-card -->
    </aside>
    <!-- end aside -->
</div>

<script>
    $('#sidebar-2').theiaStickySidebar({
        additionalMarginTop: 30,
        additionalMarginBottom: 0
    });
</script>