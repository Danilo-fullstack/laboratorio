<title>SSH</title>
<?php
include('./pass.php');
$ip = '18.224.179.239';
$port = 22;
$user = 'root';
//$pass = 'toortoor';
$connection = ssh2_connect($ip, $port);
ssh2_auth_password($connection, $user, $pass);

$script = "mkdir danilo";
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