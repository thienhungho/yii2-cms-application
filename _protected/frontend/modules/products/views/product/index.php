<?php

$this->title = Yii::t('app', slug_to_text($type));

?>

<section class="search-wrapper">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder" style="background-image: url(&quot;images/search.jpg&quot;); opacity: 1;">
            <img src="images/search.jpg" alt="images/search.jpg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <h3>
                                <span>35,270</span> website templates from our creative community</h3>
                        </div>
                        <div class="search__field">
                            <form action="category-grid.html#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Search your products">
                                    <button class="btn btn--round" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="category-grid.html#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="category-grid.html#">All Products</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.search-area2 -->
</section>

<div class="colorlib-blog colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box fadeInUp animated-fast">
                <h2>Read Our News</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name</p>
            </div>
        </div>
        <div class="row">
<!--            --><?//= \yii\widgets\ListView::widget([
//                'dataProvider' => $dataProvider,
//                'itemView'     => '_product',
//                'summary' => '',
//            ]); ?>
        </div>
    </div>
</div>