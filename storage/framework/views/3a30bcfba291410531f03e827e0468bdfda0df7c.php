<?php $__env->startSection('pageTitle','Copa Tech - Edit Role'); ?>

<?php $__env->startSection('content'); ?>
  <?php $__env->startComponent('dashboard.layouts.headers.auth'); ?>
    <?php $__env->startComponent('dashboard.layouts.headers.breadcrumbs'); ?>
      <li class="breadcrumb-item"><a href="<?php echo e(route('lead.role.index')); ?>"><?php echo e(__('Role Management')); ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Edit Role')); ?></li>
    <?php echo $__env->renderComponent(); ?>
  <?php echo $__env->renderComponent(); ?>

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0"><?php echo e(__('Edit Role')); ?></h3>
              </div>
              <div class="col-4 text-right">
                <a href="<?php echo e(route('lead.role.index')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Back to list')); ?></a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('lead.role.update', $role)); ?>" autocomplete="off">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>

              <h6 class="heading-small text-muted mb-4"><?php echo e(__('Role information')); ?></h6>
              <div class="pl-lg-4">
                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                  <label class="form-control-label" for="input-name"><?php echo e(__('Name')); ?></label>
                  <input type="text" name="name" id="input-name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name', $role->name)); ?>" required autofocus>

                  <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="form-group<?php echo e($errors->has('description') ? ' has-danger' : ''); ?>">
                  <label class="form-control-label" for="input-description"><?php echo e(__('Description')); ?></label>
                  <textarea name="description" id="input-description" cols="30" rows="10" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Description')); ?>"><?php echo e(old('description', $role->description)); ?></textarea>

                  <?php echo $__env->make('alerts.feedback', ['field' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Save')); ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php echo $__env->make('dashboard.layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', [
  'title' => __('Edit Role'),
  'parentSection' => 'users',
  'elementName' => 'role'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mihz\Desktop\aekiti\resources\views/dashboard/lead/roles/edit.blade.php ENDPATH**/ ?>