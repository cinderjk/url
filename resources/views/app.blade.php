<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <style>
        body {
            background-color: lightgray
        }
    </style>
    <title>{{ config('app.name') }}</title>
</head>

<body>
    @inertia
</body>

</html>