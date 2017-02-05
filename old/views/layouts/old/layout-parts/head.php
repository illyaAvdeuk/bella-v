<?php
use yii\helpers\Html;
use app\widgets\WSeoMeta;
?>
<head>
    <meta charset="UTF-8">
    <?= WSeoMeta::widget(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=cyrillic" rel="stylesheet">
    <?php $this->head() ?>
</head>


