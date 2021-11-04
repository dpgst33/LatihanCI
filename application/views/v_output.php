<html>
<head>
    <title>Transaksi</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                   Transaksi Toko Sepatu</th>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td>Nama Pembeli</td><td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>No. Hp</td><td>:</td>
                <td><?= $no; ?></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td><td>:</td>
                <td><?= $merk; ?></td>
            </tr>
            <tr>
                <td>Size Sepatu</td><td>:</td>
                <td><?= $size; ?></td>
            </tr>
            <tr>
                <td>Harga</td><td>:</td>
                <td>Rp <?= $harga; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('TokoSepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>

