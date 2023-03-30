<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">ZolaHola</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/users">users</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/posts">posts</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        @section('sidebar')
            This is the master sidebar.
        @endsection

        @yield('sidebar')

        {{-- @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div> --}}

    </body>
</html>
