<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Panitia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            body {
                margin-top: 30px;
                background-color: #2f4f4f;
                color: black;
            }

            form {
                width: 700px;
                margin: auto;
                background-color:#c0c0c0;
                border-radius: 10px;
                padding: 20px 30px;
            }

            h1{
                text-align: center;
                color: #ffff;
            }
        </style>
    </head>

    <body>
        <h1>Edit Data</h1>
        <form action="/edit/<?= $Panitia['npm'] ?>" method="post">
        <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" name="npm" id="npm" class="form-control" value="<?= $Panitia['npm'] ?>"required>
            </div>    
        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $Panitia['nama'] ?>"required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $Panitia['alamat'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="tgl_lhr" class="form-label">Tanggal Lahir</label>
                <input type="text" name="tgl_lhr" id="tgl_lhr" class="form-control" value="<?= $Panitia['tgl_lhr'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="divisi" class="form-label">Divisi</label>
                <input type="text" name="divisi" id="divisi" class="form-control" value="<?= $Panitia['divisi'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" id="divisi" class="form-control" value="<?= $Panitia['jabatan'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </body>
</html>