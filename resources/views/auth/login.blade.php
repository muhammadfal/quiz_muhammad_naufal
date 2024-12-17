<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa; /* Warna latar belakang yang lebih cerah dan sejuk */
            color: #004d40; /* Warna teks yang lebih gelap untuk kontras yang baik */
        }

        .card {
            background-color: #ffffff; /* Warna latar card yang lebih terang */
            border: none; /* Menghilangkan border */
            border-radius: 15px; /* Membulatkan sudut card */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih tegas untuk dimensi */
            padding: 40px; /* Lebih banyak padding untuk kenyamanan pengguna */
            margin: auto;
            margin-top: 50px;
            width: 90%;
            max-width: 400px; /* Membatasi lebar card untuk tampil lebih seimbang */
        }

        .form-label {
            font-weight: bold; /* Menggunakan font yang tebal untuk label input */
            color: #00796b; /* Warna label lebih terang untuk kontras yang baik */
        }

        .btn-primary {
            background-color: #007bff; /* Warna tombol biru cerah */
            border: none;
            transition: background-color 0.3s ease;
            width: 100%; /* Membuat tombol seukuran lebar card */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna biru gelap pada hover */
        }

        .alert {
            background-color: #ffcdd2; /* Warna merah muda lembut untuk alert error */
            border: none; /* Menghilangkan border pada alert */
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px; /* Membulatkan sudut alert */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan lembut untuk dimensi */
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert ul li {
            list-style: none;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card">
        <h2 class="text-center mb-4">Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
