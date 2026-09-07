<?php

include "koneksi.php";

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$lapangan = $_POST['lapangan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$durasi = $_POST['durasi'];

if ($lapangan == "Lapangan A") {
    $harga = 80000;
} elseif ($lapangan == "Lapangan B") {
    $harga = 100000;
} elseif ($lapangan == "Lapangan C") {
    $harga = 120000;
} else {
    die("Lapangan tidak valid.");
}

$total = $harga * $durasi;

$query = "INSERT INTO bookings
(nama, no_hp, lapangan, tanggal, jam, durasi, total)
VALUES
('$nama', '$no_hp', '$lapangan', '$tanggal', '$jam', '$durasi', '$total')";

if (!mysqli_query($koneksi, $query)) {
    die("Booking gagal: " . mysqli_error($koneksi));
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Booking Berhasil - FutsalKu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #101010;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 500px;
            background: #181818;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 0 30px rgba(0, 255, 136, 0.15);
            border: 1px solid #292929;
        }

        .icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #00ff88;
            color: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            margin-bottom: 8px;
            color: #00ff88;
        }

        .subtitle {
            text-align: center;
            color: #aaa;
            margin-bottom: 30px;
        }

        .detail {
            background: #222;
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            color: #999;
        }

        .value {
            font-weight: bold;
            text-align: right;
        }

        .total {
            color: #00ff88;
            font-size: 18px;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            flex: 1;
            padding: 13px;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
        }

        .home {
            background: #00ff88;
            color: #111;
        }

        .admin {
            background: #333;
            color: white;
        }

        .btn:hover {
            opacity: 0.85;
        }
    </style>
</head>

<body>

<div class="card">

    <div class="icon">✓</div>

    <h1>Booking Berhasil!</h1>

    <p class="subtitle">
        Lapangan kamu berhasil dipesan 🎉
    </p>

    <div class="detail">

        <div class="row">
            <span class="label">Nama</span>
            <span class="value">
                <?= htmlspecialchars($nama); ?>
            </span>
        </div>

        <div class="row">
            <span class="label">No. HP</span>
            <span class="value">
                <?= htmlspecialchars($no_hp); ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Lapangan</span>
            <span class="value">
                <?= htmlspecialchars($lapangan); ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Tanggal</span>
            <span class="value">
                <?= htmlspecialchars($tanggal); ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Jam</span>
            <span class="value">
                <?= htmlspecialchars($jam); ?>
            </span>
        </div>

        <div class="row">
            <span class="label">Durasi</span>
            <span class="value">
                <?= htmlspecialchars($durasi); ?> jam
            </span>
        </div>

        <div class="row">
            <span class="label">Total</span>
            <span class="value total">
                Rp <?= number_format($total, 0, ',', '.'); ?>
            </span>
        </div>

    </div>

    <div class="buttons">
        <a href="index.php" class="btn home">← Home</a>
        <a href="admin.php" class="btn admin">Lihat Admin</a>
    </div>

</div>

</body>
</html>