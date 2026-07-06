<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:
    linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.65)),
    url("{{ asset('images/background.jpg') }}");

    background-size:cover;
    background-position:center;
    background-attachment:fixed;

}

/* NAVBAR */

.navbar{

    background:rgba(255,255,255,.08)!important;
    backdrop-filter:blur(15px);

}

.navbar-brand{

    font-weight:bold;
    font-size:25px;

}

.nav-link{

    color:white!important;
    margin-left:15px;
    transition:.3s;

}

.nav-link:hover{

    color:#00d4ff!important;

}

/* HERO */

.hero{

    min-height:100vh;
    display:flex;
    align-items:center;

}

.hero h1{

    color:white;
    font-size:60px;
    font-weight:700;

}

.hero p{

    color:#ddd;
    font-size:20px;

}

.btn-custom{

    background:#00d4ff;
    color:white;
    border:none;
    padding:12px 30px;
    border-radius:30px;
    transition:.3s;

}

.btn-custom:hover{

    background:#009dff;
    transform:translateY(-3px);

}

/* IMAGE */

.floating{

    animation:float 3s ease-in-out infinite;

}

@keyframes float{

0%{transform:translateY(0);}
50%{transform:translateY(-20px);}
100%{transform:translateY(0);}

}

/* GLASS CARD */

.glass{

    background:rgba(255,255,255,.12);
    backdrop-filter:blur(15px);

    border-radius:20px;
    color:white;

    padding:30px;

    transition:.3s;

    box-shadow:0 10px 25px rgba(0,0,0,.3);

}

.glass:hover{

    transform:translateY(-8px);

    background:rgba(255,255,255,.2);

}

/* STATISTIC */

.stat-number{

    font-size:40px;
    font-weight:bold;

}

.menu-icon{

    font-size:55px;
    color:#00d4ff;

}

footer{

    color:white;
    text-align:center;
    padding:30px;

}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

<div class="container">

<a class="navbar-brand" href="#">
🎓 Akademik
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="/">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/menu">Menu</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/kelas">Kelas</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1>
Selamat Datang 👋
</h1>

<p class="mt-3">

Sistem Informasi Akademik Mahasiswa berbasis Laravel.
Kelola data mahasiswa, kelas, dan akademik secara mudah,
cepat, dan modern.

</p>

<a href="/kelas" class="btn btn-custom mt-3">

<i class="bi bi-book"></i>

Lihat Kelas

</a>

</div>

<div class="col-lg-6 text-center">

<img src="{{ asset('images/student.png') }}"
class="img-fluid floating"
width="420">

</div>

</div>

</div>

</section>

<!-- STATISTIK -->

<div class="container mb-5">

<div class="row g-4">

<div class="col-md-4">

<div class="glass text-center">

<div class="stat-number">150+</div>

Mahasiswa

</div>

</div>

<div class="col-md-4">

<div class="glass text-center">

<div class="stat-number">20</div>

Kelas

</div>

</div>

<div class="col-md-4">

<div class="glass text-center">

<div class="stat-number">12</div>

Dosen

</div>

</div>

</div>

</div>

<!-- MENU -->

<div class="container mb-5">

<h2 class="text-center text-white mb-5">
Menu Utama
</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="glass text-center">

<i class="bi bi-mortarboard menu-icon"></i>

<h4 class="mt-3">Mahasiswa</h4>

</div>

</div>

<div class="col-md-3">

<div class="glass text-center">

<i class="bi bi-journal-bookmark menu-icon"></i>

<h4 class="mt-3">Kelas</h4>

</div>

</div>

<div class="col-md-3">

<div class="glass text-center">

<i class="bi bi-calendar-event menu-icon"></i>

<h4 class="mt-3">Jadwal</h4>

</div>

</div>

<div class="col-md-3">

<div class="glass text-center">

<i class="bi bi-person-circle menu-icon"></i>

<h4 class="mt-3">Profil</h4>

</div>

</div>

</div>

</div>

<footer>

© 2026 Sistem Informasi Akademik | Laravel 12

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>