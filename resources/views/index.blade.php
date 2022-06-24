<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel URL Shorterner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Laravel URL Shorterner</a>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h3 class="text-center mb-4">Buat URL Versi Pendek</h3>
                <div class="card shadow mb-5">
                    <div class="card-body">
                        <div>
                            @if ($errors->any())
                                <div class="alert alert-danger mb-3 pb-0">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('url.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <input placeholder="Masukkan URL yang panjang ke sini" type="url"
                                        class="form-control" name="url">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Perpendek</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if (session('result'))
                    <h6 class="mb-3">URL Pendek Kamu</h6>
                    <div class="card shadow">
                        <div class="card-body">
                            <input value="{{ session('result') }}" type="url" readonly class="form-control">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
