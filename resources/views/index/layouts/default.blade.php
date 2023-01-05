<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Library</title>
    <link rel="shortcut icon" href="{{ asset('img/online-library (2).png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('index.layouts.header')
    @include('index.layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .logo_book {
        width: 3em;
        height: 2.9em;
    }

    ::-webkit-scrollbar-track{
    background-color: #fff;
    }
    ::-webkit-scrollbar{
        width: 0.6em;
    }
    ::-webkit-scrollbar-thumb{
        background: #A0AAB2;
        border-radius: 0.5em;
    }
</style>