<?php
use app\assets\AppAsset;
?>
<?php
AppAsset::register($this);
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<body class="page--wide page--tall page__wrapper">
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/modals.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/sidebar.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/left-panel.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/right-panel.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/footer.php'); $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/layout-parts/bottom.php'); $this->endContent(); ?>    
<?php $this->endBody() ?>
</body>
<?php $this->endContent(); ?>