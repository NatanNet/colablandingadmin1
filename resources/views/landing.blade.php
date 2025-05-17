<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportEase Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SportEase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#upcoming-events">Events</a></li>  <!-- Linknya href supaya ke Upcoming Events -->
                    <li class="nav-item"><a class="nav-link" href="#popular-sports">Sports</a></li>    <!-- Linknya href supaya ke Popular Sports -->
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/login">Login</a></li>       <!-- Linknya href supaya ke Admin -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Olaharga Saya</h1>
        <p>Explore the vibrant events happening locally and globally</p>
        <form class="d-flex justify-content-center">
            <input class="form-control me-2" type="search" placeholder="Search Events, Categories, Location..." aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>

   <!-- Upcoming Events Section -->
   <div class="container mt-5 mb-5" id="upcoming-events"> <!-- Tambahkan ID disini -->
    <h2 class="text-center mb-4">Upcoming Events</h2>
    <div class="card-container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/btangkis2.jpeg') }}" class="card-img-top" alt="Event">
            <div class="card-body">
                <h5 class="card-title">Bulu Tangkis 2025</h5>
                <p class="card-text">Date: 2025-06-10</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/soccer3.jpeg') }}" class="card-img-top" alt="Event">
            <div class="card-body">
                <h5 class="card-title">Soccer Championship</h5>
                <p class="card-text">Date: 2025-06-15</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/basket2.jpg') }}" class="card-img-top" alt="Event">
            <div class="card-body">
                <h5 class="card-title">Basketball Tournament</h5>
                <p class="card-text">Date: 2025-07-20</p>
            </div>
        </div>
    </div>
</div>

<!-- Popular Sports Section -->
<div class="container mt-5 mb-5" id="popular-sports">
    <h2 class="text-center mb-4">Popular Sports</h2>
    <div class="card-container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/futsal1.jpeg') }}" class="card-img-top" alt="Sport">
            <div class="card-body">
                <h5 class="card-title">Soccer</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/basket4.jpeg') }}" class="card-img-top" alt="Sport">
            <div class="card-body">
                <h5 class="card-title">Basketball</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/maraton.jpg') }}" class="card-img-top" alt="Sport">
            <div class="card-body">
                <h5 class="card-title">Running</h5>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<!-- <footer class="bg-dark text-white text-center py-4 mt-5">
    <div>
        <p>&copy; 2025 SportEase. All rights reserved.</p>
    </div>
    <div>
        <a href="#" class="text-white">About Us</a> | 
        <a href="#" class="text-white">Contact Us</a> | 
        <a href="#" class="text-white">Terms of Service</a> | 
        <a href="#" class="text-white">Privacy Policy</a>
    </div>
    <div class="mt-3">
        <a href="#" class="text-white me-3">Facebook</a>
        <a href="#" class="text-white me-3">Instagram</a>
        <a href="#" class="text-white me-3">Twitter</a>
        <a href="#" class="text-white">YouTube</a>
    </div>
</footer> -->
