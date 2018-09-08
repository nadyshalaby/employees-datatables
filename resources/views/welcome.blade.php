<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
    <title>Laravel</title>
</head>
<body>
    {!! $dataTable->table() !!}

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js" charset="utf-8"></script>
    <script src="{{ url('/vendor/datatables/buttons.server-side.js') }}" charset="utf-8"></script>
    {!! $dataTable->scripts() !!}
</body>
</html>
