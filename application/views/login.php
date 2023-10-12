<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Silakan Login</h2>
    <?php echo form_open('auth/login'); // Menghubungkan ke controller "auth" dan metode "login" ?>
    <div>
        <label form="username">Username:</label>
        <input type="text" name="username" id="username" />
    </div>
    <div>
        <label form="password">Password:</label>
        <input type="password" name="password" id="password" />
    </div>
    <div>
        <input type="submit" value="Login" />
    </div>
    <?php echo form_close(); ?>
</body>
</html>
?>