<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="navbar">
    <div class="logo">Zerac</div>
    <nav>
        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li class="dropdown">
                <a href="/">Hazard</a>
                <ul class="submenu">
                    <li><a href="/hazard/input">Input Data</a></li>
                    <li><a href="/hazard/upload">Upload Photo</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="/">Statistic</a>
                <ul class="submenu">
                    <li><a href="/data">Laporan Risk</a></li>
                    <li><a href="/statistic/prediction">Hasil Prediksi</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <a href="/login" class="profile">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="8" r="4"></circle>
        <path d="M16 20a4 4 0 0 0-8 0"></path>
    </svg>
</a>
</header>

<!-- Bagian utama -->
<div class="container mt-4">
    <!-- Pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


<div id="news-container">
    <p>Loading news...</p>
</div>
<script src="js/news.js"></script>

</body>
</html>