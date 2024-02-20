function generatePassword() {
    var inputPassword = document.getElementById('inputPassword').value;
    var passwordLength = document.getElementById('passwordLength').value;

    if (!inputPassword) {
        alert('Masukkan kata sandi contoh terlebih dahulu!');
        return;
    }

    if (passwordLength < 6 || passwordLength > 20) {
        alert('Panjang kata sandi harus antara 6 dan 20 karakter!');
        return;
    }

    var newPassword = generatePasswordFromInput(inputPassword, passwordLength);
    document.getElementById('passwordResult').innerText = 'Kata Sandi Baru: ' + newPassword;
}

function generatePasswordFromInput(inputPassword, length) {
    var characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
    var newPassword = inputPassword;
    while (newPassword.length < length) {
        newPassword += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return newPassword.substr(0, length);
}
