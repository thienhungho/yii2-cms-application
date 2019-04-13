<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
<!--    --><?//= \yii\widgets\Menu::widget([
//        'encodeLabels' => false,
//        'options' => ['class' => 'm-menu__nav  m-menu__nav--dropdown-submenu-arrow'],
//        'itemOptions'=> ['class' => 'm-menu__item  m-menu__item--submenu', 'aria-haspopup' => "true", 'm-menu-submenu-toggle' => "hover"],
//        'submenuTemplate' => "\n<div class=\"m-menu__submenu \">
//                <span class=\"m-menu__arrow\"></span>
//                <ul class=\"m-menu__subnav\">\n{items}\n</ul></div>",
//        'linkTemplate' => '<a class="m-menu__link m-menu__toggle" href="{url}"><span>{label}</span></a>',
//        'items' => [
//            // Important: you need to specify url as 'controller/action',
//            // not just as 'controller' even if default action is used.
//            ['label' => '<i class="m-menu__link-icon flaticon-layers"></i> <span class="m-menu__link-text"> Home </span> <i class="m-menu__ver-arrow la la-angle-right"></i>', 'url' => ['site/index']],
//            // 'Products' menu item will be selected as long as the route is 'product/index'
//            ['label' => 'Products', 'url' => ['product/index'], 'items' => [
//                ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
//                ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
//            ]],
//            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//        ],
//    ]); ?>
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__section m-menu__section--first">
            <h4 class="m-menu__section-text">
                Departments </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-layers"></i> <span class="m-menu__link-text">
										Resources
									</span> <i class="m-menu__ver-arrow la la-angle-right"></i> </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Resources
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Timesheet
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Payroll
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Contacts
												</span> </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-suitcase"></i>
                <span class="m-menu__link-text">
										Finance
									</span> </a>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-graphic-1"></i> <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Support
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--accent">
													3
												</span>
											</span>
										</span>
									</span> <i class="m-menu__ver-arrow la la-angle-right"></i> </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1">
											<span class="m-menu__link">
												<span class="m-menu__link-title">
													<span class="m-menu__link-wrap">
														<span class="m-menu__link-text">
															Support
														</span>
														<span class="m-menu__link-badge">
															<span class="m-badge m-badge--accent">
																3
															</span>
														</span>
													</span>
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
												<span class="m-menu__link-text">
													Reports
												</span> </a>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Cases
												</span> <i class="m-menu__ver-arrow la la-angle-right"></i> </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">
																Pending
															</span> </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">
																Urgent
															</span> </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">
																Done
															</span> </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
															<span class="m-menu__link-text">
																Archive
															</span> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
												<span class="m-menu__link-text">
													Clients
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
												<span class="m-menu__link-text">
													Audit
												</span> </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-light"></i>
                <span class="m-menu__link-text">
										Administration
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-share"></i>
                <span class="m-menu__link-text">
										Management
									</span> </a>
        </li>
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">
                Reports </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-graphic"></i>
                <span class="m-menu__link-text">
										Accounting
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-network"></i>
                <span class="m-menu__link-text">
										Products
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-network"></i>
                <span class="m-menu__link-text">
										Sales
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-alert"></i>
                <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Bills
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													12
												</span>
											</span>
										</span>
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-technology"></i>
                <span class="m-menu__link-text">
										IPO
									</span> </a>
        </li>
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">
                System </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-clipboard"></i> <span class="m-menu__link-text">
										Applications
									</span> <i class="m-menu__ver-arrow la la-angle-right"></i> </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Applications
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Audit
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Notifications
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Messages
												</span> </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-computer"></i> <span class="m-menu__link-text">
										Modules
									</span> <i class="m-menu__ver-arrow la la-angle-right"></i> </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Modules
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Logs
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Errors
												</span> </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"> <span></span> </i>
                            <span class="m-menu__link-text">
													Configuration
												</span> </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-cogwheel"></i>
                <span class="m-menu__link-text">
										Files
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                <span class="m-menu__link-text">
										Security
									</span> </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
            <a href="inner.html" class="m-menu__link "> <i class="m-menu__link-icon flaticon-settings"></i>
                <span class="m-menu__link-text">
										Options
									</span> </a>
        </li>
    </ul>
</div>