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
$sql="INSERT INTO produit VALUES('T-shirt noir','T-shirt coton de couleur noire',15.50,10)";

?>
