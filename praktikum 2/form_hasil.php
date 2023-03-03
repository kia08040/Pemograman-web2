<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Input Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-info">
                <th>nama</th>
                <th>mata kuliah</th>
                <th>nilai tugas</th>
                <th>nilai uts</th>
                <th>nilai uas</th>
                <th>total nilai</th>
                <th>keterangan</th>
            </tr>
            <?php require_once "proses_nilai.php"; ?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $matkul; ?></td>
                <td><?= $tugas; ?></td>
                <td><?= $uts; ?></td>
                <td><?= $uas; ?></td>
                <td><?= number_format ($total_nilai, 0 ); ?></td>
                <td><?= $keterangan; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>