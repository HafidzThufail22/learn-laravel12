<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
 initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Bootstrap CSS so propinsi and barang views (which use Bootstrap classes) render as intended -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom overrides loaded after Bootstrap so they can override default Bootstrap styles -->
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
    <title>Propinsi - CRUD</title>
</head>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">@yield('content')</div>
        </div>
    </div>

    <!-- jQuery + Bootstrap JS (optional for some Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>