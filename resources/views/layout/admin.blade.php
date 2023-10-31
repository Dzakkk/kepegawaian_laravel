<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/store">add</a>
                    </li>

                </ul>
                <form class="d-flex" action="/admin/search" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="dropdown">
                    <a class="btn btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="img" class="rounded"
                            style="max-widht: 50px">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/profile">profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="/logout">logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-primary">
        <div class="container d-flex" style="width: 1000px">
            @yield('jumlah')
            @yield('laki')
            @yield('perempuan')
            @yield('pensiun')
        </div>
    </div>

    <div class="container mt-3">
        <div class="d-flex">
            @yield('storeForm')
            @yield('dashboard')
            @yield('profile')
            @yield('update')
            @yield('search')
            @yield('didikjabat')

        </div>
    </div>
    
</body>

</html>
