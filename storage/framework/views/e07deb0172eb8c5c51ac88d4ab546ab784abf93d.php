<?php $__env->startSection('title'); ?> | Organisations <?php echo $__env->yieldContent('sub_title', ''); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>