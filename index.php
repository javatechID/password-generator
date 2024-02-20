<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Generator</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Password Generator</h1>
    <form action="generate.php" method="post">
        <div class="form-group">
            <label for="inputPassword">Masukkan Kata Sandi Contoh:</label>
            <input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="Contoh: WAHYU" required>
        </div>
        <div class="form-group">
            <label for="passwordLength">Panjang Kata Sandi (6-20 karakter):</label>
            <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="6" max="20" value="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Kata Sandi</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
</body>
</html>
