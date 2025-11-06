<?php $__env->startSection('title'); ?>
<?php echo e(trans('admin/users/general.create_user')); ?> ::
<?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<p><?php echo e(trans('admin/users/general.create_user_page_explanation')); ?></p>

<form action="<?php echo e(route('setup.user.save')); ?>" method="POST">
  <?php echo e(csrf_field()); ?>


  <div class="col-lg-12" style="padding-top: 20px;">

    <!-- Site Name -->
    <div class="row">
      <div class="form-group col-lg-12 required <?php echo e($errors->has('site_name') ? 'error' : ''); ?>">
        <label for="site_name">
          <?php echo e(trans('general.site_name')); ?>

        </label>
        <input class="form-control" placeholder="Snipe-IT Asset Management" required="" name="site_name" type="text" value="<?php echo e(old('site_name')); ?>">

        <?php echo $errors->first('site_name', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>
    </div>

  <div class="row">

    <!-- Language -->
    <div class="form-group col-lg-6<?php echo e($errors->has('default_language') ? ' error' : ''); ?>">
      <label for="locale">
        <?php echo e(trans('admin/settings/general.default_language')); ?>

      </label>
      <?php if (isset($component)) { $__componentOriginal7d0a682e0815be85aedd9fbba1a53208 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d0a682e0815be85aedd9fbba1a53208 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f66fc5ac70f05e5e4e4f0155e130347c::input.locale-select','data' => ['name' => 'locale','selected' => old('locale', 'en-US')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input.locale-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'locale','selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('locale', 'en-US'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d0a682e0815be85aedd9fbba1a53208)): ?>
<?php $attributes = $__attributesOriginal7d0a682e0815be85aedd9fbba1a53208; ?>
<?php unset($__attributesOriginal7d0a682e0815be85aedd9fbba1a53208); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d0a682e0815be85aedd9fbba1a53208)): ?>
<?php $component = $__componentOriginal7d0a682e0815be85aedd9fbba1a53208; ?>
<?php unset($__componentOriginal7d0a682e0815be85aedd9fbba1a53208); ?>
<?php endif; ?>
      <?php echo $errors->first('locale', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

    </div>

    <!-- Currency -->
    <div class="form-group col-lg-6<?php echo e($errors->has('default_currency') ? ' error' : ''); ?>">
      <label for="default_currency"><?php echo e(trans('admin/settings/general.default_currency')); ?></label>
      <input class="form-control" placeholder="USD" maxlength="3" style="width: 60px;" name="default_currency" type="text" id="default_currency" value="<?php echo e(old('default_currency')); ?>">

      <?php echo $errors->first('default_currency', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

    </div>

  </div>

  <div class="row">

    <div class="form-group col-lg-6">

      <label class="form-control form-control">
        <input type="checkbox" value="1" name="auto_increment_assets"><?php echo e(trans('admin/settings/general.auto_increment_assets')); ?>

      </label>

    </div>

    <!-- Multi Company Support -->
    <div class="form-group col-lg-6">
      <label class="form-control form-control">
        <input type="checkbox" value="1" name="full_multiple_companies_support">  <?php echo e(trans('admin/settings/general.full_multiple_companies_support_text')); ?>

      </label>
    </div>


  </div>

  <div class="row">

    <div class="form-group col-lg-6<?php echo e($errors->has('auto_increment_prefix') ? ' error' : ''); ?>">
      <label for="auto_increment_prefix"><?php echo e(trans('admin/settings/general.auto_increment_prefix')); ?></label>
      <input class="form-control" name="auto_increment_prefix" type="text" id="auto_increment_prefix" value="<?php echo e(old('auto_increment_prefix')); ?>">

      <?php echo $errors->first('auto_increment_prefix', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

    </div>

    <div class="form-group col-lg-6<?php echo e($errors->has('zerofill_count') ? ' error' : ''); ?>">
      <label for="zerofill_count"><?php echo e(trans('admin/settings/general.zerofill_count')); ?></label>
      <input class="form-control" name="zerofill_count" type="text" value="<?php echo e(old('zerofill_count', 5)); ?>" id="zerofill_count">

      <?php echo $errors->first('zerofill_count', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

    </div>
  </div>


    <!-- email domain -->
    <div class="row">
      <div class="form-group col-lg-6 required <?php echo e($errors->has('email_domain') ? 'error' : ''); ?>">
        <label for="email_domain"><?php echo e(trans('general.email_domain')); ?></label>
        <input class="form-control" placeholder="example.com" required="" name="email_domain" type="text" id="email_domain" value="<?php echo e(old('email_domain')); ?>">
        <span class="help-block"><?php echo e(trans('general.email_domain_help')); ?></span>

        <?php echo $errors->first('email_domain', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>

      <!-- email format  -->
      <div class="form-group col-lg-6 <?php echo e($errors->has('email_format') ? 'error' : ''); ?>">
        <label for="email_format"><?php echo e(trans('admin/settings/general.email_formats.email_format')); ?></label>
        <?php echo Form::username_format('email_format', old('email_format', 'filastname'), 'select2'); ?>

        <?php echo $errors->first('email_format', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>
    </div>

    <!-- Name -->
    <div class="row">
      <!-- first name -->
      <div class="form-group col-lg-6">
        <label for="first_name"><?php echo e(trans('general.first_name')); ?></label>
        <input class="form-control" placeholder="Jane" required="" name="first_name" type="text" id="first_name" value="<?php echo e(old('first_name')); ?>">
        <?php echo $errors->first('first_name', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>

      <!-- last name -->
      <div class="form-group col-lg-6 required <?php echo e($errors->has('last_name') ? 'error' : ''); ?>">
        <label for="last_name"><?php echo e(trans('general.last_name')); ?></label>
        <input class="form-control" placeholder="Smith" required="" name="last_name" type="text" id="last_name" value="<?php echo e(old('last_name')); ?>">
        <?php echo $errors->first('last_name', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>
    </div>

    <div class="row">
      <!-- email-->
      <div class="form-group col-lg-6<?php echo e($errors->has('email') ? 'error' : ''); ?>">
        <label for="email"><?php echo e(trans('admin/users/table.email')); ?></label>
        <input class="form-control" type="email" name="email" id="email" value="<?php echo e(old('email', config('mail.from.address'))); ?>" placeholder="you@example.com" required>
        <?php echo $errors->first('email', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>

      <!-- username -->
      <div class="form-group col-lg-6<?php echo e((Helper::checkIfRequired(\App\Models\User::class, 'username')) ? ' required' : ''); ?> <?php echo e($errors->has('username') ? 'error' : ''); ?>">
        <label for="username"><?php echo e(trans('admin/users/table.username')); ?></label>
        <input class="form-control" placeholder="jsmith" required="" name="username" type="text" id="username" value="<?php echo e(old('username')); ?>">
        <?php echo $errors->first('username', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>
    </div>

    <div class="row">
      <!-- password -->
      <div class="form-group col-lg-6<?php echo e((Helper::checkIfRequired(\App\Models\User::class, 'password')) ? ' required' : ''); ?> <?php echo e($errors->has('password') ? 'error' : ''); ?>">
        <label for="password"><?php echo e(trans('admin/users/table.password')); ?></label>
        <input class="form-control" type="password" name="password" id="password" value="" required>
        <?php echo $errors->first('password', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>

      <!-- password confirm -->
      <div class="form-group col-lg-6<?php echo e((Helper::checkIfRequired(\App\Models\User::class, 'password')) ? ' required' : ''); ?> <?php echo e($errors->has('password_confirm') ? 'error' : ''); ?>">
        <label for="password_confirmation"><?php echo e(trans('admin/users/table.password_confirm')); ?></label>
        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" value="" required>
        <?php echo $errors->first('password_confirmation', '<span class="alert-msg" aria-hidden="true">:message</span>'); ?>

      </div>
    </div>

    <!-- Email credentials -->
    <div class="form-group col-lg-12">
      <label class="form-control form-control">
        <input type="checkbox" value="1" name="email_creds"><?php echo e(trans('admin/users/general.email_credentials_text')); ?>

      </label>
    </div>
  </div> <!--/.COL-LG-12-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('button'); ?>
  <button class="btn btn-primary"><?php echo e(trans('admin/users/general.next_save_user')); ?></button>
</form>
<?php echo \Illuminate\View\Factory::parentPlaceholder('button'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/setup', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\snipe-it\resources\views/setup/user.blade.php ENDPATH**/ ?>