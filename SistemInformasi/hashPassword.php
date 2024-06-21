<?php
// Ganti 'password_anda' dengan password yang ingin di-hash
$password_plain = 'password_anda';
$password_hash = password_hash($password_plain, PASSWORD_DEFAULT);
echo "Password yang di-hash: " . $password_hash;
?>
