<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<form method="post" action="postLogin">
    <label>E-mail</label>
    <input type="email" name="email" placeholder="E-mail"><br>
    <label>password</label>
    <input type="password" name="pass" placeholder="Password"><br>
    <label >Send</label>
    <input type="submit" name="send" >
</form>
</body>
</html>
