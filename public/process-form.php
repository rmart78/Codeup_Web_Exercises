<?php
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup.dev</title>
</head>
<body>        
<form method="POST" action="/process-form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit">
    </p>
</form>
</body>
</html>