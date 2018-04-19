<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('sidebar'); ?>

    <p>This is appended to the master sidebar.</p>
    <?php echo e($name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('hello', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>