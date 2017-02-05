<?php
use app\assets\AppAsset;
?>
<?php
AppAsset::register($this);
?>
<?php $this->beginContent(); ?>

<?php $this->beginBody() ?>
<?= $content ?>

<?php $this->endBody() ?>

<?php $this->endContent(); ?>