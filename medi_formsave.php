<?php
$dbusername ='root';
$dbpass = '';
$joycon = new PDO('mysql:host=localhost;dbname=medi_plus',$dbusername, 
$dbpass);
if(!$joycon)
{
    die("Fata1 Error:Connection Failed"); 
}
else
{
    echo 'Succesfully connected';
}


/*try {
    $dbusername = 'root';
    $dbpass = '';
    $joycon = new PDO('mysql:host=localhost;dbname=dbcontact', $dbusername, $dbpass);
    $joycon->exec("SET NAMES 'utf8'");

    $joycon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}*/



?>