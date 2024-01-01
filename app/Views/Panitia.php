<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Panitia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
        body{
            width: auto;
            margin: auto;
            background-color: #2f4f4f;
            border-radius: 20px;
            padding: 20px 30px;
        }

        h1{
            text-align: center;
            color: #ffff;
        }

        .table{
            width: 1200px;
            margin-top: 10px;
            margin-left: 30px;
            margin-right: 30px;
            background-color: #ffff;
            border-radius: 10px;
            padding: 20px 30px;
        }
        
        </style>
    </head>

    <body>
        <h1>Tabel Panitia</h1>
        <a href="/create" class="btn btn-secondary" >Add New Panitia</a>
        <a href="logout" role="button" class="btn btn-secondary">Logout</a>
        <table class="table table-warning" border="1" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama Panitia</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Panitia as $row) : ?>
                    <tr>
                        <td><?= $row['npm']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['tgl_lhr']; ?></td>
                        <td><?= $row['divisi']; ?></td>
                        <td><?= $row['jabatan']; ?></td>
                        <td>
                            <a href="/edit/<?= $row['npm']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/delete/<?= $row['npm']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>