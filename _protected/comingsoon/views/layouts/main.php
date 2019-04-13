<?php

\comingsoon\assets\AppAsset::register($this);

$this->title = 'Coming Soon';

?>

<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= \yii\helpers\Html::csrfMetaTags() ?>
    <?= favicon() ?>
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <style>
        body { background-color: #f3f3f3}
    </style>

</head>

<body>
<?php $this->beginBody() ?>

<div class="page-wrapper">
    <header>
        <div class="brand animate" style="text-align: center"><a href=""><img style="max-width: 200px" src="/<?= get_app_logo() ?>" alt=""></a></div>
    </header>
    <div class="content-wrapper">
        <?= $content ?>
    </div>
    <!--end content-wrapper-->
    <footer>

    </footer>
</div>
<!--end page-wrapper-->

<?php $this->endBody() ?>

<script>
    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "assets/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map";
    $(".modal").on("shown.bs.modal", function (e) {
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));
    });
    $('#scene').parallax({
        calibrateX: true,
        calibrateY: true,
        originX: -1.0,
        scalarX: 1400
    });
</script>

</body>
</html>
<?php $this->endPage() ?>