<?php

include "koneksi.php";

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM bookings ORDER BY id DESC"
);

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin - FutsalKu</title>

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

    max-width: 1200px;

    margin: auto;
}

h1 {

    margin-bottom: 10px;
}

h1 span {

    color: #00ff88;
}

.subtitle {

    color: #aaa;

    margin-bottom: 30px;
}

.table-container {

    overflow-x: auto;

    background: #1c1c1c;

    border-radius: 12px;

    padding: 15px;
}

table {

    width: 100%;

    border-collapse: collapse;

    min-width: 900px;
}

th {

    background: #00ff88;

    color: #111;

    padding: 14px;

    text-align: left;
}

td {

    padding: 14px;

    border-bottom: 1px solid #333;
}

tr:hover {

    background: #252525;
}

.total {

    color: #00ff88;

    font-weight: bold;
}

.btn {

    display: inline-block;

    margin-top: 25px;

    background: #00ff88;

    color: #111;

    padding: 12px 20px;

    text-decoration: none;

    border-radius: 7px;

    font-weight: bold;
}

</style>

</head>

<body>

<div class="container">

<h1>
Admin <span>FutsalKu</span>
</h1>

<p class="subtitle">
Daftar booking lapangan futsal
</p>

<div class="table-container">

<table>

<tr>

<th>No</th>

<th>Nama</th>

<th>No HP</th>

<th>Lapangan</th>

<th>Tanggal</th>

<th>Jam</th>

<th>Durasi</th>

<th>Total</th>

</tr>


<?php

$no = 1;

while ($data = mysqli_fetch_assoc($query)) {

?>

<tr>

<td>
<?= $no++ ?>
</td>

<td>
<?= htmlspecialchars($data['nama']) ?>
</td>

<td>
<?= htmlspecialchars($data['no_hp']) ?>
</td>

<td>
<?= htmlspecialchars($data['lapangan']) ?>
</td>

<td>
<?= htmlspecialchars($data['tanggal']) ?>
</td>

<td>
<?= htmlspecialchars($data['jam']) ?>
</td>

<td>
<?= htmlspecialchars($data['durasi']) ?> Jam
</td>

<td class="total">

Rp<?= number_format($data['total'], 0, ',', '.') ?>

</td>

</tr>

<?php } ?>

</table>

</div>

<a href="index.php" class="btn">
← Kembali ke Home
</a>

</div>

</body>

</html>