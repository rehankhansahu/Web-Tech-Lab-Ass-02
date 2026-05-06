<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<h2>Edit User</h2>

<form action="/update/<?php echo e($user->id); ?>" method="POST" class="p-4 border rounded">
<?php echo csrf_field(); ?>

<input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control mb-2">

<input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control mb-2">

<input type="text" name="cnic" value="<?php echo e($user->cnic); ?>" class="form-control mb-2">

<input type="text" name="telephone" value="<?php echo e($user->telephone); ?>" class="form-control mb-2">

<textarea name="comments" class="form-control mb-2"><?php echo e($user->comments); ?></textarea>

<button class="btn btn-warning">Update</button>

</form>

</div><?php /**PATH D:\Study\Web Development\projects\assignment_3\resources\views/edit.blade.php ENDPATH**/ ?>