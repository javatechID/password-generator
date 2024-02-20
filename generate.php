<?php
function generatePasswordFromInput($inputPassword) {
    // Memecah kata sandi menjadi karakter-karakter individu
    $characters = str_split($inputPassword);
    // Mengacak urutan karakter-karakter kecuali karakter pertama
    shuffle($characters);
    // Menggabungkan karakter-karakter kembali menjadi sebuah kata sandi baru
    $newPassword = implode('', $characters);
    return $newPassword;
}

// Mendapatkan nilai input dari formulir
$inputPassword = $_POST['inputPassword'];

// Memeriksa apakah input tidak kosong
if (empty($inputPassword)) {
    // Redirect kembali ke halaman utama dengan pesan kesalahan
    header("Location: index.php?error=true");
    exit;
}

// Menghasilkan kata sandi baru menggunakan fungsi
$newPassword = generatePasswordFromInput($inputPassword);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Generator Result</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Password Generator Result</h1>
    <div class="result animated fadeIn">
        <p><strong>Kata Sandi Baru:</strong> <?php echo $newPassword; ?></p>
    </div>
    <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
</body>
</html>
