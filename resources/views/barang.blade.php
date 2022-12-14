<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">TokoLoak</a>
        <input class="form-control form-control-dark  m-2" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav col-sm-3 col-md-2 mx-5">
        </ul>

    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#
                            
                            ">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="container-fluid">
                    <div class="row p-5">
                        <h2>Data Barang</h2>

                        @if (session('status'))
                            <div class="alert alert-{{ session('status') }}" role="alert">
                                <strong>Selamat!</strong> Data berhasil di tambahkan
                            </div>
                        @endif

                        <a href="{{ route('add') }}" class="btn btn-primary">(+) Tambah</a>
                        <table class="table table-hover" border="1" cellpadding='10'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>foto</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($datas as $item)
                                        <th>{{ $no++ }}</th>
                                        <th>{{ $item->name }}</th>
                                        <th><a href="{{ $item->image }}">{{ $item->image }}</a></th>
                                        <th>{{ $item->category }}</th>
                                        <th>{{ $item->price }}</th>
                                        <th>{{ $item->stock }}</th>
                                        <th>{{ $item->sold }}</th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </main>
        </div>
    </div>
</body>

</html>
