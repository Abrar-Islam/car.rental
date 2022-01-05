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
  	<?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
  	<div class="container-scroller">
    <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div style="position:relative; top:60px; right:-150px;">
      <div><h2 style="padding:10px">Add New Item:</h2></div>
      <form action="<?php echo e(url('/addcar')); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div>
        <label>Model</label>
        <input style="color:blue;" type="text" name="model" placeholder="Write the Model" required>
      </div>

      <div>
        <label>Base Fare</label>
        <input style="color:blue; type="num" name="price" placeholder="Input the Price" required>
      </div>

      <div>
        <label>Image</label>
        <input type="file" name="image" required>
      </div>

      <div>
        <label>Total Capacity</label>
        <input style="color:blue; type="num" name="capacity" placeholder="Total Capacity" required>
      </div>

      <div>
        <label>Description</label>
        <input style="color:blue; type="text" name="description" placeholder="Write a Description" required>
      </div>

      <div>
        <input type="submit" value="Save">
      </div>

      </form>
      
      <div><h2 style="padding:10px">View/Edit Item:</h2></div>
      <div>
        <table bgcolor="black">
          <tr>
          <th style="padding:30px">Car Model</th>
          <th style="padding:30px">Base Fare</th>
          <th style="padding:30px">Immage</th>
          <th style="padding:30px">Total Capacity</th>
          <th style="padding:30px">Description</th>
          <th style="padding:30px">Action</th>
          <th style="padding:30px">Change</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr align="center">
          <td><?php echo e($data->model); ?></td>
          <td><?php echo e($data->price); ?>$</td>
          <td><img height="200" width="200" src="/carimage/<?php echo e($data->image); ?>"></td>
          <td><?php echo e($data->capacity); ?></td>
          <td><?php echo e($data->description); ?></td>
          <td><a href="<?php echo e(url('/deletecar',$data->id)); ?>">Delete</a></td>
          <td><a href="<?php echo e(url('/updateview',$data->id)); ?>">Update</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
      </div>
    </div>
</div>
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\vms\resources\views/admin/car.blade.php ENDPATH**/ ?>