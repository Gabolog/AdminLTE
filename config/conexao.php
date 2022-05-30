<?php
try{

    DEFINE('HOST','localhost');
    DEFINE('DB','webea');
    DEFINE('USER','root');
    DEFINE('PASS','artesesboco');

    $connect = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "<strong>ERRO DE PDO = </strong>" .$e->getMessage();
    
}
