<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .stat-card {
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .stat-card .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-card .card-body i {
            font-size: 40px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .navbar-nav .nav-link {
            padding: 10px;
        }

        .content {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transaksi.index') }}">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembelian.index') }}">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services.index') }}">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('laporan.index') }}">Laporan</a>
                </li>
            </ul>

            <!-- Logout Button -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm nav-link" style="border: none; background: none; color: white;">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <div class="container content">
        <h1>Dashboard</h1>

        <!-- Statistik -->
        <div class="row">
            <div class="col-md-4">
                <div class="stat-card bg-primary">
                    <div class="card-body">
                        <div>
                            <h3>37</h3>
                            <p>Total Produk</p>
                        </div>
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card bg-success">
                    <div class="card-body">
                        <div>
                            <h3>3</h3>
                            <p>Roles</p>
                        </div>
                        <i class="fas fa-users-cog"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card bg-warning">
                    <div class="card-body">
                        <div>
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Produk -->
        <h3>Produk</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Et eos.</td>
                    <td>Soluta quasi.</td>
                    <td>79,141</td>
                    <td>81,141</td>
                    <td>43</td>
                </tr>
                <tr>
                    <td>Reiciendis ratione.</td>
                    <td>Sint neque.</td>
                    <td>22,636</td>
                    <td>24,636</td>
                    <td>42</td>
                </tr>
                <tr>
                    <td>Consequatur quia et.</td>
                    <td>Rerum.</td>
                    <td>74,170</td>
                    <td>76,170</td>
                    <td>39</td>
                </tr>
            </tbody>
        </table>

        <!-- Tabel Users -->
        <h3>Users</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Isengoding</td>
                    <td>admin@admin.com</td>
                    <td>Admin</td>
                    <td>Aktif</td>
                </tr>
                <tr>
                    <td>Tomiko Van</td>
                    <td>user1@example.com</td>
                    <td>Kasir</td>
                    <td>Aktif</td>
                </tr>
                <tr>
                    <td>Elder Titan</td>
                    <td>user2@example.com</td>
                    <td>Admin</td>
                    <td>Nonaktif</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
<x-app-layout>
