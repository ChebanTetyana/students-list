<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Address Book - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
</head>
<style>
    .container-custom {
        max-width: 960px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-custom">
            <div class="d-flex justify-content-center">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav gap-5 fs-4  mx-auto">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="/groups">Groups</a>
                        <a class="nav-link" href="/students">Students</a>
                        <a class="nav-link" href="/rating">Rating</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>


