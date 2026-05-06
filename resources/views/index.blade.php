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
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->cnic }}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->comments }}</td>

                <td>
                    <img src="{{ asset('uploads/'.$user->image) }}" width="60" height="60" style="border-radius:5px;">
                </td>

                <td>
                    <a href="/edit/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>

                    <a href="/delete/{{ $user->id }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure you want to delete this user?')">
                       Delete
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>