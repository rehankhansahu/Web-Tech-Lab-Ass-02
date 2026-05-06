<!DOCTYPE html>
<html>
<head>
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h2 class="text-center mb-4">User Management System</h2>

    <a href="/create" class="btn btn-primary mb-3">+ Add User</a>

    <!-- SEARCH FORM -->
    <form action="/" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by email">
            <button class="btn btn-success">Search</button>
        </div>
    </form>

    <!-- TABLE -->
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>CNIC</th>
                <th>Phone</th>
                <th>Comments</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->cnic); ?></td>
                <td><?php echo e($user->telephone); ?></td>
                <td><?php echo e($user->comments); ?></td>

                <td>
                    <img src="<?php echo e(asset('uploads/'.$user->image)); ?>" width="60" height="60" style="border-radius:5px;">
                </td>

                <td>
                    <a href="/edit/<?php echo e($user->id); ?>" class="btn btn-warning btn-sm">Edit</a>

                    <a href="/delete/<?php echo e($user->id); ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure you want to delete this user?')">
                       Delete
                    </a>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

</div>

</body>
</html><?php /**PATH D:\Study\Web Development\projects\assignment_3\resources\views/index.blade.php ENDPATH**/ ?>