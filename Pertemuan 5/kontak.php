<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Kontak</title>
</head>

<body>
    <form action="confirmation.php" method="POST">
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container d-flex flex-column justify-content-center align-items-left p-5 my-5 mx-auto border">
            <h1>Formulir Kontak:</h1>
            <div class="mb-3 mt-3">
                <div class="row">
                    <div class="col-1">
                        <label class="form-label">Nama:</label>
                    </div>
                    <div class="col">
                        <input class="form-control w-25" placeholder="Masukkan Nama" type=" text" id="nama" name="nama">
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Kewarganegaraan:</label> <br>
                <input class="form-check-input" type="radio" id="wni" name="citizenship" value="WNI">
                <label class="form-check-label" for="wni">WNI</label>
                <br>
                <input class="form-check-input" type="radio" id="asing" name="citizenship" value="Asing">
                <label class="form-check-label" for="asing">Asing</label>
                <br>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Layanan:</label> <br>
                <input class="form-check-input" type="checkbox" id="website" name="website[]" value="Website">
                <label class="form-check-label" for="website">Website</label>
                <br>
                <input class="form-check-input" type="checkbox" id="hosting" name="website[]" value="Hosting">
                <label class="form-check-label" for="hosting">Hosting</label>
                <br>
            </div>
            <div class="mb-3 mt-3">
            <label class="form-label">Hobby:</label> <br>
                <input class="form-check-input" type="checkbox" id="jogging" name="hobby[]" value="Jogging">
                <label class="form-check-label" for="jogging">Jogging</label>
                <br>
                <input class="form-check-input" type="checkbox" id="membaca" name="hobby[]" value="Membaca">
                <label class="form-check-label" for="membaca">Membaca</label>
                <br>
                <input class="form-check-input" type="checkbox" id="renang" name="hobby[]" value="Renang">
                <label class="form-check-label" for="renang">Renang</label>
                <br>
            <br>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-check-label" for="birthday">Tanggal Lahir:</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Kirim">
                <input class="btn btn-danger" type="reset" value="Hapus">
            </div>
    </form>
</body>

</html>