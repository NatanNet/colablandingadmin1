<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportEase Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('{{ asset('storage/images/olahraga11.jpg') }}') no-repeat center center/cover;
            padding: 100px 20px;
            color: white;
            text-align: center;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SportEase</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#upcoming-events">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="#popular-sports">Sports</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <h1>Olahraga untuk Semua</h1>
    <p>Temukan dan ikuti berbagai event olahraga seru</p>
    <form class="d-flex justify-content-center">
        <input class="form-control me-2 w-50" type="search" placeholder="Cari event, kategori, lokasi...">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>

<!-- Upcoming Events -->
<div class="container mt-5" id="upcoming-events">
    <h2 class="text-center mb-4">Events Yang Akan Datang</h2>
    <div class="card-container">
        @foreach($events->take(3) as $event)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $event->banner_image) }}" class="card-img-top" alt="Event">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->nama_event }}</h5>
                    <p class="card-text">{{ $event->lokasi }}</p>
                    <p class="card-text">{{ \Carbon\Carbon::parse($event->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($event->tanggal_selesai)->format('d M Y') }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Kegiatan Section -->
<div class="container mt-5" id="kegiatan">
    <h2 class="text-center mb-4">Kegiatan Olahraga</h2>
    <div class="card-container">
        @foreach($kegiatans->take(3) as $kegiatan)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $kegiatan->banner_image) }}" class="card-img-top" alt="Kegiatan">
                <div class="card-body">
                    <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
                    <p class="card-text">{{ $kegiatan->lokasi }}</p>
                    <p class="card-text">{{ $kegiatan->hari }}, {{ $kegiatan->waktu }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>


<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2025 SportEase. All rights reserved.</p>
    <div>
        <a href="#" class="text-white">About Us</a> |
        <a href="#" class="text-white">Contact</a> |
        <a href="#" class="text-white">Terms</a> |
        <a href="#" class="text-white">Privacy</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
