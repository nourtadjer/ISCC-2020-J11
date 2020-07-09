<?php
    
    function connect_to_database(){
         $servername = "localhost";
         $username = "root";
         $password = "";
         $databasename = "BaseTest01";
       
    try {
        $pdo= new PDO("mysql:host=$servername;dbname=$databasename",$username, $password);
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

             echo "Connected successfully";
             return $pdo;
            
    }        catch (PDOException $e){
                echo "Connection failed:". $e->getMessage();
            }
        
}
         $servername = "localhost";
         $username = "root";
         $password = "";
         $databasename = "BaseTest01";
$pdo= new PDO("mysql:host=$servername;dbname=$databasename",$username, $password);
$sql = "UPDATE produit SET quantité=1 WHERE id=4 ";
$stmt= $pdo->prepare($sql);
$stmt->execute();
?>
