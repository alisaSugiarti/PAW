<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
<fieldset border="1">
    <legend align="center">
        <h3>FORM TAMBAH MAHASISWA</h3>
        <h3>FAKULTAS TEKNIK</h3>
        <h3>UNIVERSITAS TRUNOJOYO MADURA</h3>
    </legend>
    <form method="POST" action="action.php">
        <!-- <p>Nama Mahasiswa : <input type="text" name="nama_mhs"></p><br/>
        <p>NIM Mahasiswa : <input type="text" name="nim_mhs"></p><br/>
        <p>Alamat Mahasiswa : <input type="text" name="alamat_mhs"></p><br/> -->
        
    
    <div class="mb-3 row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputNim" class="col-sm-2 col-form-label">NIM Mahasiswa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nim_mhs" name="nim_mhs">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Mahasiswa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat_mhs" name="alamat_mhs">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</fieldset>
</body>
</html>

