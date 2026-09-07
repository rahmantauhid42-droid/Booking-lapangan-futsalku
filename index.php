<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FutsalKu - Booking Lapangan</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #111;
            color: white;
        }

        /* ================= NAVBAR ================= */

        nav {
            width: 100%;
            height: 70px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 0 8%;

            background: #181818;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .logo span {
            color: #00ff88;
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .menu a:hover {
            color: #00ff88;
        }

        .admin-btn {
            background: #00ff88;
            color: #111 !important;

            padding: 9px 16px;

            border-radius: 7px;

            font-weight: bold;
        }

        .admin-btn:hover {
            background: #00cc6a;
        }

        /* ================= HERO ================= */

        .hero {
            min-height: 80vh;

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 30px;
        }

        .hero-content {
            max-width: 700px;
        }

        .hero h1 {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #00ff88;
        }

        .hero p {
            color: #aaa;

            font-size: 18px;

            line-height: 1.6;

            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;

            background: #00ff88;

            color: #111;

            padding: 14px 25px;

            border-radius: 8px;

            text-decoration: none;

            font-weight: bold;
        }

        .btn:hover {
            background: #00cc6a;
        }

        /* ================= LAPANGAN ================= */

        .lapangan {
            padding: 70px 8%;

            background: #181818;

            text-align: center;
        }

        .lapangan h2 {
            font-size: 35px;

            margin-bottom: 40px;
        }

        .cards {
            display: flex;

            justify-content: center;

            gap: 20px;

            flex-wrap: wrap;
        }

        .card {
            background: #222;

            padding: 30px;

            width: 280px;

            border-radius: 12px;

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-bottom: 15px;
        }

        .card p {
            color: #aaa;

            line-height: 1.5;

            margin-bottom: 15px;
        }

        .harga {
            color: #00ff88;

            font-size: 20px;

            font-weight: bold;

            margin: 15px 0 20px;
        }

        /* ================= CARA BOOKING ================= */

        .cara {
            padding: 70px 8%;

            text-align: center;
        }

        .cara h2 {
            font-size: 35px;

            margin-bottom: 40px;
        }

        .steps {
            display: flex;

            justify-content: center;

            gap: 20px;

            flex-wrap: wrap;
        }

        .step {
            width: 220px;

            padding: 25px;

            background: #1c1c1c;

            border-radius: 10px;
        }

        .step-number {
            font-size: 30px;

            color: #00ff88;

            font-weight: bold;

            margin-bottom: 10px;
        }

        .step h3 {
            margin-bottom: 10px;
        }

        .step p {
            color: #aaa;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #181818;

            text-align: center;

            padding: 25px;

            color: #888;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 600px) {

            nav {
                padding: 0 5%;
            }

            .menu {
                gap: 12px;
            }

            .menu a {
                font-size: 13px;
            }

            .hero h1 {
                font-size: 38px;
            }

        }

    </style>
</head>

<body>


    <!-- NAVBAR -->

    <nav>

        <div class="logo">
            Futsal<span>Ku</span>
        </div>

        <div class="menu">

            <a href="#home">
                Home
            </a>

            <a href="#lapangan">
                Lapangan
            </a>

            <a href="admin.php" class="admin-btn">
                Admin
            </a>

        </div>

    </nav>


    <!-- HERO -->

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>
                Booking Futsal
                <span>Lebih Mudah</span>
            </h1>

            <p>
                Mau main futsal tapi takut lapangannya penuh?
                Cek jadwal dan booking lapangan dengan mudah
                menggunakan FutsalKu.
            </p>

            <a href="#lapangan" class="btn">
                Booking Sekarang
            </a>

        </div>

    </section>


    <!-- LAPANGAN -->

    <section class="lapangan" id="lapangan">

        <h2>
            Pilih Lapangan
        </h2>

        <div class="cards">


            <!-- LAPANGAN A -->

            <div class="card">

                <h3>
                    ⚽ Lapangan Beton
                </h3>

                <p>
                    Lapangan Beton dengan
                    fasilitas yang nyaman.
                </p>

                <div class="harga">
                    Rp80.000 / jam
                </div>

                <a href="booking.php" class="btn">
                    Booking
                </a>

            </div>


            <!-- LAPANGAN B -->

            <div class="card">

                <h3>
                    ⚽ Lapangan Sintetis
                </h3>

                <p>
                    Lapangan Sintetis dengan menggunakan
                    rumput sintetis.
                </p>

                <div class="harga">
                    Rp100.000 / jam
                </div>

                <a href="booking.php" class="btn">
                    Booking
                </a>

            </div>


            <!-- LAPANGAN C -->

            <div class="card">

                <h3>
                    ⚽ Lapangan Permium
                </h3>

                <p>
                    Lapangan premium dengan
                    fasilitas terbaik,luas dan fasilitas lengkap
                </p>

                <div class="harga">
                    Rp120.000 / jam
                </div>

                <a href="booking.php" class="btn">
                    Booking
                </a>

            </div>

        </div>

    </section>


    <!-- CARA BOOKING -->

    <section class="cara">

        <h2>
            Cara Booking
        </h2>

        <div class="steps">


            <div class="step">

                <div class="step-number">
                    01
                </div>

                <h3>
                    Pilih Lapangan
                </h3>

                <p>
                    Pilih lapangan yang
                    ingin kamu gunakan.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    02
                </div>

                <h3>
                    Pilih Jadwal
                </h3>

                <p>
                    Tentukan tanggal,
                    jam dan durasi bermain.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    03
                </div>

                <h3>
                    Isi Data
                </h3>

                <p>
                    Masukkan nama dan
                    nomor HP kamu.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    04
                </div>

                <h3>
                    Selesai
                </h3>

                <p>
                    Booking berhasil dan
                    data tersimpan.
                </p>

            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <p>
            © 2026 FutsalKu. Booking Lapangan Jadi Lebih Mudah.
        </p>

    </footer>


</body>
</html>