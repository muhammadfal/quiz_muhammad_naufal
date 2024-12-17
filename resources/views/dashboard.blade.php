<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(115deg,rgb(138, 30, 30), #2563eb,rgb(255, 71, 224),rgb(122, 255, 204), #6a5acd);
            background-size: 400% 400%;
            animation: aurora 7s ease infinite;
            color:rgb(0, 0, 0);
        }

        @keyframes aurora {
            0% { background-position: 0% 50%; }
            25% { background-position: 50% 100%; }
            50% { background-position: 100% 50%; }
            75% { background-position: 50% 0%; }
            100% { background-position: 0% 50%; }
        }

        .navbar {
            background-color:rgb(47, 122, 151);
            color: #ffffff;
        }
        .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #ffd700 !important;
        }
        .content {
            padding: 40px;
        }
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color:rgb(47, 122, 151);
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        .btn-light {
            color: #343a40 !important;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('golongan.index') }}">Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger nav-link text-white border-0">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="container">
            <h1 class="mb-4">Selamat Datang di Dashboard</h1>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-header text-center fw-bold bg-dark">Golongan</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data golongan</p>
                            <a href="{{ route('golongan.index') }}" class="btn btn-light w-100">Lihat Golongan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-header text-center fw-bold bg-dark">User</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data user</p>
                            <a href="{{ route('user.index') }}" class="btn btn-light w-100">Lihat User</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-header text-center fw-bold bg-dark">Pelanggan</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data pelanggan</p>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-light w-100">Lihat Pelanggan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="mb-0">&copy; Muhammad Naufal</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
