<?php
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php $this->registerCsrfMetaTags() ?>
        <title>CoffeeMan</title>
        <?php $this->head() ?>
    </head>
    <body>
        <!-- Start of the body -->
        <?php $this->beginBody() ?>
        <?=$this->render('_header')?>
        <main>
        <?=$content?>
        </main>
        <?=$this->render('_footer')?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
