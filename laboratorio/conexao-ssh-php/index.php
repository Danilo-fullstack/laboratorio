<title>SSH</title>
<?php
include('./pass.php');
$ip = '18.224.179.239';
$port = 22;
$user = 'root';

$connection = ssh2_connect($ip, $port);
ssh2_auth_password($connection, $user, $pass);

$script = $_POST['input'];

// $script = "mkdir teste";
ssh2_exec($connection, $script);
//var_dump ($stream);

//phpinfo();
//$conexao = ssh2_connect($ip, 22);
//var_dump(get_loaded_extensions());
//$connection = ssh2_connect($ip, 22);
//echo 'Current PHP version: ' . phpversion();
//$ssh = new SSH2($ip);
//$ssh->auth($user,$pass);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" value="" name="input" placeholder="Digite um comando">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>