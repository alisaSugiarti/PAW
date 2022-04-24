<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>form tambah</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4" style="background-color:DarkCyan">
            <div class="mt-3">
                <h1 class="text-center">ADD DATA</span>
                </h1>
            </div>
            <form method="POST" action="action_tambah.php">
                <div class="row">
                    <div class="col-mt-5">
                        <label class="mt-3">Nama Lengkap</label>
                        <input type="text" placeholder="masukkan nama lengkap" class="form-control mt-3" name="nama_alisa">
                    </div>
                    <div class="col-mt-5">
                        <label class="mt-3">Email</label>
                        <input type="text" placeholder="masukkan Email" class="form-control mt-3" name="email_alisa">
                    </div>
                    <div class="col-mt-5">
                        <label class="mt-3">Alamat</label>
                        <input type="text" placeholder="masukkan alamat" class="form-control mt-3" name="alamat_alisa">
                    </div>
                    <div class="col-3" style="margin-left:135px">
                        <button type="submit" class="btn btn-danger mt-3 mb-3" >submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
</body>
</html>