<div class="content-main animate">
    <div class="container">
        <div class="center count-down animate" data-countdown-year="<?= date('Y', strtotime($coming_soon_time_release)) ?>" data-countdown-month="<?= date('m', strtotime($coming_soon_time_release)) ?>" data-countdown-day="<?= date('d', strtotime($coming_soon_time_release)) ?>"></div>
        <h1 class="font-size-90" style="z-index: 1000; font-size: 3rem"><?= Yii::t('app', 'Get Ready!') ?></h1>
        <h2 class="opacity-60" style="z-index: 1000; font-size: 1rem"><?= Yii::t('app', 'Something Awesome is Coming Soon!') ?></h2>
    </div>
    <!--end container-->
</div>
<!--end content-main-->
<div class="background-wrapper" style="z-index: -1">
    <div id="background-content">
        <ul class="parallax" id="scene">
            <li class="layer opacity-90" data-depth="0.80"><img src="/coming-soon/assets/img/parallax-4.svg" alt=""></li>
            <li class="layer opacity-90" data-depth="0.60"><img src="/coming-soon/assets/img/parallax-3.svg" alt=""></li>
            <li class="layer opacity-90" data-depth="0.40"><img src="/coming-soon/assets/img/parallax-2.svg" alt=""></li>
            <li class="layer opacity-90" data-depth="0.20"><img src="/coming-soon/assets/img/parallax-1.svg" alt=""></li>
        </ul>
    </div>
</div>
<!--end background-wrapper-->
