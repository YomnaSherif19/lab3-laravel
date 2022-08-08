

<html>
    <head>

    </head>
    <body>
      
      <?php $__env->startSection('content'); ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user['id']); ?></td>
        <td><?php echo e($user['name']); ?></td>
        <td><?php echo e($user['email']); ?></td>
       
        <td><a href="<?php echo e(route('users.edit',['id'=>$user['id']])); ?>" class="btn btn-success"><button>edit<button></a><td>
        <td>
          <a href="<?php echo e(route('users.destroy',['id'=>$user['id']])); ?>" class="btn btn-darger"><button>delete<button></a>
          
</td>
       
    <tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
</body>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp_New_Installation\htdocs\lab18laravel\resources\views/users/index.blade.php ENDPATH**/ ?>