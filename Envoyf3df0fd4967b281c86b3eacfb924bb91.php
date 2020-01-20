<?php
<?php /* <?php $__container->servers(['localhost' => '127.0.0.1:8000']); ?> */ ?>

<?php $__container->startTask('deploy'); ?>
    foo
<?php $__container->endTask(); ?>

<?php $__container->startTask('foo'); ?>
    echo "HELLO"
<?php $__container->endTask(); ?>