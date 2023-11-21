<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - MOMO FISH STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background: url('https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/01/02/357614946.png');
            background-repeat: no-repeat;
            background-size: 1600px;
        }
    </style>
</head>

<body>

    @include('layout.header')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                @yield('breadcrumb')
            </ol>
        </nav>

        @yield('content')
    </div>
    

</body>

</html>