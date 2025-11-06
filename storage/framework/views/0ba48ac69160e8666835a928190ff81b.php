<?php $__env->startComponent('mail::message'); ?>
<?php echo new \Illuminate\Support\EncodedHtmlString(trans('mail.hello')); ?> <?php echo new \Illuminate\Support\EncodedHtmlString($first_name); ?> <?php echo new \Illuminate\Support\EncodedHtmlString($last_name); ?>,

<?php echo new \Illuminate\Support\EncodedHtmlString(trans('mail.login')); ?>: <?php echo new \Illuminate\Support\EncodedHtmlString($username); ?> <br>
<?php echo new \Illuminate\Support\EncodedHtmlString(trans('mail.password')); ?>: <?php echo new \Illuminate\Support\EncodedHtmlString($password); ?>


<?php $__env->startComponent('mail::button', ['url' => $url]); ?>
Go To <?php echo new \Illuminate\Support\EncodedHtmlString($snipeSettings->site_name); ?>

<?php echo $__env->renderComponent(); ?>

<?php echo new \Illuminate\Support\EncodedHtmlString(trans('mail.best_regards')); ?> <br>
<?php if($snipeSettings->show_url_in_emails=='1'): ?>
    <p><a href="<?php echo new \Illuminate\Support\EncodedHtmlString(config('app.url')); ?>"><?php echo new \Illuminate\Support\EncodedHtmlString($snipeSettings->site_name); ?></a></p>
<?php else: ?>
    <p><?php echo new \Illuminate\Support\EncodedHtmlString($snipeSettings->site_name); ?></p>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\snipe-it\resources\views/notifications/FirstAdmin.blade.php ENDPATH**/ ?>