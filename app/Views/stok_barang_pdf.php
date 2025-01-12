<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Daftar Stok Barang</h1>
    <p>SMS SHOP</p>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>IMEI</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Memori</th>
            <th>Warna</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($stok_barang)): ?>
            <?php foreach ($stok_barang as $key => $barang): ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= esc($barang['imei_hp']); ?></td>
                    <td><?= esc($barang['merk_hp']); ?></td>
                    <td><?= esc($barang['tipe_hp']); ?></td>
                    <td><?= esc($barang['memory_hp']); ?></td>
                    <td><?= esc($barang['warna_hp']); ?></td>
                    <td>Rp <?= number_format($barang['harga_hp'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7" class="text-center">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
