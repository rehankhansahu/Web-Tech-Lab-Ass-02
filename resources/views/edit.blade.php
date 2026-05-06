<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<h2>Edit User</h2>

<form action="/update/{{ $user->id }}" method="POST" class="p-4 border rounded">
@csrf

<input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2">

<input type="email" name="email" value="{{ $user->email }}" class="form-control mb-2">

<input type="text" name="cnic" value="{{ $user->cnic }}" class="form-control mb-2">

<input type="text" name="telephone" value="{{ $user->telephone }}" class="form-control mb-2">

<textarea name="comments" class="form-control mb-2">{{ $user->comments }}</textarea>

<button class="btn btn-warning">Update</button>

</form>

</div>