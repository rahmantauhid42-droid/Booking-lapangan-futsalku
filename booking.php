<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - FutsalKu</title>

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
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #1c1c1c;
            padding: 35px;
            border-radius: 15px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 span {
            color: #00ff88;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 7px;
            background: #292929;
            color: white;
            outline: none;
        }

        input:focus,
        select:focus {
            border: 1px solid #00ff88;
        }

        .total {
            margin-top: 25px;
            padding: 15px;
            background: #292929;
            border-radius: 8px;
            text-align: center;
            font-size: 20px;
        }

        .total span {
            color: #00ff88;
            font-weight: bold;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #00ff88;
            color: #111;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #00cc6a;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #aaa;
            text-decoration: none;
        }

        .back:hover {
            color: #00ff88;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Booking <span>FutsalKu</span></h1>

    <form action="proses_booking.php" method="POST">

        <label>Nama Lengkap</label>
        <input 
            type="text" 
            name="nama" 
            placeholder="Masukkan nama kamu"
            required
        >

        <label>Nomor HP</label>
        <input 
            type="tel" 
            name="no_hp" 
            placeholder="08xxxxxxxxxx"
            required
        >

        <label>Pilih Lapangan</label>
        <select name="lapangan" id="lapangan" onchange="hitungTotal()" required>
            <option value="">-- Pilih Lapangan --</option>
            <option value="Lapangan A" data-harga="80000">
                Lapangan A - Rp80.000/jam
            </option>

            <option value="Lapangan B" data-harga="100000">
                Lapangan B - Rp100.000/jam
            </option>

            <option value="Lapangan C" data-harga="120000">
                Lapangan C - Rp120.000/jam
            </option>
        </select>

        <label>Tanggal Booking</label>
        <input 
            type="date" 
            name="tanggal"
            required
        >

        <label>Jam Mulai</label>
        <input 
            type="time" 
            name="jam"
            required
        >

        <label>Durasi</label>
        <select name="durasi" id="durasi" onchange="hitungTotal()" required>
            <option value="1">1 Jam</option>
            <option value="2">2 Jam</option>
            <option value="3">3 Jam</option>
            <option value="4">4 Jam</option>
        </select>

        <div class="total">
            Total Harga:
            <span id="total">Rp0</span>
        </div>

        <button type="submit">
            Booking Sekarang
        </button>

    </form>

    <a href="index.php" class="back">
        ← Kembali ke halaman utama
    </a>

</div>

<script>
function hitungTotal() {

    const lapangan = document.getElementById("lapangan");
    const durasi = document.getElementById("durasi");

    const pilihan = lapangan.options[lapangan.selectedIndex];

    const harga = pilihan.dataset.harga || 0;
    const jumlahJam = durasi.value;

    const total = harga * jumlahJam;

    document.getElementById("total").innerText =
        "Rp" + total.toLocaleString("id-ID");
}
</script>

</body>
</html>