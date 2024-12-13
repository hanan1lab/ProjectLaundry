<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Laundry Web</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-image: url('https://th.bing.com/th/id/OIP.8nd_aboZ-Rq7VVxTv1GiUQHaFj?rs=1&pid=ImgDetMain'); /* Add your image path here */
            background-size: cover; /* Ensure the image covers the entire body */
            background-position: center; /* Center the background image */
            background-attachment: fixed;
        }

        .jumbotron {
            padding: 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 20px;
        }

        .card h5 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 16px;
            color: #555;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Header and Navbar Section with Bootstrap -->
    <header class="bg-primary p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-white">Laundry Web</h1>
            <nav>
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
            </nav>
        </div>
    </header>

    <!-- Jumbotron Section -->
    <div class="jumbotron">
        <h1>Selamat Datang di Laundry Kami</h1>
        <p>Layanan Laundry Cepat, Murah, dan Berkualitas untuk Anda</p>
    </div>

    <!-- Services Section using Bootstrap Grid System -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Laundry Kiloan</h5>
                    <div class="card-body">
                        <p>Harga hemat untuk pencucian pakaian sehari-hari Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Laundry Satuan</h5>
                    <div class="card-body">
                        <p>Pencucian pakaian per satuan untuk pakaian spesial.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Dry Cleaning</h5>
                    <div class="card-body">
                        <p>Layanan dry cleaning untuk pakaian yang memerlukan perawatan ekstra.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Cuci & Setrika</h5>
                    <div class="card-body">
                        <p>Layanan cuci dan setrika untuk pakaian yang memerlukan perawatan ekstra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    <a href="orders" class="btn btn-link text-white">Order</a>


    <!-- Footer Section -->
    <footer>
        © 2024 Laundry Web. All rights reserved.
    </footer>

    

</body>
</html>