<!-- start menu-area -->
<div class="menu-area">
    <!-- start .top-menu-area -->
    <div class="top-menu-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3 col-md-3 col-6 v_middle">
                    <div class="logo">
                        <a href="/"> <img src="/uploads/thecatdev-logo-dark.PNG" alt="logo image" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- end /.col-md-3 -->

                <!-- start .col-md-5 -->
                <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                    <div class="has_dropdown .d-sm-none .d-md-block" style="float: right; padding: 28px 0 0px 17px;">
                        <button class="btn btn--light btn--bordered btn-md" style="font-size: 14px;line-height: 40px;background-color: transparent; border: 0"><img src="/cat-admin/assets/89b91c26/flags/4x3/vn.svg" style="width: 20px;margin-right: 10px; margin-top: -4px;"> Việt Nam </button>
                        <div class="dropdown dropdown--menu" style="min-width: 180px; margin-top: 10px">
                            <ul>
                                <li>
                                    <a href="http://en.thecatdev.com"><img src="/cat-admin/assets/89b91c26/flags/4x3/us.svg" style="width: 20px;margin-right: 10px;margin-top: -4px"> English</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- start .author-area -->
                    <div class="author-area">
                        <?php
                        if (!is_login()) { ?>
                            <a href="<?= url(['/site/login']) ?>" class="author-area__seller-btn inline"><?= Yii::t('app', 'Login') ?></a>
                        <?php echo $this->render('author-notification-area');
                        } else {
                            echo $this->render('author-notification-area_for_guest');
                        }
                        ?>

                        <!--start .author-author__info-->
                        <?php
                        if (!Yii::$app->user->isGuest) {
                            echo $this->render('author-info');
                        }
                        ?>
                        <!--end /.author-author__info-->
                    </div>
                    <!-- end .author-area -->

                    <!-- author area restructured for mobile -->
                    <div class="mobile_content ">
                        <span class="lnr lnr-user menu_icon"></span>

                        <!-- offcanvas menu -->
                        <div class="offcanvas-menu closed">
                            <span class="lnr lnr-cross close_menu"></span>
                            <div class="author-author__info">
                                <div class="author__avatar v_middle">
                                    <img src="/themes/basic/src/images/usr_avatar.png" alt="user avatar">
                                </div>
                                <div class="autor__info v_middle">
                                    <p class="name">
                                        Jhon Doe </p>
                                    <p class="ammount">$20.45</p>
                                </div>
                            </div>
                            <!--end /.author-author__info-->

                            <div class="author__notification_area">
                                <ul>
                                    <li>
                                        <a href="notification.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-alarm"></span>
                                                <span class="notification_count noti">25</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="message.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-envelope"></span>
                                                <span class="notification_count msg">6</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="cart.html">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-cart"></span>
                                                <span class="notification_count purch">2</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <div class="dropdown dropdown--author">
                                <ul>
                                    <li>
                                        <a href="author.html"> <span class="lnr lnr-user"></span>Profile</a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html"> <span class="lnr lnr-home"></span> Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-setting.html"> <span class="lnr lnr-cog"></span> Setting</a>
                                    </li>
                                    <li>
                                        <a href="cart.html"> <span class="lnr lnr-cart"></span>Purchases</a>
                                    </li>
                                    <li>
                                        <a href="favourites.html"> <span class="lnr lnr-heart"></span> Favourite</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-add-credit.html"> <span class="lnr lnr-dice"></span>Add
                                            Credits</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-statement.html"> <span class="lnr lnr-chart-bars"></span>Sale
                                            Statement</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-upload.html"> <span class="lnr lnr-upload"></span>Upload Item</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-manage-item.html"> <span class="lnr lnr-book"></span>Manage
                                            Item</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-withdrawal.html"> <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                    </li>
                                    <li>
                                        <a href="index.html#"> <span class="lnr lnr-exit"></span>Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="text-center">
                                <a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a>
                            </div>
                        </div>
                    </div>
                    <!-- end /.mobile_content -->
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end  -->

    <!-- start .mainmenu_area -->
    <?= get_block_content('main-menu-area', Yii::$app->language) ?>
    <!-- end /.mainmenu-->
</div><!-- end /.menu-area -->