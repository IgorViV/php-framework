<?php
use frw\View;
/**
 * Description layout
 *
 * @var $this View
 */
?>
<?php $this->getPart('parts/header'); ?>

<?= $this->content; ?>
<?= $this->getDbLogs(); ?>

<?php $this->getPart('parts/footer'); ?>
