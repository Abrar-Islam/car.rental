<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  	<?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
    <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div style="position:relative; top:60px; right:-150px">
    <form action="<?php echo e(url('/update',$data->id)); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div>
        <label>New Model</label>
        <input style="color:blue;" type="text" name="model" value="<?php echo e($data->model); ?>" required>
      </div>

      <div>
        <label>New Base Fare</label>
        <input style="color:blue; type="num" name="price" value="<?php echo e($data->price); ?>" required>
      </div>

      <div>
        <label>Total Capacity</label>
        <input style="color:blue; type="num" name="capacity" value="<?php echo e($data->capacity); ?>" required>
      </div>

      <div>
        <label>old Image</label>
        <img width="200" height="200" src="/carimage/<?php echo e($data->image); ?>">
      </div>

      <div>
        <label>Change Image</label>
        <input type="file" name="image" required>
      </div>

      <div>
        <label>Description</label>
        <input style="color:blue; type="text" name="description" value="<?php echo e($data->description); ?>" required>
      </div>

      <div>
        <input type="submit" value="Save">
      </div>

      </form>

  </div>
</div>
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\vms\resources\views/admin/updateview.blade.php ENDPATH**/ ?>