<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('admin/assets/public/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="mb-1">Welcome, {{ $admin->name }}</h2>
                <p class="mb-0 text-muted">{{ $admin->email }}</p>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3">Assigned Roles</h4>
                <p class="mb-4">{{ $admin->getRoleNames()->implode(', ') ?: 'No roles assigned' }}</p>

                <h4 class="card-title mb-3">Granted Permissions</h4>
                <p class="mb-0">{{ $admin->getPermissionNames()->implode(', ') ?: 'No permissions assigned' }}</p>
            </div>
        </div>
    </div>
</body>
</html>