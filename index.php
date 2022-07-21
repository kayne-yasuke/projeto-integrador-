<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login_prof.php" method="POST">
        <fieldset>
        <legend>Login Professor</legend>
        <label for="login">Login</label>
        <input type="text" name="login">
        <label for="senha">Senha</label>
        <input type="password" name="senha"> 
        <br>
        <br>
        <input type="submit" value="enviar">
    </fieldset>
    </form>
</body>
</html>
<style>
    form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform:translate(-50%,-50%);
        width: 200px;
        height: 100px;
    }
</style>