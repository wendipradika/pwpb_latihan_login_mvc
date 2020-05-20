<?php
if ($_SESSION['login'] != 'operator') {
    header('location:' . BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>

<h1>Selamat datang operator</h1>
<a href="<?= BASEURL ?>/home/logout" onclick="return confirm('yakin ingin logout?')">logout</a>
</center>
</body>
</html>