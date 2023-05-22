<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .btn-edit {
            cursor: pointer;
            color: rgb(79 70 229);
        }

        .btn-edit:hover {
            color: rgb(49 46 129);
        }
    </style>
</head>
<body class="antialiased">
<div class="container mt-5">
    <table class="table table-striped table-hover caption-top">
        <caption class="mb-5">
            <h3 class="fw-bold text-black">Users</h3>
            <span>A list of all the users in your account including their Name, Tenants, Status.</span>
        </caption>
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Tenants</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">
                    {{ $user->name }}
                </th>
                <td>
                    {{ implode(', ', $user->tenants->pluck('name')->toArray()) }}
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-sm">Active</button>
                </td>
                <td><span class="btn-edit">edit</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
