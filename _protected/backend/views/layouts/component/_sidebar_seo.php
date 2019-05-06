<!-- SEO -->
<?php
if (is_role(['admin', 'manager'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'SEO') ?></h3>
    </li>
    <li class="nav-item  ">
        <a href="https://trends.google.com/trends/explore?date=all" class="nav-link nav-toggle"> <i class="icon-key"></i>
            <span class="title"><?= t('app', 'Keyword Research') ?></span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="https://adwords.google.com/keywordplanner" class="nav-link " target="_blank">
                    <i class="icon-key"></i> <span class="title"><?= t('app', 'AdWords External') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="https://trends.google.com/trends/explore?date=all" class="nav-link " target="_blank">
                    <i class="icon-key"></i> <span class="title"><?= t('app', 'Google Trends') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="http://tools.seobook.com/keyword-tools/seobook/?keyword=" class="nav-link " target="_blank">
                    <i class="icon-key"></i> <span class="title"><?= t('app', 'SEO Book') ?></span> </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="https://www.google.com/analytics/" class="nav-link nav-toggle"> <i class="icon-pie-chart"></i>
            <span class="title"><?= t('app', 'Google Analytics') ?></span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="https://www.google.com/analytics/" class="nav-link " target="_blank">
                    <i class="icon-pie-chart"></i> <span class="title"><?= t('app', 'Dashboard') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/google-analytics-configuration/google-analytics']) ?>" class="nav-link ">
                    <i class="icon-settings"></i> <span class="title"><?= t('app', 'Settings') ?></span> </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="https://www.google.com/webmasters/" class="nav-link nav-toggle"> <i class="icon-graph"></i>
            <span class="title"><?= t('app', 'Google Webmasters') ?></span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="https://www.google.com/webmasters/" class="nav-link " target="_blank">
                    <i class="icon-bar-chart"></i> <span class="title"><?= t('app', 'Dashboard') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="https://www.google.com/webmasters/tools/home" class="nav-link " target="_blank">
                    <i class="icon-puzzle"></i> <span class="title"><?= t('app', 'Tools') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="https://www.google.com/webmasters/support/" class="nav-link " target="_blank">
                    <i class="icon-support"></i> <span class="title"><?= t('app', 'Support') ?></span> </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/seo-configuration/general']) ?>" class="nav-link nav-toggle"> <i class="icon-settings"></i>
            <span class="title"><?= t('app', 'SEO Configuration') ?></span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/seo-configuration/general']) ?>" class="nav-link ">
                    <i class="icon-settings"></i> <span class="title"><?= t('app', 'General') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/seo-configuration/site-map']) ?>" class="nav-link ">
                    <i class="icon-map"></i> <span class="title"><?= t('app', 'Site Map') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/seo-configuration/home-page']) ?>" class="nav-link ">
                    <i class="icon-home"></i> <span class="title"><?= t('app', 'Home Page') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
}
?>